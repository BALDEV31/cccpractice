<?php
class Controller_Front{
    public function __construct()
    {
        // $data=new Model_Product();
        // $idData=$data->getAllData();
        // $idData=$data->fetchrow($idData);
        
    }

    public function init(){
        $url = new Model_Request();
        $uri = $url->getRequestUri();

        $uriWithoutParams = strtok($uri, '?');
        
        $className = "View_" . ucwords(str_replace("/", "_", $uriWithoutParams), '_');
        $layout = new $className();
        // $className = "View_". ucwords(str_replace("/","_",$uri),'_');
        // $layout = new $className();
        // echo $layout->toHtml();
        if(!$url->isPost()){
            echo $layout->toHtml();
        }
        else{
            $product = new Model_Product();
            print_r($product->save($url->getParams('pdata')));

            // Create modified class name
            $modifiedClassName = "View_" . ucwords(str_replace("/", "_", $uriWithoutParams), '_') . 'List';
            echo $modifiedClassName.'1';

            $modifiedLayout = new $modifiedClassName();
            echo $modifiedLayout->toHtml();

            if ($uri->getParams('id') && $url->getParams('action') == 'edit') {
                $url3 = 'View_' . ucwords(str_replace("/", "_", $uriWithoutParams), '_') . 'ProductList';
                echo $url3;
                echo 'hello';
            }
        }
    }
}
?>