<section class="comment">
	<h3 class="highlight">Please log in</h3>
	
	<?php echo validation_errors() ? '<div class="errors">' . validation_errors() . '</div>' : ''; ?>
	<?php echo !empty($error) ? '<div class="errors">' . $error . '</div>' : '';?>
	<?php echo form_open(); ?>
	<?php echo form_label('Email'); ?>
	<?php echo form_input('email'); ?>
	<?php echo form_label('Password'); ?>
	<?php echo form_password('password'); ?>
	<?php echo form_submit('submit', 'Log in'); ?>
	<?php echo form_close(); ?>
</section>