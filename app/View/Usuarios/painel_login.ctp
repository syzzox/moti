<?php echo $this->start('loginAuth') ?>
<?php
	echo $this->Session->flash();
	echo $this->Session->flash('auth');
?>
<?php echo $this-> end() ?>

<?php
	echo $this->Form->create('Usuario', array('class' => 'login'));
	echo $this->Form->input('login');
	echo $this->Form->password('senha');
	echo $this->Form->end('Entrar');
?>