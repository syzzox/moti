
<h1>PAINEL</h1>

Bem vindo, <?php echo AuthComponent::user('nome') ?>

<h2>Administrar</h2>

<li><?php echo $this->Html->link('Usuários', array('controller' => 'usuarios', 'action' => 'index', 'full_base' => true, 'painel' => true)); ?> </li>
<li><?php echo $this->Html->link('Instrições', array('controller' => 'inscricoes', 'action' => 'index', 'full_base' => true, 'painel' => true)); ?> </li>
<li><?php echo $this->Html->link('Palestras', array('controller' => 'palestras', 'action' => 'index', 'full_base' => true, 'painel' => true)); ?> </li>
<li><?php echo $this->Html->link('Palestrantes', array('controller' => 'palestrantes', 'action' => 'index', 'full_base' => true, 'painel' => true)); ?> </li>
