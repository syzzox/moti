<?php
	class Palestrante extends AppModel {

		public $hasMany = array('Palestra' => array('foreign_key' => 'palestrante_id'));

		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => array( 
        		'requerido' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'descricao' => array( 
        		'requerido' => array(
        			'rule' => 'notEmpty'
        			)
        		),
        	'url' => array( 
        		'url' => array(
        			'rule' => 'url'
        			)
        		)
	       );
	}