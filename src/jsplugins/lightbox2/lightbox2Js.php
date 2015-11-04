<?php

use classes\Classes\JsPlugin;
class lightbox2Js extends JsPlugin{
    
    static private $instance;
    public static function getInstanceOf($plugin){
        $class_name = __CLASS__;
        if (!isset(self::$instance)) {
            self::$instance = new $class_name($plugin);
        }
        return self::$instance;
    }
    
    public function start($id, $type = "."){}
    
    public function init(){
        $this->Html->LoadJquery();
        $this->Html->LoadBowerComponent(array('lightbox2/dist/js/lightbox.min'),array('lightbox2/dist/css/lightbox'));
    }
    
    
}