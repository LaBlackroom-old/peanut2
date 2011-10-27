<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardPermission/assets') ?>

<section id="sf_admin_container">
  
  <?php include_partial('sfGuardPermission/flashes') ?>

  <header id="sf_admin_header">
    <h1><?php echo __('Permission list', array(), 'messages') ?></h1>
    <?php include_partial('sfGuardPermission/list_header', array('pager' => $pager)) ?>
  </header>

  <section id="sf_admin_content">
        <form action="<?php echo url_for('sf_guard_permission_collection', array('action' => 'batch')) ?>" method="post">
          
    <?php include_partial('sfGuardPermission/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    
    
        
    <ul class="sf_admin_actions">
      <?php include_partial('sfGuardPermission/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('sfGuardPermission/list_actions', array('helper' => $helper)) ?>
    </ul>
    
    </form>
    
    
  </section>
  
    
  <aside id="sf_admin_bar">
    <span class="toggle">toggle</span>
    <section class="filters">
      <?php include_partial('sfGuardPermission/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
    </section>
  </aside>
    
  <footer id="sf_admin_footer">
    <?php include_partial('sfGuardPermission/list_footer', array('pager' => $pager)) ?>
  </footer>
</section>
