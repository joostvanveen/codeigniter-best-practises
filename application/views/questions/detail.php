<section class="question">
	<h2><?php echo escape($question->subject); ?></h2>
	<p class="name">
	    <?php echo escape($question->user->first_name); ?>
	    <?php echo escape($question->user->last_name); ?>
	    - <?php echo escape($question->created); ?>
	</p>
	<p><?php echo $this->parser->textileThis(escape($question->text)); ?></p>
</section>

<?php if(!empty($answers)): ?>
<section class="answers">
	<h3 class="highlight">Answers</h3>
	
	<?php foreach ($answers as $answer): ?>
		<article>
			<p class="name right">
			    <?php echo escape($answer->user->first_name); ?>
        	    <?php echo escape($answer->user->last_name); ?>
        	    - <?php echo escape($answer->created); ?>
			</p>
			<div class="right"><?php echo $this->parser->textileThis(escape($answer->text)); ?></div>
		</article>
	<?php endforeach; ?>
	
</section>
<?php endif; ?>

<section class="comment">
	<h3 class="highlight">Answer this question!</h3>
	<p>You can use textile markup</p>
	<?php echo form_open(); ?>
	<?php echo form_hidden('user_id', $this->ion_auth->user()->row()->id); ?>
	<?php echo form_hidden('questions_id', (int) $this->uri->segment(3)); ?>
	<?php echo form_textarea('text'); ?>
	<?php echo form_submit('submit', 'Answer this question'); ?>
	<?php echo form_close(); ?>

</section>