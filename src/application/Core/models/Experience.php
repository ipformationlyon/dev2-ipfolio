<?php

class Core_Model_Experience implements Zend_Acl_Resource_Interface
{
	private $experienceId;
	private $experienceDateDebut;
	private $experienceDateFin;
	private $experienceDescription;
	private $experienceIntitule;
	private $experienceLieu;
	private $experienceEntreprise;
	
	/**
     * @return the $experienceId
     */
    public function getExperienceId()
    {
        return $this->experienceId;
    }

	/**
     * @return the $experienceDateDebut
     */
    public function getExperienceDateDebut()
    {
        return $this->experienceDateDebut;
    }

	/**
     * @return the $experienceDateFin
     */
    public function getExperienceDateFin()
    {
        return $this->experienceDateFin;
    }

	/**
     * @return the $experienceDescription
     */
    public function getExperienceDescription()
    {
        return $this->experienceDescription;
    }

	/**
     * @return the $experienceIntitule
     */
    public function getExperienceIntitule()
    {
        return $this->experienceIntitule;
    }

	/**
     * @return the $experienceLieu
     */
    public function getExperienceLieu()
    {
        return $this->experienceLieu;
    }

	/**
     * @param field_type $experienceId
     */
    public function setExperienceId($experienceId)
    {
        $this->experienceId = $experienceId;
    }

	/**
     * @param field_type $experienceDateDebut
     */
    public function setExperienceDateDebut($experienceDateDebut)
    {
        $this->experienceDateDebut = $experienceDateDebut;
    }

	/**
     * @param field_type $experienceDateFin
     */
    public function setExperienceDateFin($experienceDateFin)
    {
        $this->experienceDateFin = $experienceDateFin;
    }

	/**
     * @param field_type $experienceDescription
     */
    public function setExperienceDescription($experienceDescription)
    {
        $this->experienceDescription = $experienceDescription;
    }

	/**
     * @param field_type $experienceIntitule
     */
    public function setExperienceIntitule($experienceIntitule)
    {
        $this->experienceIntitule = $experienceIntitule;
    }

	/**
     * @param field_type $experienceLieu
     */
    public function setExperienceLieu($experienceLieu)
    {
        $this->experienceLieu = $experienceLieu;
    }
	/**
     * @return the $experienceEntreprise
     */
    public function getExperienceEntreprise()
    {
        return $this->experienceEntreprise;
    }

	/**
     * @param field_type $experienceEntreprise
     */
    public function setExperienceEntreprise($experienceEntreprise)
    {
        $this->experienceEntreprise = $experienceEntreprise;
    }
	/* (non-PHPdoc)
     * @see Zend_Acl_Resource_Interface::getResourceId()
     */
    public function getResourceId()
    {
        // TODO Auto-generated method stub
        
    }



	
}
?>