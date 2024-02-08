<?php
class Lib_Sql_Query_Builder extends Lib_Connection{
    public function __construct()
    {
        
    }

    public function insert($table_name,$data=[]){
    $columns = $values = [];
   foreach($data as $column => $value){
    $value=addslashes($value);
    $columns[] = "`$column`";
    $values[] = "'$value'";
   }
    $columns = implode(",",$columns);
    $values = implode(",",$values);
    return "INSERT INTO {$table_name} ({$columns})  VALUES ({$values})";
    }

    public function update($table_name,$data=[],$condition=[]){
        $columns = $where = [];
    // Prepare SET clause for update
    foreach($data as $field => $values){
        $values = addslashes($values);
        $columns[] = "`$field` = '$values'";
    }
    //WHERE condition for update
    foreach($condition as $field => $value){
        $value = addslashes($value);
        $where[] ="`$field` = '$value'";
    }

    $columns = implode(",",$columns);
    $condition = implode("AND",$where);

    return "UPDATE {$table_name} SET {$columns} WHERE {$condition}";
    }

    public function delete($table_name,$condition=[]){
        $whereCondition=[];
    
        foreach($condition as $field => $value){
            addslashes($value);
            $whereCondition[] = "$field = '$value'";
        }
    
        $whereCondition = implode("AND",$whereCondition);
        return "DELETE FROM {$table_name} WHERE {$whereCondition}";
    }

    public function select($table, $columns = ['*'], $where_cn = []){
        // columns -- > (if columns are not given then it takes *)
        $columns_name = implode(',', $columns);
    
        // where con 
        $where_con = [];
        foreach($where_cn as $key => $val){
            $where_con[] = "`$key` = '$val'";
        }
        $where_con = implode(' AND ', $where_con);  // AND, OR
        $sql_str = "SELECT {$columns_name} FROM {$table}";
        if(!empty($where_con)){
            $sql_str .= " WHERE {$where_con}";
        }
        return $sql_str;
    }   
    
}
?>