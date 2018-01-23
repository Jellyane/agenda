<div class="page-header">
    <h3>Agenda<small></small></h3>
</div>

      <form class="navbar-form pull-left" action="http://localhost/agenda.local/contatos/pesquisa" id="ProdutoPesquisaForm" method="post" accept-charset="utf-8">
              <input class="input-xxlarge search-query" type="text" placeholder="Digite o nome" name="data[Contato][pesquisa]" id="ContatoPesquisa">&nbsp;&nbsp;<button type="submit" class="btn">Pesquisar!</button>          
            </form>
        
        <table class="table user-tbl table-striped table-bordered table-hover">
    <tr>
      
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Endereço</th>
        <th>Ações</th>
    </tr>
    <?php foreach ($contatos as $contato): ?>
  <tr>   
        
        <td> <?php echo $contato['Contato']['nome']; ?></td>    
        <td> <?php echo $contato['Contato']['email']; ?></td>
        <td> <?php echo $contato['Contato']['telefone']; ?></td>
        <td> <?php echo $contato['Contato']['endereco']; ?></td>
        <td> <?php echo $this->Html->link('<i class=" icon-edit icon-white"></i> Editar', array('action' => 'editar', $contato['Contato']['id']), array('escape' => false, 'class' => 'btn btn-warning')); ?> 
        <?php echo $this->Html->link('<i class=" icon-edit icon-white"></i> Excluir', array('action' => 'deletar', $contato['Contato']['id']), array('escape' => false, 'class' => 'btn btn-warning')); ?> </td>
  </tr>
    <?php endforeach; ?>

</table>
