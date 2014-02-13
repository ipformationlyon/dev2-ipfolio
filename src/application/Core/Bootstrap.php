<?php 

/**
 * Bootstrap du module Core
 * 
 * @category    App1
 * @package     Core
 * @desc        Bootstrap du module Core
 * @author      jb <jb@ipformation-lyon.com>
 *  
 */
class Core_Bootstrap extends Zend_Application_Module_Bootstrap
{
     protected function _initAcl(){
     	$fc = Zend_Controller_Front::getInstance();
     	$fc->registerPlugin(new Core_Plugin_Acl(), 90);
     
     	$acl = new Zend_Acl();
     	$acl->addRole(new Zend_Acl_Role(Core_Model_User::GUEST));
     	$acl->addRole(new Zend_Acl_Role(Core_Model_User::ROOT), array(Core_Model_User::GUEST));
     	
     	$acl->addResource('Core::auth::login');
     	$acl->allow(Core_Model_User::GUEST, 'Core::auth::login');
     	
      	Zend_Registry::set('Zend_Acl', $acl);
     }
}