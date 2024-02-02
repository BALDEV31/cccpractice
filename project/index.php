<?php
echo "<pre>";
include "Lib/autoLoad.php";
$request = new Model_Request();
// var_dump($request);
if(!$request->isPost()) {
	$product1 = new Model_Product();
	$product = new View_Product();
	echo $product->toHtml('Product');
	$data=$product1->getData();
	var_dump($data);
	$data1=$Product1->fetchAllRow($data);
	var_dump($data1);
	print_r($product1->fetchrow(0,$data1));
// } else {
// 	$product = new Model_Product();
// 	$product->save($request->getParams('pdata'));
// 	// print_r($request->getParams('pdata'));
}
?>