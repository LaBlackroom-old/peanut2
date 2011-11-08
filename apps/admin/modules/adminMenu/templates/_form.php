<?php 

if($form->isNew() && (!$sf_user->hasPermission('2') && !$sf_user->hasPermission('3')
   && !$sf_user->hasPermission('4') && !$sf_user->hasPermission('5')))
{
  echo '<div class="sorry sf_admin_form">';
    echo __('Sorry but you can not create menu.', null, 'sfGuard');
  echo '.. Cheater!</div>';
}
else
{
  ?>
  <?php use_stylesheets_for_form($form) ?>
  <?php use_javascripts_for_form($form) ?>

  <div class="sf_admin_form">

    <?php echo form_tag_for($form, '@peanut_menu') ?>
      <?php echo $form->renderHiddenFields(false) ?>

      <?php if ($form->hasGlobalErrors()): ?>
        <?php echo $form->renderGlobalErrors() ?>
      <?php endif; ?>

      <?php foreach ($configuration->getFormFields($form, $form->isNew() ? 'new' : 'edit') as $fieldset => $fields): ?>
        <?php include_partial('adminMenu/form_fieldset', array('peanut_menu' => $peanut_menu, 'form' => $form, 'fields' => $fields, 'fieldset' => $fieldset)) ?>
      <?php endforeach; ?>

      <?php include_partial('adminMenu/form_actions', array('peanut_menu' => $peanut_menu, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
    </form>
  </div>
<?php } ?>