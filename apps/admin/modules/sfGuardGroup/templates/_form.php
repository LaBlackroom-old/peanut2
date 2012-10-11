<?php if($sf_user->hasPermission('4') || $sf_user->hasPermission('5')){ ?>

<?php if( ( $sf_user->hasPermission('5') ) ||
          ( $sf_user->hasPermission('4') && !in_array('5', $groupPermissions->getRaw($sf_guard_group->getId())) )
          ){ ?> 

<?php use_stylesheets_for_form($form) ?>
<?php use_javascripts_for_form($form) ?>

<div class="sf_admin_form">
  <?php echo form_tag_for($form, '@sf_guard_group') ?>
    <?php echo $form->renderHiddenFields(false) ?>

    <?php if ($form->hasGlobalErrors()): ?>
      <?php echo $form->renderGlobalErrors() ?>
    <?php endif; ?>

    <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
      <?php include_partial('sfGuardGroup/form_fieldset', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
    <?php endforeach; ?>

    <?php include_partial('sfGuardGroup/form_actions', array('sf_guard_group' => $sf_guard_group, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </form>
</div>
<?php 
}
elseif($form->isNew()){
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not create group.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php  
}
else{
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not edit this group.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php
}

}
elseif($form->isNew()){
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not create group.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php  
}
else{
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not edit this group.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php
}
?>