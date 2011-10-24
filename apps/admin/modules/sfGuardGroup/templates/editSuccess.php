<?php use_helper('I18N', 'Date') ?>
<?php include_partial('sfGuardGroup/assets') ?>

<section id="sf_admin_container">
  <header>
    <h1><?php echo __('Editing Group "%%name%%"', array('%%name%%' => $sf_guard_group->getName()), 'messages') ?></h1>
  </header>
  
  <?php include_partial('sfGuardGroup/flashes') ?>

  <section id="sf_admin_header">
    <?php include_partial('sfGuardGroup/form_header', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>

  <section id="sf_admin_content">
    <?php include_partial('sfGuardGroup/form', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper, 'groupPermissions' => $groupPermissions)) ?>
  </section>

  <section id="sf_admin_footer">
    <?php include_partial('sfGuardGroup/form_footer', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration)) ?>
  </section>
</div>
