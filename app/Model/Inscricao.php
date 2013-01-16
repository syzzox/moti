<?php
	class Inscricao extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => array( 
        		'requerido' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'telefone' => array( 
        		'numeros' => array(
        			'rule' => 'numeric'
        			)
        		),
        	'endereco' => array( 
        		'minimo' => array(
        			'rule' => array('minLength', '10')
        			)
        		),
        	'email' => array(
        		'verifica_email' => array(
        			'rule' => 'email'
        			),
        		'verifica_unico' => array(
        			'rule' => 'isUnique'
        			)
        	)
	    );
}