<nav>
  <ul>
    <li><a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'adminMenu'): echo 'current'; endif; ?>" title="<?php echo __('Liens d\'accès'); ?>"><?php echo __('Manage menu'); ?></a>
      <ul>
        <li><a href="<?php echo url_for('@peanut_menu'); ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Show menu'); ?></li></a>
        <li><a href="<?php echo url_for('@peanut_menu_new') ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Add Menu'); ?></li></a>
      </ul>
    </li>
  </ul>
</nav>