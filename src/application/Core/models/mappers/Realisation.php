<?php 

class Core_Model_Mapper_Realisation
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_Realisation();
        $rowSet = $dbTable->find(array('id_realisation' => $id));
        $row = $rowSet->current();
        
        $realisation = new Core_Model_Realisation();
        $realisation->setRealisationId($row->id_realisation)
                ->setRealisationIntitule($row->intitule_realisation)
                ->setRealisationDescription($row->description_realisation)
         		->setRealisationDate($row->date_realisation)
         		->setRealisationImage($row->image_realisation);
                 
        return $realisation;
    }
    
    public function fetchAll($where){
    
    }
    
    public function delete(Core_Model_Realisation $realisation){
        $dbTable = new Core_Model_DbTable_Realisation();
        $rowSet = $dbTable->find(array('id_realisation' => $realisation->getrealisationId()));
        
        $row = $rowSet->current();
        $row->delete();
    }
    
    public function insert(array $data)
    {
        $dbTable = new Core_Model_DbTable_Realisation();
        $row = $dbTable->insert($data);
        
        return $row;
    }
}