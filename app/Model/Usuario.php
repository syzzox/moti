<?php
	class Usuario extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

                public function beforeSave($options = array()) {
                        if (isset($this->data['Usuario']['senha'])) 
                        {
                                $password = &$this->data['Usuario']['senha']; 
                                $password = AuthComponent::password($password);
                        }
                
                return parent::beforeSave($options);
                }
        }