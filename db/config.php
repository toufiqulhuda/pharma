<?php
if (file_exists(dirname(__FILE__)."/settings.php")) {
    include dirname(__FILE__)."/settings.php";
} else {
    die("Unable to include ".dirname(__FILE__)."/settings.php");
}

class DbServerSetting
{
    protected $configFilePath;
    private $dataBaseConfigs;
    protected $crypto;
    function __construct()
    {
        $this->configFilePath = DATABASE_CONFIG_FILE;
        include_once 'encryption.php';
        $this->dataBaseConfigs = file_get_contents($this->configFilePath);
        $this->crypto = new Crypto(KEY_FILE);
    }

    public function loadDbConfig($database_name = "LOCAL")
    {
        $config = json_decode($this->crypto->decrypt($this->dataBaseConfigs), true);
        return $config[CURRENT_CONN];
    }
    public function documentRoot(){
        $config = json_decode($this->crypto->decrypt($this->dataBaseConfigs), true);
        return $config[SERVER_DIR];
    }
    public function hardwareInfo(){
        $config = json_decode($this->crypto->decrypt($this->dataBaseConfigs), true);
        return $config[HARDWARE_INFO];
    }

}