<?php

class ContatosController extends AppController {
  
    public $paginate = array(
        'limit' => 10
    );
    public $name = 'Contatos';
     public function index() {
               
        $this->paginate = array(
            'conditions' => array(
                'Contato.usuario_id' => $this->usuarioLogado['id'],
            ),
            'limit' => 10,
            'order' => 'Contato.nome ASC'
        );
        //$this->Session->write('contatos', $this->paginate);
        
        //$this->set('contatos', $this->Contato->find('all'));
        
        $contatos = $this->paginate();
        $this->set('contatos',$contatos);   
    }
    
    
    public function adicionar() {

        if ($this->request->is('post')) {            
            if ($this->Contato->save($this->request->data)) {
                $this->Session->setFlash('<div class="alert alert-success">Adicionado com sucesso.</div>');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
     public function deletar($id = null) {
        
        if ($this->Contato->delete($id)) {
            
            $this->Session->setFlash('Contato excluído.', 'flash_sucesso');
            
        } else {
            
            $this->Session->setFlash('Contato não excluído.', 'flash_erro');

        }
        $this->redirect($this->request->referer());
        
    }
    
    
     public function editar($id) {
        
        $this->Contato->id = $id;
        
        if ($this->request->is('get')) {
            
            $this->request->data = $this->Contato->read();
            
        } else {
            
            if ($this->Contato->save($this->request->data)) {
                $this->Session->setFlash('Editado com sucesso.', 'flash_sucesso');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
      public function pesquisa(){
    
        
     if($this->request->is('post')) {
        if(isset($this->request->data['Contato']['pesquisa'])) {
            
            $pesquisa = $this->request->data['Contato']['pesquisa'];
            
            $this->paginate = array(
                'conditions' => array(
                    'Contato.nome LIKE' => "%$pesquisa%",
                     'Contato.usuario_id' => $this->usuarioLogado['id'],
                    ),
                'order' => 'Contato.nome ASC'
                
            );
        }
        
        $contatos = $this->paginate();
        $this->set('contatos',$contatos);   
     }
    }
}