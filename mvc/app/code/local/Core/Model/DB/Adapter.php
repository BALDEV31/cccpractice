<?php
class Core_Model_DB_Adapter
{
    public $config = [
        "host" => "localhost",
        "user" => "root",
        "password" => "",
        "database" => "tables",
    ];

    public $connect = null;

    public function connect()
    {
        if (is_null($this->connect)) {
            $this->connect = new mysqli($this->config["host"], $this->config["user"], $this->config["password"], $this->config["database"]);
        }
        return $this->connect;
    }

    public function fetchAll($query)
    {
        $row = [];
        // $this->connect();
        $result = mysqli_query($this->connect(), $query);
        while ($_row = $result->fetch_assoc()) {
            $row[] = $_row;
        }
        return $row;
    }

    public function fetchRow($query)
    {
        $row = [];
        $this->connect();
        $result = mysqli_query($this->connect, $query);
        // var_dump($query);
        // var_dump($result);
        while ($_row = mysqli_fetch_assoc($result)){
            $row = $_row;
        }
        return $row;
    }

    public function insert($query)
    {
        // $this->connect();
        // echo 'inside insert';
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return mysqli_insert_id($this->connect());
        } else {
            return false;
        }
    }

    public function update($query){
        // echo 'inside update';
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            // echo 'inside if';
            return true;
        } else {
            return false;
        }
    }

    public function delete($query)
    {   
        $result = mysqli_query($this->connect(), $query);
        // print_r($result);
        if ($result) {
            return mysqli_affected_rows($this->connect());
        } else {
            return false;
        }
    }
}
