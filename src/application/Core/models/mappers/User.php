<?php 

class Core_Model_Mapper_User
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_User();
        $rowSet = $dbTable->find(array('id_user' => $id));
        $row = $rowSet->current();
        
        $user = new Core_Model_user();
        $user->setuserId($row->id_user)
                ->setuserNom($row->nom_user)
                ->setuserPrenom($row->prenom_user)
         		->setuserLogin($row->login_user)
         		->setuserMdp($row->mdp_user)
        		->setuserMail($row->mail_user)
        		->setuserNaissance($row->naissance_user)
        		->setuserSexe($row->sexe_user);
                 
        return $user;
    }
    
    public function fetchLast($count)
    {
        $dbTable = new Core_Model_DbTable_User();
        $rowSet = $dbTable->fetchAll(null,array('id_user DESC'),$count);
        
        if (0 === $rowSet->count()) {
            return false;
        }
        
        $users = array();
        foreach($rowSet as $row) {
            $user = new Core_Model_User();
            $user->setuserId($row->id_user)
                ->setuserNom($row->nom_user)
                ->setuserPrenom($row->prenom_user)
         		->setuserLogin($row->login_user)
         		->setuserMdp($row->mdp_user)
        		->setuserMail($row->mail_user)
        		->setuserNaissance($row->naissance_user)
        		->setuserSexe($row->sexe_user);
        
            $users[] = $user;
        }
        
        return $users;
    }
    
    public function delete(Core_Model_User $user){
        $dbTable = new Core_Model_DbTable_User();
        $rowSet = $dbTable->find(array('id_user' => $user->getuserId()));
        
        $row = $rowSet->current();
        $row->delete();
    }
    
    public function insert(array $data)
    {
        $dbTable = new Core_Model_DbTable_User();
        $row = $dbTable->insert($data);
        
        return $row;
    }
}