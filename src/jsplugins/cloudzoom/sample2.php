<?php
    $file = PLUGIN_PATH . "galerias/images_sample.php";
    require_once $file;
    $this->Js->LoadPlugin("cloudzoom", "imagens-acessorios", "czoom");
    $this->Js->czoom->LoadScripts();
?>
<style>
    .zoomcontainer{
        display: table;
    }
    
    .zoom-small-image{
        width: 240px;
    }
    
    .cloud-zoom img{
        height: 240px;
        max-width: 240px;
    }
    
    .cloud-zoom-gallery img{
        -moz-box-shadow: 10px 10px 5px #888;
        -webkit-box-shadow: 10px 10px 5px #888;
        box-shadow: 10px 10px 5px #888;
        float: left;
        height: 75px;
        padding: 2px;
        width: 75px; 
    }
    
</style>

    <?php 
        $this->Js->LoadPlugin("cloudzoom", "imagens-acessorios", "czoom");
        
        $arg = "tintOpacity:0.5 ,smoothMove:20, zoomWidth:480, adjustY:-4, adjustX:10, softFocus: true";
        $this->Js->czoom->setArguments($arg);
        $this->Js->czoom->draw($image[0], $arg);
        
        $arg = "tintOpacity:0.5 ,smoothMove:20, zoomWidth:480, adjustY:-3, adjustX:3, softFocus: true";
        $this->Js->czoom->setArguments($arg);
        $this->Js->czoom->drawGallery($image, $arg);
        
        $arg = "tint: '#ff0000',tintOpacity:0.5 ,smoothMove:5,zoomWidth:480, adjustY:-4, adjustX:10";
        $this->Js->czoom->setArguments($arg);
        $this->Js->czoom->drawGallery($image, $arg);
        
        $arg = "position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4";
        $this->Js->czoom->setArguments($arg);
        $this->Js->czoom->drawGallery($image, $arg);
        
        $arg = "softFocus: true, smoothMove:2";
        $this->Js->czoom->setArguments($arg);
        $this->Js->czoom->drawGallery($image, $arg);

    ?>
