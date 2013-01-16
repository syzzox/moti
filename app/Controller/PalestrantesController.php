<?php

class PalestrantesController extends AppController {
    public function index() {
        $palestrantes = $this->Palestrante->find('all');
        $this->set('palestrantes', $palestrantes);
    }

    public function add() {
    	if ($this->request->isPost()) {
    		$this->Palestrante->create();
            if ($this->Palestrante->save($this->request->data)) {
                $this->Session->setFlash('Palestrante adicionado com sucesso.');
                $this->redirect('/obrigado');
            } else {
                $this->Session->setFlash('Não foi possível adicionar o palestrante.');
            }
    	}

    }
}