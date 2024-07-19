<?php

require_once plugin_dir_path(__DIR__) . '/lib/util.php';

function wps_theme_func()
{

   if (isset($_POST['submit'])) {


      $dir = plugin_dir_path(__DIR__) . 'config/config.ini';


      $strtel = '55' . (string)$_POST['tel']; // '55' is the code for Brazil, if you are not in Brazil, put the code of your country

      $strtel = trim(str_replace(' ', '', $strtel));
      $strtel = trim(str_replace('(', '', $strtel));
      $strtel = trim(str_replace(')', '', $strtel));
      $strtel = trim(str_replace('-', '', $strtel));

      $data = ['tel' => $strtel];

      if (write_ini_file($data, $dir, false)) {

         printf('<div class="notice notice-success is-dismissible"><p>%s</p></div>', esc_html("Telefone configurado com sucesso!"));
      }
   }

?>

   <div class="wrap" style="margin: 2%  ;">
      <h2><?php printf('<div class="notice"><p>%s</p></div>', esc_html("Configurar telefone de contato do WhatzApp")); ?></h2>
      <form method="post">
         <label for="nome" style="font-weight: bold;">Telefone:</label>
         <input type="text" id="tel" name="tel" value="" required><br>


         <?php submit_button(); ?>

      </form>
   </div>

<?php

}

wps_theme_func();
