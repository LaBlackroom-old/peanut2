<?php if($sf_user->hasPermission('4') || $sf_user->hasPermission('5')){ ?>

  <?php use_stylesheets_for_form($form) ?>
  <?php use_javascripts_for_form($form) ?>

  <div class="sf_admin_form">
    <?php echo form_tag_for($form, '@sf_guard_permission') ?>
      <?php echo $form->renderHiddenFields(false) ?>

      <?php if ($form->hasGlobalErrors()): ?>
        <?php echo $form->renderGlobalErrors() ?>
      <?php endif; ?>

      <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
        <?php include_partial('sfGuardPermission/form_fieldset', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
      <?php endforeach; ?>

      <?php include_partial('sfGuardPermission/form_actions', array('sf_guard_permission' => $sf_guard_permission, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </form>
  </div>
<?php 
}
elseif($form->isNew()){
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not create permission.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php  
}
else{
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not edit this permission.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php
}
?>
