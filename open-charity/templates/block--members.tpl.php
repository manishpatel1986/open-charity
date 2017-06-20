<?php
/*
 * Customization for Members Block
 */
?>
	<?php print render($title_prefix); ?>
	
	<?php if ($block->subject): ?>
		<h2<?php print $title_attributes; ?>><?php print $block->subject ?></h2>
	<?php endif;?>
	
	<?php print render($title_suffix); ?>
	<div class="members-slider slider"<?php print $content_attributes; ?>>
		<?php print $content ?>
	</div>