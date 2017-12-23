<?php
   /**
   *
   */
  class controllers
   {
   	  //public function index();
      //abstract public function elementos();

      protected function loadModel($modelo){
            $modelo=$modelo.'model';
            //echo BASE_URL;
            $rutaModelo=BASE_URL.DS.'models'. DS. $modelo.'.php';
          if (is_readable($rutaModelo)) {
            include_once $rutaModelo;
            $modelo=new $modelo;
            return $modelo;

       } else {
          throw new Exception("Error Modelo");
       }
     } //Cierre metodo carga modelo

     protected function loadView($vista){
           $vista=$vista.'.phtml';
           $rutaView=APP_PATH.'view.php';
          //echo $rutaView;
     if (is_readable($rutaView)) {
           include_once $rutaView;
           $vista=new view;
           return $vista;
      } else {
         throw new Exception("Error Modelo");
      }
    } //Cierre metodo carga modelo


     protected function getLibrary($libreria,$archivo){
            //$modelo=$modelo.'model';
            $rutaLibreria=BASE_URL.'/libs'.DS.$libreria.DS.$archivo.'.php';
            //'autoload'
            echo $rutaLibreria;
            if (is_readable($rutaLibreria)) {
            include_once $rutaLibreria;
            //$modelo=new $modelo;
            //return $modelo;
       } else {
          throw new Exception("Error Libreria");
       }
     } //Cierre metodo carga modelo

     protected function getInt($clave){
        if (isset($_POST[$clave]) && !empty($_POST[$clave])) {
        $_POST[$clave]=filter_input(INPUT_POST, $clave,FILTER_VALIDATE_INT);
         return $_POST[$clave];
             }
        return 0;
     } //Cierre metodo carga modelo

     protected function filtrarInt($int){
       $int=(int) $int;
       if (is_int($int)) {
                 return $int;
               }
               else
               {
                 return 0;
                }
     }

   } //Cierre clase controlador
?>
