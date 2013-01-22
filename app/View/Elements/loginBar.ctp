<div class="grid_12" id="loginBar">

	<div class="grid_2 prefix_10">
		
		<?php 
		if( $this->Session->check('Auth.User.id')) {
			echo $this->Html->link('LOGOUT', array('controller' => 'usuarios', 'action' => 'logout', 'full_base' => true));
		}
		else {
			echo 'LOGGED';
		}
		?>
	</div>
</div>