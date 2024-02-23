<?php
class Core_Model_Resource_Abstract
{
    protected $_tableName = "";
    protected $_primaryKey = "";

    public function init($tableName, $primaryKey)
    {
        $this->_tableName = $tableName;
        $this->_primaryKey = $primaryKey;
    }

    public function getTableName()
    {
        return $this->_tableName;
    }

    public function save(Core_Model_Abstract $abstract)
    {echo'<pre>';
        $data = $abstract->getData();
        print_r($data);
        die();
        if (isset($data[$this->getPrimaryKey()])) {
            $sql = $this->updateSql($this->getTableName(), $data, [$this->getPrimaryKey() => $abstract->getId()]);
            $this->getAdapter()->update($sql);
        } else {
            $sql = $this->insertSql($this->getTableName(), $data);
            $id = $this->getAdapter()->insert($sql);
            $abstract->setId($id);
            var_dump($id);
        }
    }

    public function delete(Core_Model_Abstract $abstract)
    {
        $data = $abstract->getId();
        $query = $this->deleteSql($this->getTableName(), [$this->getPrimaryKey() => $data]);
        $this->getAdapter()->delete($query);
    }


    function deleteSql($table_name, $condition)
    {
        $whereCondition = [];

        foreach ($condition as $field => $value) {
            addslashes($value);
            $whereCondition[] = "$field = '$value'";
        }

        $whereCondition = implode("AND", $whereCondition);
        return "DELETE FROM {$table_name} WHERE {$whereCondition}";
    }

    public function insertSql($table_name, $data)
    {
        $columns = $values = [];
        foreach ($data as $column => $value) {
            $value = addslashes($value);
            $columns[] = "`$column`";
            $values[] = "'$value'";
        }
        $columns = implode(",", $columns);
        $values = implode(",", $values);
        return "INSERT INTO {$table_name} ({$columns})  VALUES ({$values})";
    }

    public function updateSql($table_name, $data, $condition)
    {
        $columns = $where = [];
        // Prepare SET clause for update
        foreach ($data as $field => $values) {
            $values = addslashes($values);
            $columns[] = "`$field` = '$values'";
        }
        //WHERE condition for update
        foreach ($condition as $field => $value) {
            $value = addslashes($value);
            $where[] = "`$field` = '$value'";
        }

        $columns = implode(",", $columns);
        $condition = implode("AND", $where);

        return "UPDATE {$table_name} SET {$columns} WHERE {$condition}";
    }
    public function load($id, $column = null)
    {
        $sql = "SELECT * FROM {$this->_tableName} WHERE {$this->_primaryKey}={$id} LIMIT 1";
        return $this->getAdapter()->fetchRow($sql);
    }

    public function getAdapter()
    {
        return new Core_Model_DB_Adapter();
    }


    public function getPrimaryKey()
    {
        return $this->_primaryKey;
    }
}
