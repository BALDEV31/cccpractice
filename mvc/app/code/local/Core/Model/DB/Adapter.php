<?php
class Core_Model_DB_Adapter{
    public $config = [
        "host"=> "localhost",
        "user"=>"root",        
        "password"=> "",
        "database"=> "",
    ];

    public $connect = null;

    public function connect(){
        if(is_null($this->connect)){
            $this->connect = new mysqli($this->config["host"],$this->config["user"],$this->config["password"],$this->config["database"]);
        }
    }
}
?>