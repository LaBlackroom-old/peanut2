<p><?php echo __('Hi, this is a new message from your contact form', null, 'peanutForm') ?></p>
<p><?php echo __('The information about sender:', null, 'peanutForm') ?></p>
<ul>
	<li><?php echo __('Name:', null, 'peanutForm') ?> <?php echo $name; ?></li>
	<li><?php echo __('Mail:', null, 'peanutForm') ?> <?php echo $mail; ?></li>
</ul>

<p><?php echo __('The message is:', null, 'peanutForm') ?></p>
<p><?php echo $message; ?></p>

<p><?php echo __('For your information, only the fields name, mail and message are required', null, 'peanutForm') ?></p>