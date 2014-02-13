<?php 

class Core_Model_Mapper_Education
{
    public function find($id){
        $dbTable = new Core_Model_DbTable_Education();
        $rowSet = $dbTable->find(array('id_education' => $id));
        $row = $rowSet->current();
        
        $education = new Core_Model_Education();
        $education->setEducationId($row->id_education)
            ->setEducationIntitule($row->intitule_education)
            ->setEducationLieu($row->lieu_education)
            ->setEducationContenu($row->contenu_education)
            ->setEducationDateDebut($row->datedebut_experience)
            ->setEducationDateFin($row->datefin_education);
         
        return $education;
    }
    
    public function fetchAll($where){
        
    }
}