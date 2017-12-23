<?php
class config
{
   public function DatosConfig($rutabase){

     define('DEFAULT_CONTROLLER', 'index');
     define('DEFAULT_LAYOUT', 'default');
     define('BASE_URL', $rutabase);
     define('APP_NAME', 'PERFUMES ESCENCIAL');
     define('APP_SLOGAN', 'Inspiraciones que cautivan');
     define('APP_COMPANY', 'escencial.ltda');
     define('DB_HOST', 'localhost');
     define('DB_USER', 'root');
     define('DB_PASS', '123456');
     define('DB_NAME', 'perfume');
     define('DB_CHAR', 'utf8');

     $_datos=array(
       'ruta_css'=> BASE_URL. '/views/layout/'. DEFAULT_LAYOUT . '/css/',
       'ruta_img'=> BASE_URL. '/views/layout/'. DEFAULT_LAYOUT . '/img/',
       'ruta_js'=> BASE_URL. '/views/layout/'. DEFAULT_LAYOUT . '/js/',
       'ruta_cofig'=> BASE_URL. '/aplicacion/',
       'DEFAULT_CONTROLLER'=> DEFAULT_CONTROLLER,
       'APP_NAME'=> APP_NAME,
       'DEFAULT_LAYOUT'=>DEFAULT_LAYOUT,
       'BASE_URL'=> BASE_URL,
       'APP_SLOGAN'=>APP_SLOGAN,
       'APP_COMPANY'=> APP_COMPANY,
       'DB_HOST'=> DB_HOST,
       'DB_USER'=> DB_USER,
       'DB_NAME'=> DB_NAME,
       'DB_PASS'=> DB_PASS,
       'DB_CHAR'=> DB_CHAR
    );
    return $_datos;
  }
}


?>
