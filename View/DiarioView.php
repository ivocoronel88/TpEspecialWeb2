<?php
    require_once("./Templates/diario.tpl");
    require_once('./lib/smarty/libs/Smarty.class.php');

    
    class DiarioView{
        
        
        function __construct(){
            $this->smarty = new Smarty();
            
        }
        function  showSeccion($seccion){
            $this->smarty->assign('titulo','secciones');
            $this->smarty->assign('secciones',$seccion);

            $this->smarty->display('Templates/header.tpl');
          
            
        }
        function  showNoticiaPorSeccion($noticia){
            
            $this->smarty->assign('titulo','noticia');
            $this->smarty->assign('noticia',$noticia);
            $this->smarty->display('Templates/noticiasPorSeccion.tpl');

                
            
        }
        function  showNoticia($noticia,$seccion){
    
            $this->smarty->assign('titulo','noticia');
            $this->smarty->assign('secciones',$seccion);
            $this->smarty->assign('noticia',$noticia);
            $this->smarty->display('Templates/noticia.tpl');

                
            
        }
        
        function showHomeLogin($logeado=""){
            header("Location: ".BASE_URL."");
            $logeado = "Estas logeado";
            $this->smarty->assign('logeado', $logeado);
            $this->smarty->assign('templates/header.tpl');
        }

        function showLogin($error=""){
            $this->smarty->assign('titulo','LOG IN');
            $this->smarty->assign('error',$error);
            $this->smarty->display('templates/header.tpl');
        }
       

        
    }
        
    


