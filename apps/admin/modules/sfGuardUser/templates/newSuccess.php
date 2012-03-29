<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardUser/assets') ?>

<section id="sf_admin_container">
  <header>
    <h1><?php echo __('New User', array(), 'messages') ?></h1>
  </header>
  
  <?php include_partial('sfGuardUser/flashes') ?>

  <section id="sf_admin_header">
    <?php include_partial('sfGuardUser/form_header', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>

  <section id="sf_admin_content">
    <?php include_partial('sfGuardUser/form', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'users' => $users)) ?>
  </section>

  <section id="sf_admin_footer">
    <?php include_partial('sfGuardUser/form_footer', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>
</div>
