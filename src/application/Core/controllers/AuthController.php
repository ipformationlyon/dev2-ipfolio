<?php

class AuthController extends Zend_Controller_Action
{

	public function loginAction()
	{
		$form = new Core_Form_Login();
		if ($this->getRequest()->isPost()) {
			if ($form->isValid($_POST)) {
				$username = $form->getValue('username');
				$password = $form->getValue('pass');

				$authDbTable = new Core_Model_DbTable_Auth();
				$authDbTable->authentification($username, $password);

				$auth = Zend_Auth::getInstance();
				$authResult = $auth->authenticate($authDbTable);

				if ($authResult->getCode() == 1) {
					$user = $authDbTable->getUser();
					$auth->getStorage()->write($user);
				}
				$this->_redirect('/accueil.html');
			}
		}
		$this->view->form = $form;
	}

	public function logoutAction()
	{
	    Zend_Auth::getInstance()->clearIdentity();
	    $this->_redirect('/login.html');
	}
}