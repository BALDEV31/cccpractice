<?php
function insert($table_name,$data=[]){
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


function update($table_name,$data=[],$condition=[]){
    $columns = $where = [];
    // Prepare SET clause for update
    foreach($data as $field => $values){
        $values = addslashes($values);
        $columns[] = "`$field` = '$values'";
    }
    //WHERE condition for update
    foreach($condition as $field => $value){
        $where[] ="$field = '$value'";
    }

    $columns = implode(",",$columns);
    $condition = implode("AND",$where);

    return "UPDATE {$table_name} SET {$columns} WHERE {$condition}";
}

// DELETE FROM table_name
// WHERE condition;

function delete($table_name,$condition=[]){
    $whereCondition=[];

    foreach($condition as $field => $value){
        addslashes($value);
        $whereCondition[] = "$field = '$value'";
    }

    $whereCondition = implode("AND",$whereCondition);
    return "DELETE FROM {$table_name} WHERE {$whereCondition}";
}

// SELECT column1, column2, ...
// FROM table_name
// WHERE condition;

function selectAll($table_name,$id){
   return "SELECT * FROM {$table_name} ORDER BY {$id} DESC LIMIT 10";
}
?>