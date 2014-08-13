<?php

function loadjcarousel($url, $path, $folder)
{
    ?>
        <script type="text/javascript" src="<?php echo $url; ?>lib/jquery.jcarousel.min.js"></script>
        <link rel="stylesheet" type="text/css" href="<?php echo $url; ?>skins/tango/skin.css" />

        <script type="text/javascript">

        jQuery(document).ready(function() {
            jQuery('.galeria-lista').jcarousel({
                wrap: 'circular'
            });
        });

        </script>


<?php
}?>
