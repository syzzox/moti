<?php
/**
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       Cake.View.Pages
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
if (Configure::read('debug') == 0):
	throw new NotFoundException();
endif;
App::uses('Debugger', 'Utility');
?>


<div id="main-text" class="grid_12">
	<h1>Mapping Out the Town Interactively</h1>

	Evento de Vídeo Mapping e Mídias Interativas em São Paulo 

	<div id="mapa" class="grid_10 prefix_1 suffix_1 omega alpha">
		<iframe width="780" height="439" src="http://www.youtube.com/embed/V4hl633R-TI?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>

</div>