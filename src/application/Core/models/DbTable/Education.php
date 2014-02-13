<?php 

class Core_Model_DbTable_Education extends Zend_Db_Table_Abstract
{
    protected $_name = 'education';
    protected $_primary = 'id';
    protected $_referenceMap = array();
    
    public function __call($function, $args)
    {
        // Expects findBy to be the first part of the function
        $criteria = substr($function, 6);
        $criteria = strtolower($criteria);
    
        $select = $this->select()
        ->from($this->_name)
        ->where($criteria . ' = ?', $args);
        
        
    }
    
}