<?php
	class Palestrante extends AppModel {

		public $hasMany = array('Palestra');

		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';
	}