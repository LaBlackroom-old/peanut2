<?php if($sf_user->hasPermission('2') || $sf_user->hasPermission('3') || $sf_user->hasPermission('4') || $sf_user->hasPermission('5')): ?>     
  <li class="sf_admin_action_create new page">
    <?php echo link_to(__('Create new page', array(), 'messages'), 'adminItem/newPage', array()) ?>
  </li>
  <li class="sf_admin_action_create new link">
    <?php echo link_to(__('Create new link', array(), 'messages'), 'adminItem/newLink', array()) ?>
  </li>
<?php endif; ?>
