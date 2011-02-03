<?php use_helper('I18N') ?>
<h1><?php echo __('Hi %first_name%', array('%first_name%' => $user->getValue('first_name')), 'sf_guard') ?>,</h1>

<p><?php echo __('This e-mail is being sent because you just registered on our site.', null, 'sf_guard') ?></p>

<p><?php echo link_to(
                __('Click to confirm your account', null, 'sf_guard'),
                '@sf_guard_register_confirmation?username=' . $user->getValue('username') . '&token='.$token,
                'absolute=true'
        ) ?></p>