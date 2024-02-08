<?php
echo "<pre>";
include "Lib/autoLoad.php";
// $request = new Model_Request();
// $conn = new Lib_Connection();
// $table = new View_ProductList();
// $id =$request->getParams('id');
// echo $id;
// $action = $request->getParams('action');
// echo $action;
// $headings=[];
// // var_dump($r'Product Name','SKU','Product Type','Category','Manufacturer Cost','Shipping Cost','Total','Price','Status','Created At','Updated At'equest);
// if($conn){
// 	if(!$request->isPost()) {
// 		// echo $product->toHtml('product');
		
		// $product1 = new Model_Product();
// 		$query= new Model_Abstract();
// 		if(!$id==0 and $action=='edit'){
// 			$pdata = $product1->fetchrow($id);
// 			$product = new View_Product($pdata);
// 			echo $product->toHtml('product');
// 		}
// 		// $table->showTable('id',$headings);
// 		// $product1 = new Model_Product();
// 		// $product = new View_Product();
// 		// echo $product->toHtml('Product');
// 		// $data=$product1->getData();
// 		// print_r($product1->fetchrow(0,$data));
		
// 	// } else {

// 		if(!$id==0 and $action=='delete'){
// 			$product1->delete($id);
// 		}
// 	// $query= new Model_Abstract();
// 	// 	$data = $query->getQueryBuilder()->select('ccc_product',['*'],['id'=>$id]);
// 	// print_r($request->getPostData('pdata'));
// 	// var_dump($data);
// }
// $table->showTable('id',$headings);
// }
class Ccc{
	public static function init(){
		$frontControllerObj = new Controller_Front();
		$frontControllerObj->init();
	}
}
Ccc::init();
?>