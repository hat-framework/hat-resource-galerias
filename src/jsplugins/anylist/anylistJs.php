<?php

use classes\Classes\JsPlugin;
class anylistJS extends JsPlugin {

    public $file_sample = "index.html";
    public $project_url = "http://als.musings.it/";
    
    static private $instance;
    private $visible_itens   = 4;
    private $scrolling_itens = 4;
    private $vertical        = 'horizontal';
    private $circular        = 'yes';
    private $autoscroll      = 'yes';
    private $interval        = '8000';
    
    public static function getInstanceOf($plugin){
        $class_name = __CLASS__;
        if (!isset(self::$instance)) self::$instance = new $class_name($plugin);
        return self::$instance;
    }
    
    public function visible_itens($num){
        $this->visible_itens = (is_numeric($num))?$num:3;
        return $this;
    }
    
    public function scrolling_itens($num){
        $this->scrolling_itens = (is_numeric($num))?$num:3;
        return $this;
    }
    
    public function vertical($bool){
        $this->vertical = ($bool)?'vertical':'horizontal';
        return $this;
    }
    
    public function circular($circular){
        $this->circular = ($circular)?'yes':'no';
        return $this;
    }
    
    public function autoscroll($autoscroll){
        $this->autoscroll = ($autoscroll)?'yes':'no';
        return $this;
    }
    
    public function interval($interval){
        $this->interval = $interval;
        return $this;
    }
    
    public function init(){        
        $this->setaleft   = $this->Html->getUrlImage("anylist/left_arrow.png");
        $this->setaright  = $this->Html->getUrlImage("anylist/right_arrow.png");
        $this->Html->LoadJs("$this->url/jquery.als-1.3.min.js", true);
        $this->Html->LoadCss("plugins/anylist");
        $this->Html->LoadJqueryFunction("
            $('#demo3').als({
                visible_items: $this->visible_itens,
                scrolling_items: $this->scrolling_itens,
                orientation: '$this->vertical',
                circular: '$this->circular',
                autoscroll: '$this->autoscroll',
                interval: $this->interval
            });
        ");
    }
    
    public function draw($image){
        $this->LoadScripts();
        $imagem = is_array($image)?$image['image']:$imagem;
        echo        "<a href='$imagem' class = 'cloud-zoom' rel=\"$this->arguments\">";
        echo            "<img src='$imagem' alt='' title=''/>";
        echo        "</a>";
    }

    public function drawContent($itens, $class = ""){
        echo "
        <div class='als-container $class' id='demo3'>
          <div class='als-prev'><img src='$this->setaleft'/></div>
          <div class='als-viewport'>
            <ul class='als-wrapper'>";
              foreach($itens as $item){
                  echo "<li class='als-item'>$item</li>";
              }
            echo"</ul>
          </div>
          <div class='als-next pull-right'><img src='$this->setaright'/></div>
        </div>";


    }
}
