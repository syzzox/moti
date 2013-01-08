<h1>Inscrição</h1>
<?php
	echo $this->Form->create('Inscricao');
	echo $this->Form->input('nome');
	echo $this->Form->input('email');
	echo $this->Form->input('website');
	echo $this->Form->input('endereco');
	echo $this->Form->input('cidade');
	echo $this->Form->input('pais');

	echo $this->Form->end('Inscrever');
?>