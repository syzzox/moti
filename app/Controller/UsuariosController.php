<?php

class UsuariosController extends AppController {

	public $components = array('Session','Auth' => array( 
											'authenticate' => array('Form' => array(
													'userModel' => 'Usuario', 
													'fields' => array(
														'username' => 'login',
														'password' => 'senha')
													)) )
	);

    public $scaffold;

    public function painel_login() {
    	$this->layout = 'login';    	
    	if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	            $this->Session->setFlash('Dados incorretos!');
	        }
	    }
    }

    public function painel_logout() { 
    	$this->redirect($this->Auth->logout());
	}

}