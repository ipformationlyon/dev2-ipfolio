<?php 

class Core_Model_DbTable_Auth extends Zend_Auth_Adapter_DbTable
{
	public function __construct(){
		
	    $this->setTableName('user')
			 ->setIdentityColumn('login_user')
			 ->setCredentialColumn('mdp_user');
		
		parent::__construct();
	}

	public function authentification($username, $password){
		$this->setIdentity($username)
             ->setCredential($password);
		return $this;
	}
	
	public function getUser()
	{
	    $userRow = $this->getResultRowObject();
	    
	    $user = new Core_Model_User();
	    $user->setUserId($userRow->id_user);
	    $user->setUserRole($userRow->role_user);
	    $user->setUserLogin($userRow->login_user);
	    
	    return $user;
	}
}