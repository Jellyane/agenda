<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Agenda de Contatos</title>
    <?php
        echo $this->fetch('meta');

        echo $this->Html->meta('icon');

        echo $this->Html->css('login') . "\n";
                
    ?>
  </head>

    <body>

        <div class="login-page">
          
          <p align="center">AGENDA DE CONTATOS</p>
                    
          <?php echo $this->Session->flash('auth'); ?>
          
          <?php echo $this->fetch('content'); ?>
          
        </div>
      
    </body>
</html>