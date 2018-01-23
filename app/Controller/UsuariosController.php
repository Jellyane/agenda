<?php


class UsuariosController extends AppController {

    public $helpers = array ('Html','Form');
    public $name = 'Usuarios';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow(array('login', 'logout', 'adicionar'));
    }

    public function login() {
        $this->layout = 'login';
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                //$this->redirect($this->Auth->redirect());
                $this->redirect('/');
            } else {
                $this->Session->setFlash(__('Falha no acesso'), 'flash_erro', array(), 'auth');
            }
        }
    }

    public function sair() {
        $this->redirect($this->Auth->logout());
    }

    public function index() {
        
       
        
        $this->Usuario->recursive = 0;
        $this->set('usuarios', $this->paginate());
    }

    public function visualizar($id = null) {
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        $this->set('usuario', $this->Usuario->read(null, $id));
    }

    public function adicionar() {
        
        
        
        if ($this->request->is('post')) {
            $this->Usuario->create();
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash('<div class="alert alert-success">Usuário adicionado com sucesso!</div>');
                $this->redirect(array('action' => 'index'));
            }
        }
    }

    public function editar($id = null) {
        
       
        
        $this->Usuario->id = $id;
        if (!$this->Usuario->exists()) {
            throw new NotFoundException(__('Invalid usuario'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Usuario->save($this->request->data)) {
                $this->Session->setFlash(__('<div class="alert alert-success">Usuário alterado com sucesso!</div>'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('Falha ao salvar o usuário. Por favor, tente novamente.'));
            }
        } else {
            $this->request->data = $this->Usuario->read(null, $id);
            unset($this->request->data['id']['senha']);
        }
    }
}
