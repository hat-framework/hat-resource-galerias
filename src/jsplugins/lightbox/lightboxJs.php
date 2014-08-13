<?php

use classes\Classes\JsPlugin;
class lightboxJs extends JsPlugin{
    
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
                $('$type$id a.img').lightBox({
                    containerResizeSpeed: 350,
                    imageLoading:   \"$this->url/images/lightbox-ico-loading.gif\",
                    imageBtnPrev:   \"$this->url/images/lightbox-btn-prev.gif\",
                    imageBtnNext:   \"$this->url/images/lightbox-btn-next.gif\",
                    imageBtnClose:  \"$this->url/images/lightbox-btn-close.gif\",
                    imageBlank:     \"$this->url/images/lightbox-blank.gif\"
                });
            });
        ");
    }
    
    public function init(){        
        $this->Html->LoadJs("$this->url/js/jquery.lightbox-0.5.min", true);
        $this->Html->loadExternCss("$this->url/css/jquery.lightbox-0.5");
    }
    
    
}

?>