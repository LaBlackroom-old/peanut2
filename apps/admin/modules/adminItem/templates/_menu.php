<nav>
  <ul>
    <li><a href="#" class="nav-top-item <?php if($sf_context->getModuleName() == 'adminItem'): echo 'current'; endif; ?>" title="<?php echo __('Liens d\'accès'); ?>"><?php echo __('Manage items'); ?></a>
      <ul>
        <li><a href="<?php echo url_for('@peanut_item'); ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Show items'); ?></li></a>
        <li><a href="<?php echo url_for('@peanut_page_new') ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Add new page'); ?></li></a>
        <li><a href="<?php echo url_for('@peanut_link_new') ?>" title="<?php echo __('Liens d\'accès') ?>"><?php echo __('Add Link'); ?></li></a>
      </ul>
    </li>
  </ul>
</nav>