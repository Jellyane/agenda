<?php

App::uses('AuthComponent', 'Controller/Component');

class Contato extends AppModel {
    
    public $validate = array(
        'id' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'ID é obrigatório!'
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
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        ),
        'telefone' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        ),
        'endereco' => array(
            'required' => array(
                'rule' => array('notBlank'),
                'message' => 'Campo obrigatório!'
            )
        )
        
    );
    
  
    
}