<?php
class Admin_Controller_User extends Core_Controller_Admin_Action
{

    protected $_allowedActions = ['login'];
    public function loginAction()
    {

        if (!$this->getRequest()->isPost()) {
            $layout = $this->getLayout();
            $layout->removeChild('header')->removeChild('footer');
            $data = $this->getRequest()->getParams('admin_login');
            // var_dump($data);
            $layout->getChild('head')->addCss('customer/account/login.css');
            $child = $layout->getChild('content');
            $adminLogin = $layout->createBlock('admin/user');
            $child->addChild('adminLogin', $adminLogin);
            $layout->toHtml();
        } else {
            // echo'123';
            $data = $this->getRequest()->getParams('admin_login');
            // print_r($data); 
            $adminEmail = 'admin@gmail.com';
            $adminPassword = 'admin';
            if ($adminEmail == $data['admin_email'] && $adminPassword == $data['password']) {
                Mage::getSingleton('core/session')->set('logged_in_admin_user_id', 1);
                $this->setRedirect("admin/catalog_product/form");
            } else {
                $this->setRedirect("admin/user/login");
            }
        }
    }
}
