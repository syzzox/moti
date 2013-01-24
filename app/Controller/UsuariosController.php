<?php

class UsuariosController extends AppController {
	public $scaffold = 'painel';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('add'));
    }

    public function painel_profile() {
   	
    }

    public function painel_login() {
        //se estiver logado redireciona pra home_login
        if($this->Session->check('Auth.User.id')){
            $this->redirect(array('controller' => 'usuarios', 'action' => 'profile', 'painel' => true));
        }

    	$this->layout = 'tela_login';    	
    	if ($this->request->is('post')) {
	        if ($this->Auth->login()) {
	            $this->redirect($this->Auth->redirect());
	        } else {
	        	/*
	        	echo '<pre>';
	        	print_r ($this->Session);
	        	echo '</pre>';
	        	*/
	            $this->Session->setFlash('Dados incorretos!');
	        }
	    }
    }

    public function painel_logout() { 
    	$this->redirect($this->Auth->logout());
	}

	public function painel_add() {
    	if ($this->request->isPost()) {
    		$this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash('Usuário cadastrado com sucesso.');
            } else {
                $this->Session->setFlash('Não foi possível realizar o cadastro.');
            }
    	}

    }

}