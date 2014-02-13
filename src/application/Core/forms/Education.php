<?php
class Core_Form_Education extends Zend_Form
{
    public function init(){
        //Désactivation des decorateurs par défaut du formulaire
        $this->setDisableLoadDefaultDecorators(TRUE);
        
        //Ajout des décorateur au formulaire
        $this->addDecorator('FormElements');
        $this->addDecorator('HtmlTag', array('tag' => 'div', 'class' => 'zend_form'));
        $this->addDecorator('Form');
        
        // Date de début 
        $educationDateDebut = new Zend_Form_Element_Text('educationDateDebut');
        $educationDateDebut->setDecorators(array(
        	'ViewHelper',
            //new Core_Decorator_Errors()
        ));
        $educationDateDebut->setLabel('Date de d�but');
        $educationDateDebut->setRequired(TRUE);
        
        //Ajout de l'élément au formulaire
        $this->addElement($educationDateDebut);
        
        // Date de fin
        $educationDateFin = new Zend_Form_Element_Text('educationDateFin');
        $educationDateFin->setDecorators(array(
        		'ViewHelper',
        		//new Core_Decorator_Errors()
        ));
        $educationDateFin->setLabel('Date de fin');
        $educationDateFin->setRequired(TRUE);
        
        //Ajout de l'élément au formulaire
        $this->addElement($educationDateFin);
        
        // Intitulé
        $educationIntitule = new Zend_Form_Element_Text('educationIntitule');
        $educationIntitule->setDecorators(array(
        		'ViewHelper',
        		//new Core_Decorator_Errors()
        ));
        $educationIntitule->setLabel('Intitul�');
        $educationIntitule->setRequired(TRUE);
        
        //Ajout de lélément au formulaire
        $this->addElement($educationIntitule);
        
        // Description de l'étude
        $educationContenu = new Zend_Form_Element_Textarea('educationContenu');
        $educationContenu->setDecorators(array(
        		'ViewHelper',
        		//new Core_Decorator_Errors()
        ));
        $educationContenu->setLabel('Contenu');
        $educationContenu->setRequired(TRUE);
        
        //Ajout de l'élément au formulaire
        $this->addElement($educationContenu);
        
        // Lieu
        $educationLieu = new Zend_Form_Element_Textarea('educationLieu');
        $educationLieu->setDecorators(array(
        		'ViewHelper',
        		//new Core_Decorator_Errors()
        ));
        $educationLieu->setLabel('Lieu');
        $educationLieu->setRequired(TRUE);
        
        //Ajout de l'élément au formulaire
        $this->addElement($educationLieu);
   
    }
}