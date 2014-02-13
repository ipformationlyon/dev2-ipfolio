<?php 

class Core_Model_DbTable_Auth extends Zend_Auth_Adapter_DbTable
{
	public function __construct(){
		$this->setTableName('user')
			 ->setIdentityColumn('user_login')
			 ->setCredentialColumn('user_password');
	}
	
	public function authentification($username, $password){
		$this->setIdentity($username)
             ->setCredential($password);
		return $this;
	}
}