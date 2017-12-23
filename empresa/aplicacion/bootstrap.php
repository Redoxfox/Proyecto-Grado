  <?php

  class bootstrap
  {

    public static function run($rutacontrolador,$controllers,$metodo,$rutabase)
    {
      $RealPach= str_split($rutabase);
      $separador=0;
      $Elementos=explode('/',$rutabase);
      $final=count($Elementos)-2;

      for ($i=0; $i < count($RealPach); $i++) {
          //echo $RealPach[$i]. '<br>';
          $charuta=$RealPach[$i];
          if ($charuta=='/') {
            $separador=$separador+1;
          }
       }
       //echo $separador;
      if ($separador==4) {
         $base='empresa';
      }

      if ($separador==7) {
         $base='../../../empresa';
      }
      //header('Location:http://tomygame.com/?ref=grupoanticrisis');
      //echo $controllers;
      require_once  '/var/www/html/empresa/aplicacion/config.php';
      $Varhost=new config();
      $DatosHost=$Varhost->DatosConfig($base);
      define('APP_PATH',$DatosHost['ruta_cofig']);
      require_once APP_PATH . 'controllers.php';
      require_once APP_PATH . 'view.php';
      require_once APP_PATH . 'Database.php';
      require_once APP_PATH . 'Model.php';
      require_once APP_PATH . 'session.php';
      define('BASE_URL',$DatosHost['BASE_URL']);
      define('DB_HOST',$DatosHost['DB_HOST']);
      define('DB_USER',$DatosHost['DB_USER']);
      define('DB_NAME',$DatosHost['DB_NAME']);
      define('DB_PASS',$DatosHost['DB_PASS']);
      define('DB_CHAR',$DatosHost['DB_CHAR']);
        //echo $rutacontrolador;
      if (is_readable($rutacontrolador)) {
        require_once $rutacontrolador;

        $_controlador=$controllers.'Controller';
        //if (is_callable(array($controllers,$metodo))) {
        //echo $_controlador;
        //  echo $metodo;
          $controllers=new $_controlador();
          $controllers->$metodo(BASE_URL,$DatosHost);

        //$index=new indexController();
        //$index->$metodo();
        //}
      }
    }
  } //Cierre Clase
/*
        //$arg=$peticion->getargs();
        //$num= count($arg);


             //Verificar si se puede llamar controlador

       ////////////////////////////////////////////////////////////////////////////////////////////////////
       if (is_callable(array($controllers,$metodo))) {
          $peticionx=new request;
          $metodo=$peticionx->getmetodo();
          echo "Estamos en metodo X";
        } else {
          echo "Estamos en metodo index";
           $metodo='index';
        }
        if (!empty($peticion->getargs())) {
          call_user_func_array(array($controllers, $metodo),$peticion->getargs());
        } else {
           call_user_func(array($controllers, $metodo ));
        }


       ////////////////////////////////////////////////////////7


        }  else {
          throw new Exception("Metodo no  encontrado");
        } */
?>
