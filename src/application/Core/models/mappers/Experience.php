<?php 

class Core_Model_Mapper_Experience
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_Experience();
        $rowSet = $dbTable->find(array('id_experience' => $id));
        $row = $rowSet->current();
        
        $experience = new Core_Model_Experience();
        $experience->setExperienceId($row->id_experience)
                ->setExperienceIntitule($row->intitule_experience)
                ->setExperienceDescription($row->description_experience)
         		->setExperienceDatedebut($row->datedebut_experience)
         		->setExperienceDatefin($row->datefin_experience)
         		->setExperienceEntreprise($row->entreprise_experience);
                 
        return $experience;
    }
    
    public function fetchAll($where){
    
    }
    
    public function delete(Core_Model_Experience $experience){
        $dbTable = new Core_Model_DbTable_Experience();
        $rowSet = $dbTable->find(array('id_experience' => $experience->getexperienceId()));
        
        $row = $rowSet->current();
        $row->delete();
    }
    
    public function insert(array $data)
    {
        $dbTable = new Core_Model_DbTable_Experience();
        $row = $dbTable->insert($data);
        
        return $row;
    }
}