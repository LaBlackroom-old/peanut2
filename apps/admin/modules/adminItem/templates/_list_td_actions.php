<td>
  <ul class="sf_admin_td_actions">
  
    <?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>     
      
      <li class="sf_admin_action_change status">
        <?php echo link_to(__('Change status', array(), 'messages'), 'adminItem/changestatus?id='.$peanut_item->getId(), array()) ?>
      </li>
      <li class="sf_admin_action_up">
        <?php echo link_to(__('Up', array(), 'messages'), 'adminItem/promote?id='.$peanut_item->getId(), array()) ?>
      </li>
      <li class="sf_admin_action_down">
        <?php echo link_to(__('Down', array(), 'messages'), 'adminItem/demote?id='.$peanut_item->getId(), array()) ?>
      </li>
      <?php echo $helper->linkToEdit($peanut_item, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>

    <?php elseif($sf_user->hasPermission('1') && !$sf_user->hasPermission('2') && !$sf_user->hasPermission('3') && !$sf_user->hasPermission('4') && !$sf_user->hasPermission('5')): ?>
      
      <?php echo $helper->linkToEdit($peanut_item, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Lire',)) ?>

    <?php endif; ?> 
      
    <?php if($sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?> 
        
      <?php echo $helper->linkToDelete($peanut_item, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>

    <?php endif; ?>
    
  </ul>
  
  
    
    
    
    
  
</td>
