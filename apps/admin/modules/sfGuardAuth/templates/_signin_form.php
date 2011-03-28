<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  
  <?php if($form['username']->hasError() || $form['password']->hasError()): ?>
  <section class="notification error">
    <p>
      <?php foreach($form['username']->getError() as $error): ?>
        <?php echo __('Username') ?>: <?php echo $error ?><br />
      <?php endforeach; ?>
      
      <?php echo __('Password') ?>: <?php echo $form['password']->getError() ?><br />
    </p>
  </section>
  <?php endif; ?>
  
  <?php if($sf_user->hasFlash('notice')): ?>
  <section class="notification notice">
    <p><?php echo __($sf_user->getFlash('notice'), null, 'sf_guard') ?></p>
  </section>
  <?php endif; ?>
  
  <?php if($sf_user->hasFlash('error')): ?>
  <section class="notification error">
    <p><?php echo __($sf_user->getFlash('error'), null, 'sf_guard') ?></p>
  </section>
  <?php endif; ?>
  
  <section class="clearfix container">
    <p><?php echo $form['username']->render() ?></p>
    <p><?php echo $form['password']->render() ?></p>
    <p class="grid_3 alpha omega">
      <?php echo $form['remember']->renderLabel($label = __('Remember me', null, 'sf_guard'), array('class' => 'floatRight')) ?>
      <?php echo $form['remember']->render() ?>
    </p>

    <?php echo $form->renderHiddenFields(); ?>
  </section>
  
  <p class="clearfix">
    <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />
  </p>
    
  <p class="floatRight">
    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
      <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
    <?php endif; ?>

    <?php if (isset($routes['sf_guard_register'])): ?>
      &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
    <?php endif; ?>
  </p>
  
</form>