<?php 

class Core_Model_Mapper_Experience
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_Experience();
        $rowSet = $dbTable->find(array('id_experience' => $id));
        $row = $rowSet->current();
        
        $experience = new Core_Model_Experience();
        $experience->setexperienceId($row->id_experience)
                ->setexperienceTitle($row->title_experience)
                ->setexperienceContent($row->content_experience)
         		->setdatedebut($row->datedebut_experience)
         		->setdatefin($row->datefin_experience)
         		->setentreprise($row->entreprise_experience);
                 
        return $Experience;
    }
    
    public function fetchLast($count)
    {
        $dbTable = new Core_Model_DbTable_Experience();
        $rowSet = $dbTable->fetchAll(null,array('id_experience DESC'),$count);
        
        if (0 === $rowSet->count()) {
            return false;
        }
        
        $Experiences = array();
        foreach($rowSet as $row) {
            $experience = new Core_Model_Experience();
            $experience->setExperienceId($row->id_experience)
                    ->setexperienceTitle($row->title_experience)
                    ->setexperienceContent($row->content_experience)
                    ->setdatedebut($row->datedebut_experience)
                    ->setdatefin($row->datefin_experience)
                    ->setentreprise($row->entreprise_experience);
        
            $experiences[] = $experience;
        }
        
        return $experiences;
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