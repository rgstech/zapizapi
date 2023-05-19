<?php

require_once plugin_dir_path( __DIR__ ) . '/lib/util.php';

function zapi_icon_show()
{ ?>

    <a href="https://wa.me/<?php echo getPhone(); ?>"> <img src="<?php echo plugins_url( '../images/wzap-icon.png', __FILE__ ) ?>" alt="wzap" class="icon-contact"></a>
    <!-- <a href="https://wa.me/5571996078880"> -->
<?php } 


