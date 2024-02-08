<?php
class Model_Product extends Model_Abstract{
    public $tableName = "ccc_product";
    public function __construct()
    {
       
    }

    // public function save($data)
    // {
    //     $sql = $this->getQueryBuilder()->insert($this->tableName,$data);
    //     // echo $sql;
    //     $this->getQueryBuilder()->exec($sql);
    // }

    public function save($data)
    {
        if (!empty($data['id'])) {
            $id = $data['id'];
            unset($data['id']); // Remove ID from data to avoid updating it
            $sql = $this->getQueryBuilder()->update($this->tableName, $data, ['id' => $id]);
        } else {
            $sql = $this->getQueryBuilder()->insert($this->tableName, $data);
        }

        $this->getQueryBuilder()->exec($sql);
    }

    public function delete($id){
            $sql = $this->getQueryBuilder()->delete($this->tableName,['id'=>$id]);
            $this->getQueryBuilder()->exec($sql);
        }
    

    public function getAllData(){
        $data =[];
        $sql = $this->getQueryBuilder()->select($this->tableName,['*']);
        // echo $data;
        $data1=$this->getQueryBuilder()->exec($sql);
        while ($row = mysqli_fetch_assoc($data1)) {
            $data[] = $row; 
        }
        return $data;
    }

    public function fetchrow($id){
        $sql = $this->getQueryBuilder()->select($this->tableName,['*'],['id'=>$id]);
        $data = $this->getQueryBuilder()->exec($sql);
        // return $this->fetchRowById($data);
    // }
    // public function fetchRowById($result){
        $result =[];
        while ($row = mysqli_fetch_assoc($data)) {
            $result[] = $row; 
        }
        return $result[0];
    }
}
?>