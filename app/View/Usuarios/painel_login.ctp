<?php echo $this->start('loginAuth') ?>
<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
?>
<?php echo $this-> end() ?>

<?php

	if( $this->Session->check('Auth.User.id')) {
		echo $this->Html->link('LOGOUT', array('controller' => 'usuarios', 'action' => 'logout', 'full_base' => true));
	}
	echo $this->Form->create('Usuario', array('class' => 'login'));
	echo $this->Form->input('login');
	echo $this->Form->password('senha');
	echo $this->Form->end('Entrar');
?>