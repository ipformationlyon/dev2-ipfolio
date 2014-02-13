<?php 
class Core_Bootstrap extends Zend_Application_Module_Bootstrap
{
    
    protected function _initPlugins()
    {
    }
    
    protected function _initAcl(){
        $fc = Zend_Controller_Front::getInstance();
        $fc->registerPlugin(new Core_Plugin_Acl(), 90);
         
        $acl = new Zend_Acl();
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::GUEST));
        $acl->addRole(new Zend_Acl_Role(Core_Model_User::ROOT), array(Core_Model_User::GUEST));
    
        $acl->addResource('Core::education::index');
        $acl->addResource('Core::education::create');
        $acl->addResource('Core::education::read');
        $acl->addResource('Core::education::update');
        $acl->addResource('Core::education::delete');
        $acl->addResource('Core::error::error');
        $acl->addResource('Core::index::index');
        $acl->addResource('Core::auth::login');
        $acl->addResource('Core::auth::logout');
        
        $acl->allow(Core_Model_User::GUEST, 'Core::error::error');
        $acl->allow(Core_Model_User::GUEST, 'Core::index::index');
        $acl->allow(Core_Model_User::GUEST, 'Core::education::index');
        $acl->allow(Core_Model_User::GUEST, 'Core::education::read');
        
        $acl->allow(Core_Model_User::ROOT, 'Core::education::create');
        $acl->allow(Core_Model_User::ROOT, 'Core::education::update');
        $acl->allow(Core_Model_User::ROOT, 'Core::education::delete');
        
        $acl->allow(Core_Model_User::GUEST, 'Core::auth::login');
        $acl->deny(Core_Model_User::GUEST, 'Core::auth::logout');
        
        $acl->allow(Core_Model_User::ROOT, 'Core::auth::logout');
        $acl->deny(Core_Model_User::ROOT, 'Core::auth::login');
    
        Zend_Registry::set('Zend_Acl', $acl);
    }
}