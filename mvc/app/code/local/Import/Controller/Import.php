<!-- <pre> -->
<?php
class Import_Controller_Import extends Core_Controller_Front_Action
{
    public function formAction()
    {
        $layout = $this->getLayout();
        $layout->getChild('head')->addCss('import/form.css');
        $child = $layout->getChild('content');
        $form = $layout->createBlock('import/import');
        $child->addChild('form', $form);
        $layout->toHtml();
    }

    public function saveAction()
    {
        $csvfileData = $this->getRequest()->getFileData('csvfile');
        // print_r($csvfileData);
        $csvfileName = $csvfileData['name'];
        if (!empty($csvfileName)) {
            $targetDir = Mage::getBaseDir('media/import/') . $csvfileName;
            $csvfileData['name'] = $csvfileName;

            if (move_uploaded_file($csvfileData["tmp_name"], $targetDir)) {
                echo "File uploaded successfully.";
            } else {
                echo "Error uploading file.";
            }
        }
        // $importModel = Mage::getModel("import/import");
        // $importModel->setData($csvfileData)->save();
    }

    public function readAction()
    {
        $row = 0;
        $header = [];
        $path = Mage::getBaseDir("media/import/") . "Book1.csv";
        if (!file_exists($path)) {
            echo "File not found: $path";
            exit;
        }
        if (($handle = fopen($path, "r")) !== FALSE) {
            while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
                if (!$row) {
                    $header = $data;
                    $row++;
                    continue;
                }
                $data1 = array_combine($header, $data);
                // print_r($data1);
                $jsonData = json_encode($data1);
                Mage::getModel("import/import")->setData(["data" => $jsonData])
                    ->save();

                echo "<br>";
                $row++;
            }
            fclose($handle);
        } else {
            echo "Failed to open file: $path";
        }
    }

    public function importAction()
    {
        $dbAdapter = new Core_Model_DB_Adapter();

        try {
            $importData = Mage::getModel('import/import')->getCollection()->addFieldToFilter('status', 0)->getData();
            foreach ($importData as $importRow) {
                $data = json_decode($importRow->getData()['data'], true);              
                $dbAdapter->saveImport("catalog_product", $data);
                Mage::getModel('import/import')->setData($importRow->getData())->addData('status',1)->save();
            }
            echo "Records inserted successfully";
        } catch (Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}
