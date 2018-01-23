<!DOCTYPE html>
<html>
    <head>
        <?php echo $this->Html->charset(); ?>
        
        <title>           
            <?php echo "Agenda". " | " . $title_for_layout; ?>
        </title>

        <?php
        echo $this->fetch('meta');

        echo $this->Html->meta('icon');

        echo $this->Html->css(array(
            "/lib/bootstrap/css/bootstrap",
            "estilo",
            "/lib/bootstrap/css/bootstrap-responsive",
        )) . "\n";

        echo $this->Html->script(array(
            "/lib/bootstrap/js/bootstrap",
        )) . "\n";

        echo $this->fetch('css') . "\n";
        echo $this->fetch('script') . "\n";
        ?>
    </head>
    <body>
        <div class="row-fluid">
            <div class="span12" style="margin-top: 20px; margin-bottom: 12px; text-align: center;">
                <a href="/"> <h3>AGENDA DE CONTATOS</h3></a>
            </div>
            
        </div>
		<?php echo $this->element('menu'); ?>
        
        <div id="admin_container" class="container-fluid">
            <div class="row-fluid">                               
                <div id="content" class="span12">
		    <p>&nbsp;</p>
                    <?php echo $this->Session->flash(); ?>
                    <?php echo $this->fetch('content'); ?>
                </div>
            </div>
        </div>
        <div id="footer"><p>Copyright &copy; 2018 Agenda de Contatos. Todos os direitos reservados.</span></p></div>
    </body>
</html>
