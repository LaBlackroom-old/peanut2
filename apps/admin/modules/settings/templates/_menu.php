<nav <?php if($sf_context->getModuleName() == 'settings'):
        echo 'class="selected"'; endif; ?>>
  <h3>
    <a href="#" class="nav-top-item" title="<?php echo __('Options'); ?>">
      <?php echo __('Options'); ?>
    </a>
  </h3>

  <ul>
    <li>
      <a href="<?php echo url_for('settings', array('action' => 'general')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('General settings'); ?></a>
    </li>
     <li>
      <a href="<?php echo url_for('settings', array('action' => 'contact')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Contact settings'); ?></a>
    </li>    
    <li>
      <a href="<?php echo url_for('settings', array('action' => 'society')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Your society'); ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('settings', array('action' => 'google')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Your Google account'); ?></a>
    </li>
    <li>
      <a href="<?php echo url_for('settings', array('action' => 'seo')); ?>" title="<?php echo __('Link to', null, 'peanutCorporate') ?>"><?php echo __('Your SEO'); ?></a>
    </li>
  </ul>
</nav>