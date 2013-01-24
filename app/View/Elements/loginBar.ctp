<div class="grid_12" id="loginBar">

	<div class="grid_2 prefix_10">
		
		<?php 
		if( $this->Session->check('Auth.User.id')) {
			echo $this->Html->link('LOGOUT', array('controller' => 'usuarios', 'action' => 'logout', 'full_base' => true, 'painel' => true));
		}
		else {
			echo $this->Html->link('LOGIN', array('controller' => 'usuarios', 'action' => 'login', 'full_base' => true, 'painel' => true));
		}
		?>
	</div>
</div>