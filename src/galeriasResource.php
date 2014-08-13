<?php

require_once("classes/galeria.php");
class galeriaResource extends \classes\Interfaces\resource{
    
    public $project_url = '';
    public $file_sample = 'sample.php';
    
    public static function getInstanceOf(){
        
        $class_name = __CLASS__;
        if (!isset(self::$instance)) {
            self::$instance = new $class_name;
        }

        return self::$instance;
    }
   
    public function setGaleria($galeria){
    	//carrega o slider padrao
    	$class = "$galeria"."Galeria";
    	$this->LoadResourceFile("lib/".default_galeria."/$class.php");
    	
    	$this->galeria = new $class();
    	
    }
    
    public function load(){
    	$this->galeria->load();
    }
    
    public function draw($array){
    	$this->galeria->draw($array);
    }
    
}

?>
