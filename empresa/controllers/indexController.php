<?php
   class indexController extends controllers
   {
    private $ver;
    private $parametros=array();

   	public function index($rutabase,$DatosConf)
   	{
   		# code...
   		//echo "Hola estamos en index";

      $ModeloIndex=$this->loadModel('index');
      $vistaIndex=$this->loadView('index');
    //  $rutabase,$DatosHost
      //echo $DatosConf['DB_CHAR'];
      //$this->_view->posts=$post-> getindex();
   		//$this->_view->titulo='portada';
      //$this->parametros=[
        //"varpost" =>false,
      //];
   		$vistaIndex->renderizar('index','index',$rutabase,$DatosConf,$this->parametros);
   	}
   }
?>
