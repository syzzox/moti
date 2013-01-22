<?php

class InscricoesController extends AppController {

    public $scaffold = 'painel';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('view', 'index'));
    }   

    /*
    public function index() {
        $Inscricoes = $this->Inscricao->find('all');
        $this->set('inscricoes', $inscricoes);
    }
    */

    public function inscrever() {
    	if ($this->request->isPost()) {
    		$this->Inscricao->create();
            if ($this->Inscricao->save($this->request->data)) {
                $this->Session->setFlash('Inscrição realizada com sucesso.');
                $this->redirect('/obrigado');
            } else {
                $this->Session->setFlash('Não foi possível realizar a inscrição.');
            }
    	}

    }
}