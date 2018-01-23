<div class="page-header">
    <h3> Adicionando Contato </h3>
</div>
<div class="row-fluid">  
    <div class="span12">
        <?php
        echo $this->element('breadcrumb', array('caminho' => array(
                
                'Contatos' => '#',
                'Adicionar' => '#',
                )));
        ?>
        <fieldset>
        
        <?php $idUsuario = $usuarioLogado['id']; 
            echo $this->Form->create('Contato', array('class' => 'form-vertical col-xs-3'));
            echo $this->Form->input('nome', array('label' => 'Nome: ', 'class' => 'form-control'));
            echo $this->Form->input('email', array('label' => 'Email: ', 'class' => 'form-control'));
            echo $this->Form->input('telefone', array('label' => 'Telefone: ', 'class' => 'form-control' ,'required' => 'required'));
            echo $this->Form->input('endereco', array('label' => 'Endereço: ', 'class' => 'form-control'));
            echo $this->Form->input('usuario_id', array('type' => 'hidden', 'value' => $idUsuario));
            echo $this->Form->Submit("Adicionar Contato", array("class" => "btn btn-info"));
            echo $this->Form->end();
        ?>
        </fieldset>
    </div>
</div>