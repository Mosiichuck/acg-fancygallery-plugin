<?php

namespace includes;
class ACGFancyGalleryPlugin
{
    private static $instance = null;
    private function __construct() {
    }
    public static function getInstance() {
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    static public function activation()
    {
        // debug.log
        error_log('plugin '.ACGFANCYGALLERY_PlUGIN_NAME.' activation');
    }
    static public function deactivation()
    {
        // debug.log
        error_log('plugin '.ACGFANCYGALLERY_PlUGIN_NAME.' deactivation');
    }
}
ACGFancyGalleryPlugin::getInstance();