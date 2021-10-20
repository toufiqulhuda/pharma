<?php
//Start session
session_start();

//Array to store validation errors
$errmsg_arr = array();

//Validation error flag
$errflag = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (file_exists(dirname(__FILE__)."/connect.php")) {
		include dirname(__FILE__)."/connect.php";
	} else {
		die("Unable to include ".dirname(__FILE__)."/connect.php");
	}

	//Sanitize the POST values
	$login = trim($_POST['username']); //trim($_POST['username']);
	$password = trim($_POST['password']); //trim($_POST['password']);

	// Check if username is empty
	if (empty($login)) {
		$errmsg_arr[] = "Please enter username.";
		$errflag = true;
	}

	// Check if password is empty
	if (empty($password)) {
		$errmsg_arr[] = "Please enter your password.";
		$errflag = true;
	}

	//If there are input validations, redirect back to the login form
	if ($errflag) {
		$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
		session_write_close();
		header("location: index.php");
		exit();
	}

	//Create query
	$qry = "SELECT id,name,position,password FROM user WHERE username=:username";
	try {
		$result = $db->prepare($qry);
		//Check whether the query was successful or not
		if ($result) {
			$result->bindParam(":username", $login, PDO::PARAM_STR);
			if ($result->execute()) {
				if ($result->rowCount() == 1) {
					if ($row = $result->fetch()) {
						$vID = $row['id'];
						$vName = $row['name'];
						$vPosition = $row['position'];
						$hashed_password = $row['password'];
						if (password_verify($password, $hashed_password)) {
							//Login Successful
							session_regenerate_id();

							$_SESSION['SESS_MEMBER_ID'] = $vID;
							$_SESSION['SESS_FIRST_NAME'] = $vName;
							$_SESSION['SESS_LAST_NAME'] = $vPosition;

							session_write_close();
							header("location: main/index.php");
							exit();
						} else {
							$errmsg_arr[] = "Invalid username or password.";
							$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
							session_write_close();
							header("location: index.php");
							exit();
						}
					}
				} else {
					$errmsg_arr[] = "Invalid username or password.";
					$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
					session_write_close();
					header("location: index.php");
					exit();
				}
			} else {
				$errmsg_arr[] = "Oops! Something went wrong. Please try again later.";
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php");
				exit();
			}
			// Close statement
			unset($result);
		}
		// Close connection
		unset($db);
	} catch (PDOException $db) {
		echo $pdo->getMessage();
	}
}else{
	header("location: index.php");
	exit();
}
