<?php 

class Core_Model_Mapper_Realisation
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_Realisation();
        $rowSet = $dbTable->find(array('id_realisation' => $id));
        $row = $rowSet->current();
        
        $realisation = new Core_Model_Realisation();
        $realisation->setrealisationId($row->id_realisation)
                ->setrealisationTitle($row->title_realisation)
                ->setrealisationContent($row->content_realisation)
         		->setdate($row->datedebut_realisation)
         		->setimgRealisation($row->datefin_realisation);
                 
        return $realisation;
    }
    
    public function fetchLast($count)
    {
        $dbTable = new Core_Model_DbTable_Realisation();
        $rowSet = $dbTable->fetchAll(null,array('id_realisation DESC'),$count);
        
        if (0 === $rowSet->count()) {
            return false;
        }
        
        $realisations = array();
        foreach($rowSet as $row) {
            $realisation = new Core_Model_Realisation();
            $realisation->setrealisationId($row->id_realisation)
                ->setrealisationTitle($row->title_realisation)
                ->setrealisationContent($row->content_realisation)
         		->setdate($row->datedebut_realisation)
         		->setimgRealisation($row->datefin_realisation);
        
            $realisations[] = $realisation;
        }
        
        return $realisations;
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