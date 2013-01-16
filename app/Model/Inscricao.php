<?php
	class Inscricao extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => 'required',
        	'email' => 'email',
        	'email' => 'isUnique',
        	'telefone'  => 'numeric', 
        	'endereco' => array('minLength', 10),
	    );
}