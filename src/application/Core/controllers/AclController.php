<?php

class AclController extends Zend_Controller_Action
{

    public function indexAction()
    {
        
    }
    
    public function conversationAction(){
        $this->_helper->viewRenderer->setNoRender();
        
        $acl = Zend_Registry::get('Zend_Acl');
        
        if(! $acl->isAllowed('guest', 'author', 'discuter')){
            throw new Exception('Vous n\'êtes pas autoriser');
        }
        
        echo 'Discussion';
    }
}