<?php

namespace includes\common;
class ACGFancyGalleryPluginAutoload
{
    private static $instance = null;
    private function __construct() {
        spl_autoload_register(array($this, 'autoloadNamespace'));
    }
    public static function getInstance(){
        if ( null == self::$instance ) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    /**
     * @param $className
     */
    public function autoloadNamespace($className){
        $fileClass = ACGFANCYGALLERY_PlUGIN_DIR.'/'.str_replace("\\","/",$className).'.php';
        if (file_exists($fileClass)) {
            if (!class_exists($fileClass, FALSE)) {
                require_once $fileClass;
            }
        }
    }
}
ACGFancyGalleryPluginAutoload::getInstance();