<?php

   class view
   {


/*   public function redireccionar_editar($controlador,$vista,$parametros,$campos){
      $_layoutParams=array(
           'ruta_css'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/css/',
           'ruta_img'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/img/',
           'ruta_js'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/js/',
            'menu'=>$_menu
        );
       $rutaView=ROOT.'views'.DS.$controlador.DS.$vista.'.phtml';
       //echo $rutaView;
       if (is_readable($rutaView)) {
        # code...
        //$v_post=$post;

        $ver_vista=$parametros['argumentos'];
        $idformula=$parametros['idformula'];
        unset($parametros['argumentos']);
        unset($parametros['idformula']);
        $casas=$parametros;
        $CamposEdit=$campos;
        include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header_admin.php';
        include_once $rutaView;
        include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer_admin.php';
       } else {
          throw new Exception("Error Vista");
       }
     } //Cierre metodo carga modelo



    public function redireccionar($controlador,$vista,$parametros){

      $_layoutParams=array(
           'ruta_css'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/css/',
           'ruta_img'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/img/',
           'ruta_js'=> BASE_URL. 'views/layout/'. DEFAULT_LAYOUT . '/js/',
            'menu'=>$_menu
        );

       $rutaView=ROOT.'views'.DS.$controlador.DS.$vista.'.phtml';
       //echo $rutaView;
       if (is_readable($rutaView)) {
        # code...
        //$v_post=$post;
        $casas=$parametros;
        $ver_vista=$parametros['argumentos'];
        unset($parametros['argumentos']);

        include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'header_admin.php';
        include_once $rutaView;
        include_once ROOT.'views'.DS.'layout'.DS.DEFAULT_LAYOUT.DS.'footer_admin.php';
       } else {
          throw new Exception("Error Vista");
       }
     } //Cierre metodo carga modelo */

    public function renderizar($seccion,$vista,$rutabase,$DatosConf=[],$parametros=[])
    {
       $_layoutParams=array(
           'ruta_css'=> $DatosConf['ruta_css'],
           'ruta_img'=> $DatosConf['ruta_img'],
           'ruta_js'=> $DatosConf['ruta_js'],
           'BASE_URL'=> $DatosConf['BASE_URL']
       	);

       $rutaView=$rutabase.DS.'views'.DS.$seccion.DS.$vista.'.phtml';
        //echo $rutaView;
        echo $_layoutParams['ruta_css'];
       if (is_readable($rutaView)) {
       	# code...
        //$v_post=$post;
        $valcont=$parametros['varpost'];
        $valuser=$parametros['user'];
        $valespacios=$parametros['espacios'];
        $valemail=$parametros['email'];
        $DEFAULT_LAYOUT=$DatosConf['DEFAULT_LAYOUT'];
        //echo $_layoutParams['ruta_css'];
       	//include_once $rutabase.'views'.DS.'layout'.DS.$DEFAULT_LAYOUT.DS.'header.php';
       	include_once $rutaView;
       	//include_once $rutabase.'views'.DS.'layout'.DS.$DEFAULT_LAYOUT.DS.'footer.php';
       } else {
          throw new Exception("Error Vista");
       }
   	}
   }
?>
