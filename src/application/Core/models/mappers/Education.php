<?php 

class Core_Model_Mapper_Education
{

	public function find($id){
		$dbTable = new Core_Model_DbTable_Education(); 
		$rowSet = $dbTable->find(array('educationID' => $id));
		$row = $rowSet->current();
	
		$education = new Core_Model_Education();
		$education->setEducationID($row->educationID)
				  ->setEducationDateDebut($row->educationDateDebut)
				  ->setEducationDateFin($row->educationDateFin)
				  ->setEducationIntitule($row->educationIntitule)
			  	  ->setEducationContenu($row->educationContenu)
				  ->setEducationLieu($row->educationLieu);
	
		return $education;
	}

}