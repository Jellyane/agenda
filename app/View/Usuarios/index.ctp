<div class="page-header">
    <h3>Usuários<small></small></h3>

</div>

    <table class="table user-tbl table-striped table-bordered table-hover">
    <tr>
       
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($usuarios as $usuario): ?>
    <tr>   
        
        <td> <?php echo $usuario['Usuario']['nome']; ?></td>    
        <td> <?php echo $usuario['Usuario']['email']; ?></td>
        <td> <?php echo $usuario['Usuario']['telefone']; ?></td>
        <td> <?php echo $usuario['Usuario']['endereco']; ?></td>
        <td> <?php echo $this->Html->link('Editar', array('action' => 'editar', $usuario['Usuario']['id']), array('escape' => false, 'class' => 'btn btn-warning btn-sm')); ?> 
         <?php echo $this->Html->link('Excluir', array('action' => 'deletar', $usuario['Usuario']['id']), array('escape' => false, 'class' => 'btn btn-warning btn-sm')); ?> </td>

    </tr>
    <?php endforeach; ?>

</table>

        <div class="box-top">                    
            <?php echo $this->element('paginacao') ?>
        </div>
