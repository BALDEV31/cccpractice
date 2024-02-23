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

    public function fetchRow($query)
    {
        $row = [];
        $this->connect();
        $result = mysqli_query($this->connect, $query);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
    }

    public function insert($query)
    {
        // $this->connect();
        echo 'inside insert';
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return mysqli_insert_id($this->connect());
        } else {
            return false;
        }
    }

    public function update($query){
        echo 'inside update';
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            echo 'inside if';
            return true;
        } else {
            return false;
        }
    }

    public function delete($query)
    {   
        echo '<pre>';
        echo $query;
        echo "inside";
        $result = mysqli_query($this->connect(), $query);
        // print_r($result);
        if ($result) {
            echo"inside delete";
            return mysqli_affected_rows($this->connect());
        } else {
            return false;
        }
    }
}
