<h1><?php echo __('Forgot your password?', null, 'sf_guard') ?></h1>

<p>
  <?php echo __('Do not worry, we can help you get back in to your account safely!', null, 'sf_guard') ?>
  <?php echo __('Fill out the form below to request an e-mail with information on how to reset your password.', null, 'sf_guard') ?>
</p>

<?php if($form['email_address']->hasError()): ?>
<section class="notification error">
  <ul>
    <li><?php echo $form['email_address']->getError() ?></li>
  </ul>
</section>
<?php endif; ?>

<form action="<?php echo url_for('@sf_guard_forgot_password') ?>" method="post">
  
  <section class="clearfix container">
    <p><?php echo $form['email_address']->render() ?></p>
  </section>
  
  <p>
    <input type="submit" name="change" value="<?php echo __('Request', null, 'sf_guard') ?>" />
  </p>
  
  <?php echo $form->renderHiddenFields(); ?>
</form>