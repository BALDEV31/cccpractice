<?php
class Lib_Connection{
    protected $_conn = false;

    public function __construct()
    {
      $this->connect();
    }

    public function connect()
    {
        if (!is_null($this->_conn)) {
            $this->_conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            if ($this->_conn === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. ". mysqli_connect_error() . "</h3>");
            }
        }
        // var_dump($this->connect()->error);
        return $this->_conn;

    }

    public function exec($sql)
    {
    	try {
    		$test = $this->connect()->query($sql);
    		// var_dump($this->connect()->error);
            return $test;
    	} catch(Exception $e) {
    		var_dump($e->getMessage());
    	}
    }
}
?>