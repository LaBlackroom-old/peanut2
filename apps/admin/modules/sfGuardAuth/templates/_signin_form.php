<form action="<?php echo url_for('@sf_guard_signin') ?>" method="post">
  
  <?php if($form['username']->renderError() || $form['password']->renderError() ): ?>
  <section class="notification error">
    <?php echo $form['username']->renderError(); ?>
    <?php echo $form['password']->renderError(); ?>
  </section>
  <?php endif; ?>
  
  <?php if($sf_user->hasFlash('notice')): ?>
  <section class="notification notice">
    <?php echo __($sf_user->getFlash('notice'), null, 'sf_guard') ?>
  </section>
  <?php endif; ?>
  
  <?php if($sf_user->hasFlash('error')): ?>
  <section class="notification error">
    <?php echo __($sf_user->getFlash('error'), null, 'sf_guard') ?>
  </section>
  <?php endif; ?>
  
  <section class="clearfix container">
    <p><?php echo $form['username']->render() ?></p>
    <p><?php echo $form['password']->render() ?></p>
    <p class="grid_3">
      <label class="floatRight" for="signin[remember]"><?php echo __('Remember me', null, 'sf_guard'); ?></label>
       <?php echo $form['remember']->render() ?>
    </p>

    <?php echo $form->renderHiddenFields(); ?>
  </section>
  
  <p>
    <input type="submit" value="<?php echo __('Signin', null, 'sf_guard') ?>" />

    <?php $routes = $sf_context->getRouting()->getRoutes() ?>
    <?php if (isset($routes['sf_guard_forgot_password'])): ?>
      <a href="<?php echo url_for('@sf_guard_forgot_password') ?>"><?php echo __('Forgot your password?', null, 'sf_guard') ?></a>
    <?php endif; ?>

    <?php if (isset($routes['sf_guard_register'])): ?>
      &nbsp; <a href="<?php echo url_for('@sf_guard_register') ?>"><?php echo __('Want to register?', null, 'sf_guard') ?></a>
    <?php endif; ?>
  </p>
  
</form>