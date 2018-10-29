<h1>Libro Theme Options</h1>
<h3 class="title">Manage Options</h3>
<p>Customize Slider Options</p>

<form method="post" action="">
	<?php settings_fields('libro-settings-group'); ?>
	<?php do_settings_sections( 'brij_libro' ) ?>
</form>