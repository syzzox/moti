<?php

class PalestrasController extends AppController {

    public $scaffold = 'painel';

    public function index() {
        $palestras = $this->Palestra->find('all');
        $this->set('palestras', $palestras);
        $palestrantes = $this->Palestra->Palestrante->find('list', array('fields' => array ('id','nome')));
        $this->set(compact('palestrantes'));
    }

    /*
    public function add() {
    	if ($this->request->isPost()) {
    		$this->Palestra->create();
            if ($this->Palestra->save($this->request->data)) {
                $this->Session->setFlash('Palestra adicionada com sucesso.');
                $this->redirect('/obrigado');
            } else {
                $this->Session->setFlash('Não foi possível adicionar a palestra.');
            }
    	}

        $palestrantes = $this->Palestra->Palestrante->find('list', array('fields' => array ('id','nome')));
        $this->set(compact('palestrantes'));

    }
    */
}