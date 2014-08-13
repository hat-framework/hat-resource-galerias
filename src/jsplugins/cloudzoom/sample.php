<?php 
    require_once '../../../../init.php';
    require_once '../images_sample.php';
    require_once 'cloudzoomJs.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
<head> 
    
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/> 
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon" /> 
    <title>Professor Cloud</title> 
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
    <!--<script type="text/javascript" src="cloud-zoom.1.0.2.min.js"></script> -->
    <link   rel="stylesheet" type="text/css" href="main.css"/> 
    <link   rel="stylesheet" type="text/css" href="cloud-zoom.css"/> 
    
</head>
<body> 
    
    <h1><a href="http://www.professorcloud.com/mainsite/cloud-zoom.htm">Site do Plugin</a></h1> 
    <?php 
    
    $czoom = cloudzoomJs::getInstanceOf('galerias/cloudzoom');
    $czoom->drawGallery(array ( 'cod_album' => '53', 'cod_autor' => '1', 'foto_capa' =>'','used'=> 'used'));
    
    ?>
    <div class="zoom-section">	  
        <div class="zoom-small-image" style="width: 247px;">
            <a href='<?php echo $image[0]['image']; ?>' class = 'cloud-zoom' id='zoom1' 
               rel="tintOpacity:0.5 ,smoothMove:5,zoomWidth:280,zoomHeigth:280, adjustY:5, adjustX:5 ">
                <img src="<?php echo $image[0]['image']; ?>" alt='' title="Optional title display" style='width: 240px; 
                     height: 240px;'/>
            </a>
            <p>
                <?php 
                    $i = 0; 
                    foreach($image as $img){
                        $img = $img['image'];
                ?>
                    <a href='<?php echo $img; ?>' class='cloud-zoom-gallery' title='Red' 
                       rel="useZoom: 'zoom1', smallImage: '<?php echo $img; ?>'">
                            <img class="zoom-tiny-image" src="<?php echo $img; ?>" 
                                 alt = "Thumbnail <?php echo $i; ?>" style='width: 80px; height: 80px; float: left;'/>
                    </a>
                <?php 
                    }
                ?>
            </p>
        </div> 
    </div>

    <div class="zoom-section">
        <div class="zoom-small-image"> 
            <a href='<?php echo $image[4]['image']; ?>' class = 'cloud-zoom' 
               rel="tint: '#ff0000',tintOpacity:0.5 ,smoothMove:5,zoomWidth:480, adjustY:-4, adjustX:10">
                    <img   src="<?php echo $image[4]['image']; ?>" title="Optional Title Text" alt='' 
                           style='width: 200px; height: 200px;'/>
            </a>
        </div> 
        <div class="zoom-desc">
            <h3>Tints</h3> 
            <p>
                Add a tint of any colour (including black or white) to the small image. 
                The intensity of tint is fully customisable, shown here in red at 50%.
            </p> 
            <p>
                In this example, the movement smoothness is set to a higher value for a gentle drifting 
                effect.
            </p> 
        </div> 
    </div> 

    <div class="zoom-section"> 
        <div class="zoom-small-image">
            <a href='<?php echo $image[5]['image']; ?>' class = 'cloud-zoom' 
               rel="position: 'inside' , showTitle: false, adjustX:-4, adjustY:-4"> 
                    <img src="<?php echo $image[5]['image']; ?>" title="Your caption here" alt=''
                         style='width: 200px; height: 200px;'/>
            </a>
        </div> 
        <div class="zoom-desc">
            <h3>Inner Zoom</h3>
            <p>
                Zoom position can be inside the smaller image, useful if you would rather not obscure 
                any other content.
            </p> 
        </div>
    </div>

    <div class="zoom-section" > 

        <div class="zoom-small-image">
            <a href='<?php echo $image[6]['image']; ?>' class = 'cloud-zoom' 
               title="Your caption here" rel="softFocus: true, position:'anypos', smoothMove:2">       
                    <img src="<?php echo $image[6]['image']; ?>" alt='' style='width: 200px; height: 200px;'/>
            </a>
        </div> 
        <div class="zoom-desc" style="position:relative"> 
            <div id="anypos" 
                 style="position:absolute;top:-128px; left: 128px;width:256px; height:256px;">
            </div> 
            <h3>Soft Focus</h3>
            <p>Apply a subtle soft-focus effect to the small image.</p>
            <p>
                In this example, the zoom window position is specified as a div target which can be 
                positioned anywhere. The movement smoothness is set to a lower value for a snappier feel.
            </p> 
        </div> 
    </div>
    
    
</body> 
</html> 