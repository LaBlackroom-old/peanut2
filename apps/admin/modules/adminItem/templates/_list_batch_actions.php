<?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?> 
  
  <li class="sf_admin_batch_actions_choice">
    <select name="batch_action">
      <option value=""><?php echo __('Choose an action', array(), 'sf_admin') ?></option>
      
      <?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>     
        <option value="batchStatus"><?php echo __('Status', array(), 'sf_admin') ?></option>
      <?php endif; ?>
        
      <?php if($sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?> 
        <option value="batchDelete"><?php echo __('Delete', array(), 'sf_admin') ?></option>
      <?php endif; ?>
    </select>
    
    <?php $form = new BaseForm(); ?>
    
    <?php if ($form->isCSRFProtected()): ?>
      <input type="hidden" name="<?php echo $form->getCSRFFieldName() ?>" value="<?php echo $form->getCSRFToken() ?>" />
    <?php endif; ?>
    
    <input type="submit" value="<?php echo __('go', array(), 'sf_admin') ?>" />
  </li>
    
<?php endif; ?>



    
    
  
  
  

