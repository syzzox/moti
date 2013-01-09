<h1>Inscrição</h1>
<?php
	echo $this->Form->create('Inscricao', array('div' => 'inscricao', 'class' => 'insc'));
	echo $this->Form->input('nome', array('div' => 'inscricao'));
	echo $this->Form->input('telefone', array('div' => 'inscricao'));
	echo $this->Form->input('email', array('div' => 'inscricao'));
	echo $this->Form->input('website', array('div' => 'inscricao'));
	echo $this->Form->input('endereco', array('label'=>'Endereço', 'div' => 'inscricao'));
	echo $this->Form->input('cidade', array('div' => 'inscricao'));
	echo $this->Form->input('pais', array('label'=>'País', 'div' => 'inscricao'));

	echo $this->Form->end('Inscrever', array('div' => 'inscricao'));
?>