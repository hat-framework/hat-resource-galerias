<?php 
    $this->Js->LoadPlugin("jcarousel", "galerias", "jcal");
    require_once DIR_BASIC . DIR_PLUGIN . 'galerias/images_sample.php';
    //$this->Js->jcal->draw($image);
        
?>

<script type="text/javascript" src="<?echo $this->base_url;?>lib/jquery.jcarousel.min.js"></script>
<link rel="stylesheet" type="text/css" href="<?echo $this->base_url;?>skins/tango/skin.css" />

<script type="text/javascript">

jQuery(document).ready(function() {
    jQuery('.jcal').jcarousel({
    	wrap: 'circular'
    });
});

</script>

<div id="wrap">
  <h1>jCarousel</h1>
  <h2>Riding carousels with jQuery</h2>

  <h3>Circular carousel</h3>
  <p>
    This example shows a simple circular carousel.
  </p>

  <ul class="jcal jcarousel-skin-tango">
    <li><img src="http://static.flickr.com/66/199481236_dc98b5abb3_s.jpg" width='75' height='75' alt="" /></li>
    <li><img src="http://static.flickr.com/75/199481072_b4a0d09597_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/57/199481087_33ae73a8de_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/77/199481108_4359e6b971_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/58/199481143_3c148d9dd3_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/72/199481203_ad4cdcf109_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/58/199481218_264ce20da0_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/69/199481255_fdfe885f87_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/60/199480111_87d4cb3e38_s.jpg" width="75" height="75" alt="" /></li>
    <li><img src="http://static.flickr.com/70/229228324_08223b70fa_s.jpg" width="75" height="75" alt="" /></li>
  </ul>

</div>