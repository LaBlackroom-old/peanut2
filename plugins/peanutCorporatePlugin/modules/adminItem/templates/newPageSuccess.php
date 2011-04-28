<?php use_helper('I18N', 'Date') ?>
<?php include_partial('adminItem/assets') ?>

<section id="sf_admin_container">
  <header>
    <h1><?php echo __('New AdminItem', array(), 'messages') ?></h1>
  </header>
  
  <?php include_partial('adminItem/flashes') ?>

  <section id="sf_admin_header">
    <?php include_partial('adminItem/form_header', array('peanut_item' => $peanut_item, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>

  <section id="sf_admin_content">
    <?php include_partial('adminItem/form', array('peanut_item' => $peanut_item, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </section>

  <section id="sf_admin_footer">
    <?php include_partial('adminItem/form_footer', array('peanut_item' => $peanut_item, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>
</div>
