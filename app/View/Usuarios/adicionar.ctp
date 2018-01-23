<div class="page-header">
    <h3> Criando Usuario </h3>
</div>
<div class="row-fluid">  
    <div class="span12">
        <?php
        echo $this->element('breadcrumb', array('caminho' => array(
                
                'Usuarios' => '/usuarios',
                'Adicionar' => '#',
                )));
        ?>
        <fieldset>
        <?php
            echo $this->Form->create('Usuario', array('class' => 'form-vertical col-xs-3'));
            echo $this->Form->input('nome', array('label' => 'Nome Completo: ', 'class' => 'form-control'));            
            echo $this->Form->input('email', array('label' => 'E-mail: ', 'class' => 'form-control'));
            echo $this->Form->input('endereco', array('label' => 'Endereco: ', 'class' => 'form-control'));
            echo $this->Form->input('telefone', array('label' => 'Telefone: ', 'class' => 'form-control' ,'required' => 'required'));
            echo $this->Form->input('senha', array('label' => 'Senha: ', 'class' => 'form-control', 'type' => 'password'));
            echo $this->Form->Submit("Adicionar Usuario", array("class" => "btn btn-info"));
            echo $this->Form->end();
        ?>
        </fieldset>
    </div>
</div>
