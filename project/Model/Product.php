<?php
class Model_Product extends Model_Abstract{
    public $tableName = "ccc_product";
    public function __construct()
    {
       
    }

    public function save($data)
    {
        echo "<pre>";
        $sql = $this->getQueryBuilder()->insert($this->tableName,$data);
        echo $sql;
        $this->getQueryBuilder()->exec($sql);
    }

    public function getData(){
        $data = $this->getQueryBuilder()->select($this->tableName,['*']);
        // echo $data;
        $data1=$this->getQueryBuilder()->exec($data);
        return $data1;
    }

    public function fetchAllRow($result){
        $data =[];
        while ($row = mysqli_fetch_assoc($result)) {
            $data[] = $row; 
        }
        return $data;
    }

    public function fetchrow($index,$result){
        return $result[$index];
    }
}
?>