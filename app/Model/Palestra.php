<?php
	class Palestra extends AppModel {

		public $belongsTo = array('Palestrante' => array('foreign_key' => 'palestrante_id'));

		public $order = array('inicio' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

		public $validate = array(
        	'nome' => array( 
        		'requerido' => array('rule' => 'notEmpty'),
        		'unico' => array('rule' => 'isUnique')
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