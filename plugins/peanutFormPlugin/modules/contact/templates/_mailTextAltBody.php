<?php echo __('Hi, this is a new message from your contact form', null, 'peanutForm') ?>
<?php echo __('The information about sender:', null, 'peanutForm') ?>

	<?php echo __('Name:', null, 'peanutForm') ?> <?php echo $name; ?>
	<?php echo __('Mail:', null, 'peanutForm') ?> <?php echo $mail; ?>


<?php echo __('The message is:', null, 'peanutForm') ?>
<?php echo $message; ?>

<?php echo __('For your information, only the fields name, mail and message are required', null, 'peanutForm') ?>