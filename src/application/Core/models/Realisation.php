<?php

class Core_Model_Realisation implements Zend_Acl_Resource_Interface
{
    const ENTITY = 'realisation';
    
    private $realisationId;
    private $realisationIntitule;
    private $realisationDate;
    private $realisationDescription;
    private $realisationImage;
    
    public function getResourceId()
    {
        return self::ENTITY;
    }
    
	/**
     * @return the $realisationId
     */
    public function getRealisationId()
    {
        return $this->realisationId;
    }

	/**
     * @return the $realisationIntitule
     */
    public function getRealisationIntitule()
    {
        return $this->realisationIntitule;
    }

	/**
     * @return the $realisationDate
     */
    public function getRealisationDate()
    {
        return $this->realisationDate;
    }

	/**
     * @return the $realisationDescription
     */
    public function getRealisationDescription()
    {
        return $this->realisationDescription;
    }

	/**
     * @return the $realisationImage
     */
    public function getRealisationImage()
    {
        return $this->realisationImage;
    }

	/**
     * @param field_type $realisationId
     */
    public function setRealisationId($realisationId)
    {
        $this->realisationId = $realisationId;
    }

	/**
     * @param field_type $realisationIntitule
     */
    public function setRealisationIntitule($realisationIntitule)
    {
        $this->realisationIntitule = $realisationIntitule;
    }

	/**
     * @param field_type $realisationDate
     */
    public function setRealisationDate($realisationDate)
    {
        $this->realisationDate = $realisationDate;
    }

	/**
     * @param field_type $realisationDescription
     */
    public function setRealisationDescription($realisationDescription)
    {
        $this->realisationDescription = $realisationDescription;
    }

	/**
     * @param field_type $realisationImage
     */
    public function setRealisationImage($realisationImage)
    {
        $this->realisationImage = $realisationImage;
    }



}