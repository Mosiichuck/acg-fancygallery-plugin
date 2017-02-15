<?php
/*
Plugin Name: ACG_FancyGallery Plugin
Plugin URI: https://github.com/Mosiichuck/ACG_FancyGallery Plugin/
Description: ACG_FancyGallery Plugin.
Version: 1.0
Author:  MosiichukDmytro
Author URI: https://ua.linkedin.com/in/дмитрий-мосейчук-81275911a
Text Domain: acg-fancygallery-plugin
Domain Path: /languages/
License: A "Slug" license name e.g. GPL2
    Copyright 2017  Mosiichuk Dmytro  (email: MoseychuckD.A@yandex.ua)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/
require_once plugin_dir_path(__FILE__) . '/config-path.php';
require_once ACGFANCYGALLERY_PlUGIN_DIR.'/includes/common/ACGFancyGalleryPluginAutoload.php';
require_once ACGFANCYGALLERY_PlUGIN_DIR.'/includes/ACGFancyGalleryPlugin.php';
register_activation_hook( __FILE__, array('includes\ACGFancyGalleryPlugin' ,  'activation' ) );
register_deactivation_hook( __FILE__, array('includes\ACGFancyGalleryPlugin' ,  'deactivation' ) );