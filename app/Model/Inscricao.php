<?php
	class Inscricao extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';
	}