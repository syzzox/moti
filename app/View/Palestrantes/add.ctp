<h1>Palestrante</h1>
<?php
	echo $this->Form->create('Palestrante', array('div' => 'inscricao', 'class' => 'insc'));
	echo $this->Form->input('nome', array('div' => 'inscricao'));
	echo $this->Form->input('descricao', array('div' => 'inscricao'));
	echo $this->Form->input('url', array('div' => 'inscricao'));

	echo $this->Form->end('Adicionar', array('div' => 'inscricao'));
?>