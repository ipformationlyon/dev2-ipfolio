<?php

class Core_Model_Education implements Zend_Acl_Resource_Interface
{
	private $educationId;
	private $educationDateDebut;
	private $educationDateFin;
	private $educationDescription;
	private $educationIntitule;
	private $educationLieu;
	/**
	 * @return the $educationId
	 */
	public function getEducationId() {
		return $this->educationId;
	}

	/**
	 * @return the $educationDateDebut
	 */
	public function getEducationDateDebut() {
		return $this->educationDateDebut;
	}

	/**
	 * @return the $educationDateFin
	 */
	public function getEducationDateFin() {
		return $this->educationDateFin;
	}

	/**
	 * @return the $educationDescription
	 */
	public function getEducationDescription() {
		return $this->educationDescription;
	}

	/**
	 * @return the $educationIntitule
	 */
	public function getEducationIntitule() {
		return $this->educationIntitule;
	}

	/**
	 * @return the $educationLieu
	 */
	public function getEducationLieu() {
		return $this->educationLieu;
	}
	
	public function getResourceId(){
		return 'education';
	}

	/**
	 * @param field_type $educationId
	 */
	public function setEducationId($educationId) {
		$this->educationId = $educationId;
	}

	/**
	 * @param field_type $educationDateDebut
	 */
	public function setEducationDateDebut($educationDateDebut) {
		$this->educationDateDebut = $educationDateDebut;
	}

	/**
	 * @param field_type $educationDateFin
	 */
	public function setEducationDateFin($educationDateFin) {
		$this->educationDateFin = $educationDateFin;
	}

	/**
	 * @param field_type $educationDescription
	 */
	public function setEducationDescription($educationDescription) {
		$this->educationDescription = $educationDescription;
	}

	/**
	 * @param field_type $educationIntitule
	 */
	public function setEducationIntitule($educationIntitule) {
		$this->educationIntitule = $educationIntitule;
	}

	/**
	 * @param field_type $educationLieu
	 */
	public function setEducationLieu($educationLieu) {
		$this->educationLieu = $educationLieu;
	}

	
	
	
	
}
?>