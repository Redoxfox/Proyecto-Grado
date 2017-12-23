<?php
   define('DS',DIRECTORY_SEPARATOR);
   define('ROOT',realpath(dirname(__FILE__)).DS);

    require_once ROOT. 'empresa/aplicacion/bootstrap.php';
    $controllers='index';
    $metodo='index';
    $rutacontrolador=ROOT.'empresa/controllers'.DS.$controllers.'Controller.php';
    /*$APP_PATH=ROOT. 'empresa/aplicacion/';
  //  echo $APP_PATH;
    //$peticion=new request;
    //$peticion->getruta(ROOT,'index','index');
    //$peticion->GetRutaControlador();
  //  $APP_PATH=$peticion->GetRutaBase();
    //echo $APP_PATH;
   define('APP_PATH', $APP_PATH);
   require_once APP_PATH . 'controllers.php';
   require_once APP_PATH . 'view.php';
   require_once APP_PATH . 'Database.php';
   require_once APP_PATH . 'Model.php';
   require_once APP_PATH . 'bootstrap.php';
   require_once APP_PATH . 'session.php'; */
   $enrutar=new bootstrap();
   $enrutar->run($rutacontrolador,$controllers,$metodo,ROOT);
 ?>
