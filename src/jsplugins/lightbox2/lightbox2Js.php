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
    
    public function start($id, $type = "."){
        $this->Html->LoadJQueryFunction("
            $(function() {
                $('$type$id a.img').lightBox();
            });
        ");
    }
    
    public function init(){        
        $this->Html->LoadJs("$this->url/js/lightbox", true);
        $this->Html->loadExternCss("$this->url/css/lightbox");
    }
    
    
}

?>