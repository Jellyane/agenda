<?php

/**
* @version 1.0 2013-07-17
* @package app.Model
* @author Cassio Diego Campos <contato@cassiodiego.com>
* @license MIT License (http://www.opensource.org/licenses/mit-license.php)
**/
App::uses('AuthComponent', 'Controller/Component');
class Usuario extends AppModel {
    
    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Login é obrigatório!'
            )
        ),
        'nome' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        ),
        'email' => array(
            'required' => array(
                'rule' => array('isUnique'),
                'message' => 'E-mail já cadastrado!'
            )
        ),
        'endereco' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        ),'telefone' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        ),
        'senha' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Senha é obrigatória!'
            )
        )
    );
    
    public $hasMany = array(
      'Contato' =>array(
          'className' => 'Contato',
          'foreignKey' => 'usuario_id'
      )        
    );
    
    
    public function beforeSave($options = array()) {
        if (isset($this->data[$this->alias]['senha'])) {
            $this->data[$this->alias]['senha'] = AuthComponent::password($this->data[$this->alias]['senha']);
        }
        return true;
    }

    public function afterFind($results, $primary = false) {
        if ($primary) {
            foreach ($results as $key => &$val) {
                
            }
        }
        return $results;
    }
    
}