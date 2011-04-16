<nav <?php if($sf_context->getModuleName() == 'adminMenu'): echo 'class="selected"'; endif; ?>>
  <h3>
    <a href="#" class="nav-top-item" title="<?php echo __('Liens d\'accès'); ?>">
      <?php echo __('Manage menu'); ?>
    </a>
  </h3>

  <ul>
    <li>
      <a href="<?php echo url_for('@peanut_menu'); ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Show menu'); ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('@peanut_menu_new') ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Add new menu'); ?></a>
    </li>
  </ul>
</nav>