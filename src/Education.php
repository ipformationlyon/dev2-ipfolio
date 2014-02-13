<?php
class Core_Form_Education extends Zend_Form
{
	public function init(){
		
		$this->setDisableLoadDefaultDecorators(TRUE);
		
		$this->addDecorator('FormElements');
		$this->addDecorator('HtmlTag', array('tag' => 'div', 'class' => 'zend_form'));
		$this->addDecorator('Form');
		
		// Création et ajout au formulaire de l'élément : Date de début
		$educationDateDebut = new Zend_Form_Element_Text('education_dateDebut');
		$educationDateDebut->setDecorators(array(
				'ViewHelper',
				new Core_Decorator_Errors()
		));
		$educationDateDebut->setLabel('Date de début');
		$educationDateDebut->setRequired(TRUE);
		
		$this->addElement($educationDateDebut);
		
		// Création et ajout au formulaire de l'élément : Date de fin
		$educationDateFin = new Zend_Form_Element_Text('education_dateFin');
		$educationDateFin->setDecorators(array(
				'ViewHelper',
				new Core_Decorator_Errors()
		));
		$educationDateFin->setLabel('Date de fin');
		$educationDateFin->setRequired(TRUE);
		
		$this->addElement($educationDateFin);
		
		// Création et ajout au formulaire de l'élément : contenu
		$educationContenu = new Zend_Form_Element_Textarea('comment_content');
		$educationContenu->setLabel('Commentaire');
		$educationContenu->setAttrib('rows', '8');
		$educationContenu->setAttrib('cols', '25');
		
		$this->addElement($educationContenu);
		
		
		
	}
}

?>