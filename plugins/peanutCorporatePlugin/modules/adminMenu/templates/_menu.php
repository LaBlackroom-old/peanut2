<nav <?php if($sf_context->getModuleName() == 'adminMenu'): echo 'class="selected"'; endif; ?>>
  <h3>
    <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'peanutCorporate'); ?>">
      <?php echo __('Manage menu', null, 'peanutCorporate'); ?>
    </a>
  </h3>

  <ul>
    <li>
      <a href="<?php echo url_for('@peanut_menu'); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Show menu', null, 'peanutCorporate'); ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('@peanut_menu_new') ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Add new menu', null, 'peanutCorporate'); ?></a>
    </li>
  </ul>
</nav>