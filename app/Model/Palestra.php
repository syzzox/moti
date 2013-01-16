<?php
	class Palestra extends AppModel {

		public $belongsTo = array('Palestrante');

		public $order = array('inicio' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';
	}