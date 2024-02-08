<?php
class Model_Abstract
{
    public function getQueryBuilder()
    {
        return new Lib_Sql_Query_Builder();
    }

    public function getTableData(){
        return new Model_Product();
    }

}
?>