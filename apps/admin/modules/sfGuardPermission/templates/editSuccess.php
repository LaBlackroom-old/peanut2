<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardPermission/assets') ?>

<section id="sf_admin_container">
  <header>
    <h1><?php echo __('Editing Permission "%%name%%"', array('%%name%%' => $sf_guard_permission->getName()), 'messages') ?></h1>
  </header>
  
  <?php include_partial('sfGuardPermission/flashes') ?>

  <section id="sf_admin_header">
    <?php include_partial('sfGuardPermission/form_header', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>

  <section id="sf_admin_content">
    <?php include_partial('sfGuardPermission/form', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </section>

  <section id="sf_admin_footer">
    <?php include_partial('sfGuardPermission/form_footer', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>
</div>
