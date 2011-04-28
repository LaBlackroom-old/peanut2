<?php
  use_helper('I18N', 'Date');
  use_html5_javascript('widget/jquery-ui-1.8.9.custom.min.js');
  use_html5_javascript('/peanutCorporatePlugin/js/jquery.treeTable.min.js');
  use_html5_stylesheet('/peanutCorporatePlugin/css/jquery.treeTable.css');
  include_partial('adminMenu/assets');
?>

<section id="sf_admin_container">
  
  <?php include_partial('adminMenu/flashes') ?>

  <header id="sf_admin_header">
    <h1><?php echo __('AdminMenu List', array(), 'messages') ?></h1>
    <?php include_partial('adminMenu/list_header', array('pager' => $pager)) ?>
  </header>

  <section id="sf_admin_content">
    <form action="<?php echo url_for('peanut_menu_collection', array('action' => 'batch')) ?>" method="post">
          
    <?php include_partial('adminMenu/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
    <ul class="sf_admin_actions">
      <?php include_partial('adminMenu/list_batch_actions', array('helper' => $helper)) ?>
      <?php include_partial('adminMenu/list_actions', array('helper' => $helper)) ?>
    </ul>
    
    </form>
  </section>
    
  <footer id="sf_admin_footer">
    <?php include_partial('adminMenu/list_footer', array('pager' => $pager)) ?>
  </footer>
</section>
