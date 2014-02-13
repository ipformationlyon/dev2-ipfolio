<?php

class Core_Model_Education implements Zend_Acl_Resource_Interface
{
	private $educationID;
	private $educationDateDebut;
	private $educationDateFin;
	private $educationContenu;
	private $educationIntitule;
	private $educationLieu;
	/**
	 * @return the $educationID
	 */
	public function getEducationID() {
		return $this->educationID;
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
	 * @return the $educationContenu
	 */
	public function getEducationContenu() {
		return $this->educationContenu;
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
	 * @param field_type $educationID
	 */
	public function setEducationID($educationID) {
		$this->educationID = $educationID;
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
	 * @param field_type $educationContenu
	 */
	public function setEducationContenu($educationContenu) {
		$this->educationContenu = $educationContenu;
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