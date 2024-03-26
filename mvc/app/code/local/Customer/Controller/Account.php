<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
    protected $_allowedActions = ['login','register'];

    public function init(){
        if(!in_array($this->getRequest()->getActionName(), $this->_allowedActions )&& 
        !Mage::getSingleton('core/session')->get('logged_in_customer_id')){
            $this->setRedirect('customer/account/login');
        }
    }
    public function registerAction()
    {
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $layout->getChild('head')->addCss('customer/account/register.css');
        $child = $layout->getChild('content');
        $register = $layout->createBlock('customer/account_register');
        $child->addChild('register', $register);
        $layout->toHtml();
    }

    public function loginAction()
    {
        if (!$this->getRequest()->isPost()) {
                $layout = $this->getLayout();
                $layout->removeChild('header')->removeChild('footer');
                $layout->getChild('head')->addCss('customer/account/login.css');
                $child = $layout->getChild('content');
                $loginForm = $layout->createBlock('customer/account_login');
                $child->addChild('loginForm', $loginForm);
                $layout->toHtml();
        } else {
            $data = $this->getRequest()->getParams('customer_login');
            // echo 1245;
            if (isset($data)) {
                $email = isset($data['customer_email']) ? $data['customer_email'] : '';
                $password = isset($data['password']) ? $data['password'] : '';
                $customerCollection = Mage::getModel('customer/customer')->getCollection()
                    ->addFieldToFilter('customer_email', $email)
                    ->addFieldToFilter('password', $password);
                // print_r($data);
                $count = 0;
                $customerId = 0;
                foreach ($customerCollection->getData() as $row) {
                    // print_r($row);
                    $count++;
                    $customerId = $row->getId();
                    // echo 'hi';
                }

                // echo $count;
                if ($count) {
                    echo "<pre>";
                    Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
                    Mage::getSingleton('sales/quote')->initQuote();
                    // die;
                    $this->setRedirect("customer/account/dashboard");
                }
                else{
                    // echo 123;
                    $this->setRedirect("customer/account/login");
                }
            }
        }
    }

    public function saveAction()
    {
        echo '<pre>';
        $data = $this->getRequest()->getParams('customer_register');
        $account = Mage::getModel('customer/customer');
        $existingEmail = $account->getCollection()->addFieldToFilter('customer_email', $data['customer_email'])->getData();
        $address = Mage::getBaseUrl('customer/account');
        if (count($existingEmail)) {
            echo 'mail already exists';
        } else {
            $account->setData($data)->save();
            echo "<script>
            alert('Customer register successfully');
            // location. href='{$address}/login';
            </script>";
        }
    }

    public function dashboardAction()
    {
        $customerId = Mage::getSingleton('core/session')->get('logged_in_customer_id');
    }

    public function forgetpasswordAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $layout->getChild('head')->addCss('customer/account/forgotpassword.css');
        $child = $layout->getChild('content');
        $password = $layout->createBlock('customer/account_forgotPassword');
        $child->addChild('password', $password);
        $layout->toHtml();
    }

    public function logOutAction(){
        Mage::getSingleton('core/session')->remove('quote_id');
        Mage::getSingleton('core/session')->remove('logged_in_customer_id');
        $this->setRedirect('customer/account/login');
    }
}
