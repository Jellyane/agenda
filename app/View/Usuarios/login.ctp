<div class="form">
    <form class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Já teve o cadastro ativado? <a href="#">Efetue o acesso ao sistema.</a></p>
    </form>
    <?php echo $this->Form->create('Usuario', array('class' => 'login-form')); ?>
      <?php echo $this->Form->input('email', array('placeholder' => 'E-mail', 'label' => false)); ?>
      <?php echo $this->Form->input('senha', array('type' => 'password', 'placeholder' => 'Senha', 'label' => false)); ?>
      <?php echo $this->Form->button('Acessar Sistema', array('class' => 'submit')); ?>
	  <p align="center"><a href="http://agenda.local/usuarios/adicionar/">Cadastre-se</a></p>
    <?php echo $this->Form->end(); ?>
</div>
