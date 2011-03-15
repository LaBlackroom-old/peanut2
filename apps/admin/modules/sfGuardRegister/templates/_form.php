<form action="<?php echo url_for('@sf_guard_register') ?>" method="post" novalidate>
  
  <?php if($form['email_address']->hasError() || $form['username']->hasError() || $form['password']->hasError()): ?>
  <section class="notification error">
    <p>
      <?php if($form['email_address']->hasError()): ?>
      <?php echo __('Your email') ?>: <?php echo $form['email_address']->getError() ?><br />
      <?php endif; ?>
      
      <?php if($form['username']->hasError()): ?>
      <?php echo __('Username') ?>: <?php echo $form['username']->getError() ?><br />
      <?php endif; ?>
      
      <?php if($form['password']->hasError()): ?>
      <?php echo __('Password') ?>: <?php echo $form['password']->getError() ?><br />
      <?php endif; ?>
    </p>
  </section>
  <?php endif; ?>
  
  <section class="clearfix container">
    <p><?php echo $form['first_name']->render() ?></p>
    <p><?php echo $form['last_name']->render() ?></p>
    <p><?php echo $form['email_address']->render() ?></p>
    <p><?php echo $form['username']->render() ?></p>
    <p><?php echo $form['password']->render() ?></p>
    <p><?php echo $form['password_again']->render() ?></p>
  </section>
  
  <p>
    <input type="submit" name="register" value="<?php echo __('Register', null, 'sf_guard') ?>" />
  </p>
  
  <?php echo $form->renderHiddenFields(); ?>
</form>