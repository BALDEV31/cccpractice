<?php
class Customer_Controller_Account extends Core_Controller_Front_Action
{
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
            $data = $this->getRequest()->getParams('customer_register');
            if (isset($data)) {
                $layout = $this->getLayout();
                $layout->removeChild('header')->removeChild('footer');
                $layout->getChild('head')->addCss('customer/account/login.css');
                $child = $layout->getChild('content');
                $loginForm = $layout->createBlock('customer/account_login');
                $child->addChild('loginForm', $loginForm);
                $layout->toHtml();
            }
        } else {
            $data = $this->getRequest()->getParams('customer_login');
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
                    $address = Mage::getBaseUrl('customer/account');
                    Mage::getSingleton('core/session')->set('logged_in_customer_id', $customerId);
                    echo "<script>
                    alert('Customer logged in successfully');
                    location. href='{$address}/dashboard';
                    </script>";
                }
                else{
                    echo "<script>
                    alert('invalid password or email');
                    </script>";
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
        // print_r($existingEmail);
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

        // echo $customerId;
    }

    public function forgotpasswordAction(){
        $layout = $this->getLayout();
        $layout->removeChild('header')->removeChild('footer');
        $layout->getChild('head')->addCss('customer/account/forgotpassword.css');
        $child = $layout->getChild('content');
        $password = $layout->createBlock('customer/account_forgotPassword');
        $child->addChild('password', $password);
        $layout->toHtml();
    }
}
