<?php 

class Core_Model_Mapper_User
{
    
    public function find($id){
        $dbTable = new Core_Model_DbTable_User();
        $rowSet = $dbTable->find(array('id_user' => $id));
        $row = $rowSet->current();
        
        $user = new Core_Model_user();
        $user->setuserId($row->id_user)
                ->setUserRole($row->role_user)
                ->setUserNom($row->nom_user)
                ->setUserPrenom($row->prenom_user)
         		->setUserLogin($row->login_user)
         		->setUserMdp($row->mdp_user)
        		->setUserMail($row->mail_user)
        		->setUserNaissance($row->naissance_user)
        		->setUserSexe($row->sexe_user);
                 
        return $user;
    }
    
    public function fetchAll($where){
    
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