<?php

use classes\Classes\JsPlugin;
class prettyphotoJs extends JsPlugin{
    
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
            $(\"a[rel^='prettyPhoto']\").prettyPhoto({
                custom_markup: '<div id=\"map_canvas\" style=\"width:100%; height:100%\"></div>',
                changepicturecallback: function(){ initialize(); }
             });
        ");
    }
    
    public function init(){        
        $this->Html->LoadJs("$this->url/js/jquery.prettyPhoto", true);
        $this->Html->loadExternCss("$this->url/css/prettyPhoto");

    }
    
    
}

?>