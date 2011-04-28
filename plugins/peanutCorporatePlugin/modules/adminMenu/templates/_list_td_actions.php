<td>
  <ul class="sf_admin_td_actions">
    <li class="sf_admin_action_new">
      <?php echo link_to(__('Add children', array(), 'messages'), 'adminMenu/ListNew?id='.$peanut_menu->getId(), array()) ?>
    </li>
    <?php echo $helper->linkToEdit($peanut_menu, array(  'params' =>   array(  ),  'class_suffix' => 'edit',  'label' => 'Edit',)) ?>
    <?php echo $helper->linkToDelete($peanut_menu, array(  'params' =>   array(  ),  'confirm' => 'Are you sure?',  'class_suffix' => 'delete',  'label' => 'Delete',)) ?>
    <li class="sf_admin_action_up">
      <?php echo link_to(__('Up', array(), 'messages'), 'adminMenu/up?id='.$peanut_menu->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_down">
      <?php echo link_to(__('Down', array(), 'messages'), 'adminMenu/down?id='.$peanut_menu->getId(), array()) ?>
    </li>
    <li class="sf_admin_action_make_root">
      <?php echo link_to(__('Make root', array(), 'messages'), 'adminMenu/makeRoot?id='.$peanut_menu->getId(), array()) ?>
    </li>
  </ul>
</td>
