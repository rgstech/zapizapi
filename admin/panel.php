<?php

require_once plugin_dir_path( __DIR__ ) . '/lib/util.php';

   function wps_theme_func()
{ 
     
       if(isset($_POST['submit'])) 
       {
            
                
                $dir = plugin_dir_path(__DIR__) . 'config/config.ini';
               

                $strtel = '55'.(string)$_POST['tel'];

                $strtel = trim(str_replace(' ', '', $strtel)); 
                $strtel = trim(str_replace('(', '', $strtel)); 
                $strtel = trim(str_replace(')', '', $strtel)); 
                $strtel = trim(str_replace('-', '', $strtel)); 

                $data = [ 'tel' => $strtel ];
                
               if (write_ini_file($data, $dir, false)) 
               {
                
                  echo "<h3>Telefone configurado com sucesso!</h3>";
                
               }

         }

    ?>

    <div class="wrap">
         <form method="post">
          <label for="nome">Telefone:</label>
          <input type="text" id="tel" name="tel" value="" required><br>
        

          <?php submit_button(); ?>
       
        </form> 
    </div>

<?php

}

wps_theme_func();