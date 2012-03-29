<?php 
$userId[] = array();
foreach ($users->getRawValue() as $user):
  foreach ($user as $id):
    $userId[] = $id;
  endforeach;
endforeach;

if($sf_request->getParameter('id') == $sf_user->getGuardUser()->getId()
   || ($sf_user->hasPermission('4') && !in_array($sf_request->getParameter('id'), $userId) )
   || $sf_user->hasPermission('5')
  ){     
?>
  <?php use_stylesheets_for_form($form) ?>
  <?php use_javascripts_for_form($form) ?>

  <div class="sf_admin_form">
    <?php echo form_tag_for($form, '@sf_guard_user') ?>
      <?php echo $form->renderHiddenFields(false) ?>

      <?php if ($form->hasGlobalErrors()): ?>
        <?php echo $form->renderGlobalErrors() ?>
      <?php endif; ?>

      <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
        <?php include_partial('sfGuardUser/form_fieldset', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
      <?php endforeach; ?>

      <?php include_partial('sfGuardUser/form_actions', array('sf_guard_user' => $sf_guard_user, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </form>
  </div>
<?php 
}
elseif($form->isNew()){
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not create user profile.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php  
}
else{
?>
  <div class="sorry sf_admin_form">
    <?php echo __('Sorry but you can not edit this user profile.', null, 'sfGuard') ?>.. Cheater !
  </div>    
<?php
}
?>


