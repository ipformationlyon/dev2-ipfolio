<?php 

class Core_Model_User implements Zend_Acl_Resource_Interface, Zend_Acl_Role_Interface
{
    const GUEST  = "guest";
    const ROOT   = "root";
    const ENTITY = "user";
    
    private $userId;
    private $userRole;
    private $userNom;
    private $userPrenom;
    private $userLogin;
    private $userMdp;
    private $userMail;
    private $userNaissance;
    private $userSexe;
    
    public function getResourceId()
    {
        return self::ENTITY;
    }
    
    public function getRoleId()
    {
        return $this->userRole;
    }
	/**
     * @return the $userId
     */
    public function getUserId()
    {
        return $this->userId;
    }

	/**
     * @return the $userRole
     */
    public function getUserRole()
    {
        return $this->userRole;
    }

	/**
     * @return the $userNom
     */
    public function getUserNom()
    {
        return $this->userNom;
    }

	/**
     * @return the $userPrenom
     */
    public function getUserPrenom()
    {
        return $this->userPrenom;
    }

	/**
     * @return the $userLogin
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

	/**
     * @return the $userMdp
     */
    public function getUserMdp()
    {
        return $this->userMdp;
    }

	/**
     * @return the $userMail
     */
    public function getUserMail()
    {
        return $this->userMail;
    }

	/**
     * @return the $userNaissance
     */
    public function getUserNaissance()
    {
        return $this->userNaissance;
    }

	/**
     * @return the $userSexe
     */
    public function getUserSexe()
    {
        return $this->userSexe;
    }

	/**
     * @param field_type $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

	/**
     * @param field_type $userRole
     */
    public function setUserRole($userRole)
    {
        $this->userRole = $userRole;
    }

	/**
     * @param field_type $userNom
     */
    public function setUserNom($userNom)
    {
        $this->userNom = $userNom;
    }

	/**
     * @param field_type $userPrenom
     */
    public function setUserPrenom($userPrenom)
    {
        $this->userPrenom = $userPrenom;
    }

	/**
     * @param field_type $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    }

	/**
     * @param field_type $userMdp
     */
    public function setUserMdp($userMdp)
    {
        $this->userMdp = $userMdp;
    }

	/**
     * @param field_type $userMail
     */
    public function setUserMail($userMail)
    {
        $this->userMail = $userMail;
    }

	/**
     * @param field_type $userNaissance
     */
    public function setUserNaissance($userNaissance)
    {
        $this->userNaissance = $userNaissance;
    }

	/**
     * @param field_type $userSexe
     */
    public function setUserSexe($userSexe)
    {
        $this->userSexe = $userSexe;
    }

    
}