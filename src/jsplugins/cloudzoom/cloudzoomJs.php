<?php

use classes\Classes\JsPlugin;
class cloudzoomJS extends JsPlugin {

    public $file_sample = "sample2.php";
    private $arguments = "tintOpacity:0.5 ,smoothMove:20, zoomWidth:480, adjustY:-4, adjustX:10, softFocus: true";
    public $project_url = "http://www.professorcloud.com/mainsite/cloud-zoom.htm";
    
    static private $instance;
    public static function getInstanceOf($plugin){
        $class_name = __CLASS__;
        if (!isset(self::$instance)) {
            self::$instance = new $class_name($plugin);
        }

        return self::$instance;
    }
    
    public function init(){
        $this->setaleft  = $this->Html->getUrlImage("setaleft.jpg");
        $this->setaright = $this->Html->getUrlImage("setaright.jpg");
        
        $this->Html->LoadBowerComponent("cloud-zoom/cloud-zoom.1.0.2.min");
        $this->Html->LoadBowerComponentCss("cloud-zoom/cloud-zoom");
    }
    
    public function draw($image){
        $this->LoadScripts();
        $imagem = is_array($image)?$image['image']:$imagem;
        echo        "<a href='$imagem' class = 'cloud-zoom' rel=\"$this->arguments\">";
        echo            "<img src='$imagem' alt='' title=''/>";
        echo        "</a>";
    }
    
    public function setArguments($arguments){
        $this->arguments = $arguments;
    }
    
    public function drawGallery($album, $class = ""){
        $cod_album = $album['cod_album'];
        $capa      = $album['foto_capa'];
        
        $this->LoadModel("galeria/album", 'galbum');
        $images = $this->galbum->getFotos($cod_album);
        $url_imagens = URL_IMAGENS;
        if(empty ($images)){
            $url          = $this->Html->getUrlImage('semfoto/sem_foto.jpg');
            $url_imagens  = str_replace('sem_foto.jpg', "", $url);
            $capa = "";
            $images[] = array(
                'ext' => "jpg",
                'url' => "sem_foto"
            );
        }
        
        
        if($capa == "") $capa = $images[0];
        else{
            foreach($images as $img){
                if($img['cod_foto'] == $capa){
                    $capa = $img;
                    break;
                }
            }
        }
        
        $father  = rand(1000000, 50000000);        
        $img     = $url_imagens . $capa['url'].".".$capa['ext'];
        $img_min = $url_imagens . $capa['url']."_max.".$capa['ext'];
        $print = "
        <div class='$class'>
            <div class='fotomedia'>
                <a href='$img' onclick='return false;' class='cloud-zoom'
                    id='$father' rel=\"$this->arguments\">
                    <img src='$img_min' alt='' title=''/>
                </a>
            </div>
            
            <div class='czoom-painel'>
                <div class='clear' style='height:10px;'></div>
                <div class='photos-nav-left'>
                    <a href='javascript: moveLeft()'><img src='$this->setaleft' /></a>
                </div>
                <div class='photos-nav-right'>
                    <a href='javascript: moveRight()'><img src='$this->setaright' /></a>
                </div>
            </div>
                
            <div class='fotos-panel'>
                    <div id='sliderminiaturas'>";
                        foreach($images as $img){
                            
                            $img_max = $url_imagens . $img['url'].".".$img['ext'];
                            $img_min = $url_imagens . $img['url']."_min.".$img['ext'];
                            $img_med = $url_imagens . $img['url']."_max.".$img['ext'];
                            $print .= "
                            <div class='fotominiatura'>
                                <a href='$img_max' class='cloud-zoom-gallery' rel='useZoom: \"$father\", smallImage: \"$img_med\"'>
                                    <img class='zoom-tiny-image' src='$img_min' alt='Thumbnail'/>
                                </a>
                            </div>
                            ";
                        }
                
                   $print .= "<div class='clear'></div>
                    </div>
                    <div id='pageminiaturas' class='pageminiaturas'><span id='currentpage'>1</span> / 2</div>
            </div>
        
        </div>
        ";
        echo $print;
    }
}
?>