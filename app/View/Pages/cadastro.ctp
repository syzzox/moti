<?php 
	echo $this->Form->create('Usuario', array('url' => array('controller' => 'usuarios', 'action' => 'add')));
	echo $this->Form->input('nome');
	echo $this->Form->input('login');
	echo $this->Form->input('senha');
	echo $this->Form->end('Entrar');

?>