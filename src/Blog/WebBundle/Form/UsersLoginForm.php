<?php

/**
 * Class: SignupForm
 * Date begin: Mar 16, 2011
 * 
 * Login form
 * 
 * @package blog
 * @author Azat Khuzhin
 */

namespace Blog\WebBundle\Form;

use	Symfony\Component\Form\Form,
	Symfony\Component\Form\TextField,
	Symfony\Component\Form\PasswordField;

use	Symfony\Component\Validator\Constraints\EmailValidator;

class UsersLoginForm extends Form {
	public $email;
	public $password;
	
	
	public function configure() {
		$this->setDataClass('Blog\\WebBundle\\Entity\\Users');
		
		$this->add('email');
		$this->add(new PasswordField('password'));
	}
}
