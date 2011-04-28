<nav>
  <ul>
    <li><a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'adminMenu'): echo 'current'; endif; ?>" title="<?php echo __('Link to', null, 'peanutCorporate'); ?>"><?php echo __('Manage menu', null, 'peanutCorporate'); ?></a>
      <ul>
        <li><a href="<?php echo url_for('@peanut_menu'); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Show menu', null, 'peanutCorporate'); ?></li></a>
        <li><a href="<?php echo url_for('@peanut_menu_new') ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Add Menu', null, 'peanutCorporate'); ?></li></a>
      </ul>
    </li>
  </ul>
</nav>