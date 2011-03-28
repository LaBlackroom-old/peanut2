<td class="sf_admin_text sf_admin_list_td_id">
  <?php echo link_to($peanut_menu->getId(), 'adminMenu/edit', $peanut_menu) ?>
</td>
<td class="sf_admin_text sf_admin_list_td_name">
  <span class="<?php echo $peanut_menu->getNode()->isLeaf() ? 'file' : 'folder' ?>">
    <?php echo $peanut_menu->getName() ?>
  </span>
</td>
<td class="sf_admin_text sf_admin_list_td_slug">
    <?php echo $peanut_menu->getSlug() ?>
</td>
