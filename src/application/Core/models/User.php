<?php 

class Core_Model_User implements Zend_Acl_Resource_Interface
{
    private $userId;
    private $userNom;
    private $userPrenom;
    private $userLogin;
    private $userMdp;
    private $userMail;
    private $userNaissance;
    private $userSexe;
    
	/**
     * @return the $userId
     */
    public function getuserId()
    {
        return $this->userId;
    }

    /**
     * @return string
     */
    public function getResourceId(){
        return 'education';
    }
    
	/**
     * @param field_type $userId
     */
    public function setuserId($userId)
    {
        $this->userId = $userId;
        return $this;
    }

	/**
     * @return the $userNom
     */
    public function getuserNom()
    {
        return $this->userNom;
    }

	/**
     * @param field_type $userNom
     */
    public function setuserNom($userNom)
    {
        $this->userNom = $userNom;
        return $this;
    }

	/**
     * @return the $userPrenom
     */
    public function getuserPrenom()
    {
        return $this->userPrenom;
    }

	/**
     * @param field_type $userPrenom
     */
    public function setuserPrenom($userPrenom)
    {
        $this->userPrenom = $userPrenom;
        return $this;
    }

    /**
     * @return the $userLogin
     */
    public function getuserLogin()
    {
    	return $this->userLogin;
    }
    
    /**
     * @param field_type $userLogin
     */
    public function setuserLogin($userLogin)
    {
    	$this->userLogin = $userLogin;
    	return $this;
    }
    
    /**
     * @return the $userMdp
     */
    public function getuserMdp()
    {
    	return $this->userMdp;
    }
    
    /**
     * @param field_type $userMdp
     */
    public function setuserMdp($userMdp)
    {
    	$this->userMdp = $userMdp;
    	return $this;
    }
    
    /**
     * @return the $userMail
     */
    public function getuserMail()
    {
    	return $this->userMail;
    }
    
    /**
     * @param field_type $userMail
     */
    public function setuserMail($userMail)
    {
    	$this->userMail = $userMail;
    	return $this;
    }
    
    /**
     * @return the $userNaissance
     */
    public function getuserNaissance()
    {
    	return $this->userNaissance;
    }
    
    /**
     * @param field_type $userNaissance
     */
    public function setuserNaissance($userNaissance)
    {
    	$this->userNaissance = $userNaissance;
    	return $this;
    }
    
    /**
     * @return the $userSexe
     */
    public function getuserSexe()
    {
    	return $this->userSexe;
    }
    
    /**
     * @param field_type $userSexe
     */
    public function setuserSexe($userSexe)
    {
    	$this->userSexe = $userSexe;
    	return $this;
    }

}