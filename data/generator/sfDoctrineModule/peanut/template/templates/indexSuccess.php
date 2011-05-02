[?php use_helper('I18N', 'Date') ?]
[?php include_partial('<?php echo $this->getModuleName() ?>/assets') ?]

<section id="sf_admin_container">
  
  [?php include_partial('<?php echo $this->getModuleName() ?>/flashes') ?]

  <header id="sf_admin_header">
    <h1>[?php echo <?php echo $this->getI18NString('list.title') ?> ?]</h1>
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_header', array('pager' => $pager)) ?]
  </header>

  <section id="sf_admin_content">
    <?php if ($this->configuration->getValue('list.batch_actions')): ?>
    <form action="[?php echo url_for('<?php echo $this->getUrlForAction('collection') ?>', array('action' => 'batch')) ?]" method="post">
    <?php endif; ?>
      
    [?php include_partial('<?php echo $this->getModuleName() ?>/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?]
    
    
    <?php if ($this->configuration->getValue('list.batch_actions')): ?>
    
    <ul class="sf_admin_actions">
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_batch_actions', array('helper' => $helper)) ?]
      [?php include_partial('<?php echo $this->getModuleName() ?>/list_actions', array('helper' => $helper)) ?]
    </ul>
    
    </form>
    <?php endif; ?>

    
  </section>
  
  <?php if ($this->configuration->hasFilterForm()): ?>
  
  <aside id="sf_admin_bar">
    <span class="toggle">toggle</span>
    <section class="filters">
      [?php include_partial('<?php echo $this->getModuleName() ?>/filters', array('form' => $filters, 'configuration' => $configuration)) ?]
    </section>
  </aside>
  <?php endif; ?>
  
  <footer id="sf_admin_footer">
    [?php include_partial('<?php echo $this->getModuleName() ?>/list_footer', array('pager' => $pager)) ?]
  </footer>
</section>
