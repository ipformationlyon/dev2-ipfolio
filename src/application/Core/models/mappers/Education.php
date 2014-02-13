<?php 

class Core_Model_Mapper_Education
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_Education();
        $rowSet = $dbTable->find(array('id_education' => $id));
        $row = $rowSet->current();
        
        $education = new Core_Model_Education();
        $education->seteducationId($row->id_education)
                ->seteducationTitle($row->title_education)
                ->seteducationContent($row->content_education)
         		->setdatedebut($row->datedebut_education)
         		->setdatefin($row->datefin_education)
         		->setecole($row->ecole_education);
                 
        return $education;
    }
    
    public function fetchLast($count)
    {
        $dbTable = new Core_Model_DbTable_Education();
        $rowSet = $dbTable->fetchAll(null,array('id_education DESC'),$count);
        
        if (0 === $rowSet->count()) {
            return false;
        }
        
        $educations = array();
        foreach($rowSet as $row) {
            $education = new Core_Model_Education();
            $education->seteducationId($row->id_education)
                    ->seteducationTitle($row->title_education)
                    ->seteducationContent($row->content_education)
                    ->setdatedebut($row->datedebut_education)
                    ->setdatefin($row->datefin_education)
                    ->setecole($row->ecole_education);
        
            $educations[] = $education;
        }
        
        return $educations;
    }
    
    public function delete(Core_Model_Education $education){
        $dbTable = new Core_Model_DbTable_Education();
        $rowSet = $dbTable->find(array('id_education' => $education->geteducationId()));
        
        $row = $rowSet->current();
        $row->delete();
    }
    
    public function insert(array $data)
    {
        $dbTable = new Core_Model_DbTable_Education();
        $row = $dbTable->insert($data);
        
        return $row;
    }
}