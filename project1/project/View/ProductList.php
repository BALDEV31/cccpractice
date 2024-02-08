<?php
class View_ProductList extends Model_Abstract{
    public $notshow;
    public function __construct()
    {
        $this->notshow='id';
    }

    public function toHtml($headings=['Product Name','SKU','Product Type','Category','Manufacturer Cost','Shipping Cost','Total','Price','Status','Created At','Updated At']) {
        $tableData = $this->getTableData()->getAllData();
        // print_r($tableData);
        echo "<table style='border-collapse: collapse; border: 1px solid black;'>";
        echo "<tr style='border: 1px solid black;'>";
        foreach ($headings as $heading) {
            echo "<th style='border: 1px solid black;'>{$heading}</th>";
        }
        echo "</tr>";
        foreach ($tableData as $data) {
            // print_r($data);
            echo "<tr style='border: 1px solid black;'>";
            foreach ($data as $key1 => $value1) {
                if ($key1 != $this->notshow) {
                    echo "<td style='border: 1px solid black;'>{$value1}</td>";
                }
            }
            echo "<td style='border: 1px solid black;'><a href='?id={$data['id']}&action=edit'>Edit</a></td>";
            echo "<td style='border: 1px solid black;'><a href='?id={$data['id']}&action=delete'>Delete</a></td>";
            echo "</tr>";
        }
        echo "</table>";
    }    
}
?>