<h1>Palestra</h1>
<?php
	echo $this->Form->create('Palestra', array('div' => 'inscricao', 'class' => 'insc'));
	echo $this->Form->input('nome', array('div' => 'inscricao'));
	echo $this->Form->input('descricao', array('div' => 'inscricao'));
	echo $this->Form->input('inicio', array('div' => 'inscricao'));
	echo $this->Form->input('fim', array('div' => 'inscricao'));
	echo $this->Form->input('palestrante_id', array('div' => 'inscricao'));

	echo $this->Form->end('Adicionar', array('div' => 'inscricao'));
?>