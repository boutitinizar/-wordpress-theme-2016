<?php
/**
 * User: Nizar
 * Date: 25/12/2015
 * Time: 00:27
 */
?>
<h1>Nizar Theme Option</h1>

<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php settings_fields('nizar-settings-group'); ?>
    <?php do_settings_sections('nizar-theme-option'); ?>
    <?php submit_button(); ?>
</form>
<?php ?>