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
        // var_dump($result);
        while ($_row = mysqli_fetch_assoc($result)) {
            $row = $_row;
        }
        return $row;
    }

    public function insert($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return mysqli_insert_id($this->connect());
        } else {
            return false;
        }
    }

    public function update($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return true;
        } else {
            return false;
        }
    }

    public function delete($query)
    {
        $result = mysqli_query($this->connect(), $query);
        if ($result) {
            return mysqli_affected_rows($this->connect());
        } else {
            return false;
        }
    }

    public function saveImport($tableName, $data)
    {
        $keys = array_keys($data);
        $values = array_map(function ($value) {
            return "'" . $value . "'";
        }, $data);

        $check = Mage::getModel('catalog/product')->getCollection()->addFieldToFilter('sku', $data['sku'])->getFirstItem();
        if ($check) {
            $updateValues = array();
            foreach ($values as $key => $column) {
                $updateValues[] = "$key = " . $column;
            }
            $sql = "UPDATE {$tableName} SET " . implode(", ", $updateValues) . " WHERE sku=" . "'" . $data['sku'] . "'";
        } else {
            $sql = "INSERT INTO {$tableName} (" . implode(", ", $keys) . ") VALUES (" . implode(", ", $values) . ")";
        }
        mysqli_query($this->connect(), $sql);
    }
}
