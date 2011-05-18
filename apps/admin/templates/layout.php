<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->

  <head>
    <meta charset="utf-8" />

    <?php include_http_metas() ?>
    <?php include_metas() ?>

    <?php include_title() ?>

    <link rel="shortcut icon" href="/favicon.ico" />
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">

    <?php include_html5_stylesheets() ?>

    <?php echo html5_javascript_include_tag('/js/modernizr-1.7.min.js') ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.js"></script>
    <script>!window.jQuery && document.write(unescape('%3Cscript src="/js/jquery-1.5.1.min.js"%3E%3C/script%3E'))</script>
  </head>

  <body id="authenticated" >
    <div id="container" class="container clearfix">
        
      <header id="top" class="clearfix" role="banner">

        <h1 class="prefix_1 grid_8">
          <a href="<?php echo url_for('@homepage', true); ?>" title="<?php echo __('Homepage'); ?>" />
            <?php echo sfConfig::get('app_site_name', 'myWebsite') ?>
          </a>
        </h1>

        <section id="adminBar" class="floatRight listInline">
          <a href="<?php echo url_for('@sf_guard_signout') ?>" title="<?php echo __('Logout') ?>" class="picto exit">
            <img src="/images/admin/Power.png" width="24" height="24" />
            <p><?php echo __('Logout') ?></p>
          </a>
        </section>

      </header>
        
      <section id="sidebar" role="sidebar">
        <h2><?php echo __('functionnalities') ?></h2>
        <?php include_component('adminMenu', 'menu') ?>
        <?php include_component('adminItem', 'menu') ?>
        
        <?php if($sf_user->hasPermission('admin')): ?>

        <nav <?php if($sf_context->getModuleName() == 'sfGuardUser'): echo 'class="selected"'; endif; ?>>
          <h3>
            <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
              <?php echo __('Manage users', null, 'sfGuard'); ?>
            </a>
          </h3>
          
          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_user'); ?>" title="<?php echo __('Link to', null, 'sfGuard') ?>">
                <?php echo __('Show users', null, 'sfGuard'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_user_new') ?>" title="<?php echo __('Link to', null, 'sfGuard') ?>">
                <?php echo __('Add user', null, 'sfGuard'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <nav <?php if($sf_context->getModuleName() == 'sfGuardGroup'): echo 'class="selected"'; endif; ?>>
          <h3>
            <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
              <?php echo __('Manage groups', null, 'sfGuard'); ?>
            </a>
          </h3>

          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_group'); ?>" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
                <?php echo __('Show groups', null, 'sfGuard'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_group_new'); ?>" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
                <?php echo __('Add group', null, 'sfGuard'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <nav <?php if($sf_context->getModuleName() == 'sfGuardPermission'): echo 'class="selected"'; endif; ?>>
          <h3>
            <a href="#" class="nav-top-item" title="<?php echo __('Link to', null, 'sfGuard') ?>">
              <?php echo __('Manage permissions', null, 'sfGuard'); ?>
            </a>
          </h3>

          <ul>
            <li>
              <a href="<?php echo url_for('@sf_guard_permission'); ?>" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
                <?php echo __('Show permissions', null, 'sfGuard'); ?>
              </a>
            </li>
            <li>
              <a href="<?php echo url_for('@sf_guard_permission_new'); ?>" title="<?php echo __('Link to', null, 'sfGuard'); ?>">
                <?php echo __('Add permission', null, 'sfGuard'); ?>
              </a>
            </li>
          </ul>
        </nav>

        <?php endif; ?>

        <div class="user-profile">
          <img src="http://www.gravatar.com/avatar/<?php echo md5($sf_user->getGuardUser()->getEmailAddress()) ?>?s=22&d=identicon" class="floatLeft" width="22" height="22" />
          <p>
            <a href="<?php echo url_for('@homepage').'guard/users/'.$sf_user->getGuardUser()->getId().'/edit'; ?>" title="<?php echo __('Edit your profile', null, 'sfGuard') ?>">
              <?php echo $sf_user->getGuardUser()->getUsername() ?>
            </a>
          </p>
          <p><?php echo $sf_user->getGuardUser()->getEmailAddress() ?></p>
        </div>
      </section>
        
      <section id="main" role="main">
        <?php echo $sf_content ?>
      </section>

    </div>

    
  
    <!--[if lt IE 7 ]>
      <script src="js/libs/dd_belatedpng.js"></script>
      <script>DD_belatedPNG.fix('img, .png_bg');</script>
    <![endif]-->


    <?php include_html5_javascripts() ?>
  </body>
</html>
