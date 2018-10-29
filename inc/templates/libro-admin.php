<h1>Libro Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
	<?php settings_fields('libro-settings-group'); ?>
	<?php do_settings_sections( 'brij_libro' ) ?>
	<?php submit_button(); ?>
</form>