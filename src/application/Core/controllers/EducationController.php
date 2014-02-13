<?php

class EducationController extends Zend_Controller_Action{
	
public function indexAction()
    {

    }
	
    public function createAction(){
        //Construction d'un Formulaire
        $form = new Core_Form_Education();
        $form->setDecorators(array(
            array('ViewScript', array('viewScript' => '/education/forms/education.phtml',
                                      'title' => 'Ajout d\'une formation')),
            'Form'
        ));
        $userAuth = Zend_Auth::getInstance()->getIdentity();
        
        //Vérification si il existe un POST 
        if($this->_request->isPost()){
            //Récupé©ration du post
            $post = $this->_request->getPost();
            //Validation du post par le formulaire
            if($form->isValid($post)){
                $data = $post;
                unset($data['create']);
                $mapperEducation = new Core_Model_Mapper_Education();
                $education = $mapperEducation->insert($data);
            }else{
                //Appel à  une aide d'action qui stocke en session un message
                $this->_helper->flashMessenger('Formulaire incorrect', 'error');
            }
        }
        
        $this->view->form = $form;
    }
	
	public function updateAction(){
		
	}
	
	public function deleteAction(){
		
	}
}

?>