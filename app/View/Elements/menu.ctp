<nav class="navbar navbar-inverse" role="navigation">
<div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        
       
      </button>
      <a class="navbar-brand" href="#"></a>
    </div>
  <div class="container-fluid">
<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        
      
      

        <li class="dropdown">
            <li><?php echo $this->Html->link('Meus Contatos', array('controller' => 'contatos', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link('Adicionar Contato', array('controller' => 'contatos', 'action' => 'adicionar')); ?></li>

          </ul>
        </li>

       

      </ul>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href=?> <?php echo $usuarioLogado['nome']; ?></a></li>
                   
        </li>
            <li><?php echo $this->Html->link('', array('controller' => 'usuarios', 'action' => 'sair'), array('class'=> 'glyphicon glyphicon-off', 'title'=>'Sair do Sistema')); ?>   </li>
          </ul>
        </div>
    </div><!-- /.navbar-collapse -->

  </div>
</nav>

