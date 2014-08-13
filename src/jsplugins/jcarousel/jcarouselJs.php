<?php

use classes\Classes\JsPlugin;
class jcarouselJs extends JsPlugin{
    
    public $file_sample = "sample.php";
    static private $instance;
    private $class = "gcal";
    public static function getInstanceOf($plugin){
        $class_name = __CLASS__;
        if (!isset(self::$instance)) {
            self::$instance = new $class_name($plugin);
        }

        return self::$instance;
    }
    
    public function draw($image){
        $imagem = is_array($image)?$image['image']:$imagem;
        echo        "<a href='$imagem' class = 'img gjcal jcarousel-skin-tango'>";
        echo            "<img src='$imagem' alt='' title='' width='75' height='75'/>";
        echo        "</a>";
    }
    
    public function drawGallery($album, $class = ""){
        $this->LoadComponent("galeria/album/album", 'aobj');
        $this->aobj->drawAlbum($album, "", $this->class, $show_empty_album = false, $img_size = "min", $id = "");
    }
    
    public function init(){        
        $this->Html->LoadJs("$this->url/lib/jquery.jcarousel.min", true);
        $this->Html->loadExternCss("$this->url/skins/ie7/skin");

        $this->Html->LoadJQueryFunction("
            jQuery('.$this->class').jcarousel({
                wrap: 'circular'
            });
        ");
    }
    
    
}

?>