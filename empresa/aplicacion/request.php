<?php
//echo hola;
class request
  {
      private $_controlador;
      private $_metodo;
      private $_argumentos;
      private $_rutaControlador;
      private $_ruta;
    public function getruta($_ruta,$controlador,$metodo){
    //echo $_ruta;
    $RealPach=explode('/',$_ruta);
  //  echo $i.'<br>';
    $separador='/';
    $inicial=0;
    $final=count($RealPach)-1;
    $RealPach[$i].'<br>';
    //print_r ($RealPach);
    for ($i=0; $i < count($RealPach); $i++) {
      $NombreCarpeta=$RealPach[$i];
     if ($i==$inicial) {
        $URLBASE=$NombreCarpeta;
        if ($NombreCarpeta=='empresa') {
          //$ruta=$URLBASE;
          $ruta='../empresa';
        }
     }elseif ($i>0 && $i<$final) {
       $URLBASE=$URLBASE.$separador.$NombreCarpeta;
       if ($NombreCarpeta=='empresa') {
            $ruta='../empresa';
       }
     } else {
       $URLBASE=$URLBASE.$separador.$NombreCarpeta;
       if ($NombreCarpeta=='empresa') {
            $ruta='../empresa';
       }
     }
     $this->_rutaControlador=$ruta.$separador.'controllers'.$separador.$controlador.'Controller.php';
     $this->_ruta=$ruta.$separador;
     $this->_metodo=$metodo;
     $this->_controlador=$controlador;
    }

     //return $this->_controlador;
     // return $url;
    }

    public function GetRutaControlador(){
      return $this->_rutaControlador;
    }

    public function GetMetodo(){
     return $this->_metodo;
    }

    public function GetControlador(){
     return $this->_controlador;
    }

    public function GetRutaBase(){
     return $this->_ruta;
    }

  }
?>
