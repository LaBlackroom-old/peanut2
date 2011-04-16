<?php if($form->hasErrors()): ?>
<ul class="notification error clearfix">
	<?php if($form['name']->getError()): ?><li><?php echo $form['name']->getError() ?></li><?php endif; ?>
	<?php if($form['mail']->getError()): ?><li><?php echo $form['mail']->getError()?></li><?php endif; ?>
	<?php if($form['message']->getError()): ?><li><?php echo $form['message']->getError() ?></li><?php endif; ?>
	<?php if($form['captcha']->getError()): ?><li><?php echo $form['captcha']->getError() ?></li><?php endif; ?>
</ul>
<?php endif; ?>

<form action="<?php echo url_for('contact/new.html') ?>" class="cssform" method="post">

	<fieldset>

		<p>
			<?php echo $form['name']->renderLabel() ?><br />
			<?php echo $form['name']->render() ?>
		</p>

		<p>
			<?php echo $form['mail']->renderLabel() ?><br />
			<?php echo $form['mail']->render() ?>
		</p>

		<p>
			<?php echo $form['message']->renderLabel() ?><br />
			<?php echo $form['message']->render(array('class' => 'text-input textarea')) ?>
		</p>

        <?php echo $form['captcha']->render() ?>
		<?php echo $form->renderHiddenFields() ?>

		<input name="Send" type="submit" value="<?php echo __('Submit', null, 'peanutForm') ?>" class="button" id="send" size="16"/>

	</fieldset>

</form>