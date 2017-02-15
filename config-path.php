<?php

define("ACGFANCYGALLERY_PlUGIN_DIR", plugin_dir_path(__FILE__));
define("ACGFANCYGALLERY_PlUGIN_URL", plugin_dir_url( __FILE__ ));
define("ACGFANCYGALLERY_PlUGIN_SLUG", preg_replace( '/[^\da-zA-Z]/i', '_',  basename(ACGFANCYGALLERY_PlUGIN_DIR)));
define("ACGFANCYGALLERY_PlUGIN_TEXTDOMAIN", str_replace( '_', '-', ACGFANCYGALLERY_PlUGIN_SLUG ));
define("ACGFANCYGALLERY_PlUGIN_OPTION_VERSION", ACGFANCYGALLERY_PlUGIN_SLUG.'_version');
define("ACGFANCYGALLERY_PlUGIN_OPTION_NAME", ACGFANCYGALLERY_PlUGIN_SLUG.'_options');
define("ACGFANCYGALLERY_PlUGIN_AJAX_URL", admin_url('admin-ajax.php'));

if ( ! function_exists( 'get_plugins' ) ) {
    require_once ABSPATH . 'wp-admin/includes/plugin.php';
}
$TPOPlUGINs = get_plugin_data(ACGFANCYGALLERY_PlUGIN_DIR.'/'.basename(ACGFANCYGALLERY_PlUGIN_DIR).'.php', false, false);
define("ACGFANCYGALLERY_PlUGIN_VERSION", $TPOPlUGINs['Version']);
define("ACGFANCYGALLERY_PlUGIN_NAME", $TPOPlUGINs['Name']);

// путь к файлу перевода
define("ACGFANCYGALLERY_PlUGIN_DIR_LOCALIZATION", plugin_basename(ACGFANCYGALLERY_PlUGIN_DIR.'/languages/'));