<?php
	class Palestra extends AppModel {

		public $belongsTo = array('Palestrante' => array('foreign_key' => 'palestrante_id'));

		public $order = array('inicio' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => 'required',
        	'nome' = 'isUnique',
        	'descricao' => 'required'
	    );
	}