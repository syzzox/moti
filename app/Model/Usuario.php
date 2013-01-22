<?php
	class Usuario extends AppModel {
		public $order = array('nome' => 'ASC');
		public $cacheQueries = true;
		public $displayField = 'nome';

                public $validate = array(
                        'senha' => array(
                                'min' => array(
                                        'rule' => array('minLength', 6),
                                        'message' => 'Passwords must be at least 6 characters.'
                                ),
                                'required' => array(
                                        'rule' => 'notEmpty',
                                        'message'=>'Please enter a password.'
                                )),
                        'confirma_senha' => array(
                                'required'=>'notEmpty',
                                'match'=>array(
                                        'rule' => 'validatePasswdConfirm',
                                        'message' => 'Passwords do not match'
                                        )
                                )
                        );

                public function validatePasswdConfirm() {
                        if ($this->data['Usuario']['senha'] !== $this->data['Usuario']['confirma_senha']) {
                                return false;
                        }
                        return true;
                }

                public function beforeSave($options = array()) {

                        if (isset($this->data['Usuario']['senha'])) 
                        {
                                $password = &$this->data['Usuario']['senha']; 
                                $password = AuthComponent::password($password);
                        }
                
                return parent::beforeSave($options);
                }
        }