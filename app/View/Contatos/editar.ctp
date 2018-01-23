<div class="page-header">
    <h3> Editando Contato </h3>
</div>
<div class="row-fluid">  
    <div class="span12">
        <?php
        echo $this->element('breadcrumb', array('caminho' => array(
                
                'Contatos' => '/contatos',
                'Editar' => '#',
                )));
        ?>
        <fieldset>
        
        <?php 
            echo $this->Form->create('Contato', array('class' => 'form-vertical col-xs-3'));
            echo $this->Form->input('nome', array('label' => 'Nome: ', 'class' => 'form-control'));
            echo $this->Form->input('email', array('label' => 'Email: ', 'class' => 'form-control'));
            echo $this->Form->input('telefone', array('label' => 'Telefone: ', 'class' => 'form-control'));
            echo $this->Form->input('endereco', array('label' => 'Endereco: ', 'class' => 'form-control'));
            echo $this->Form->Submit("Editar Contato", array("class" => "btn btn-info"));
            echo $this->Form->end();
        ?>
        </fieldset>
    </div>
</div>