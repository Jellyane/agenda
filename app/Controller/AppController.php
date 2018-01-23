<?php

App::uses('Controller', 'Controller');

class AppController extends Controller {

public $components = array(
       'Session',
       'Auth' => array(
           'authenticate' => array(
               'Form' => array(
                   'userModel' => 'Usuario',
                   'fields' => array(
                       'username' => 'email',
                       'password' => 'senha'
                   )
               )
           ),
           'authError' => '',
           'loginAction' => array('controller' => 'usuarios', 'action' => 'login'),
           'loginRedirect' => "/",
           'logoutRedirect' => array('controller' => 'usuarios', 'action' => 'login'),
       )
   );

    public $usuarioLogado;

    public function __construct($request = null, $response = null) {
        parent::__construct($request, $response);
    }

    public function beforeFilter() {
        
        parent::beforeFilter();
        $this->usuarioLogado = $this->Auth->user();
        $this->set('usuarioLogado', $this->usuarioLogado);
     
    }





}