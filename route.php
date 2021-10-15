<?php
require_once "./Controller/DiarioController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');

 if(!empty($_GET['action'])){
     $action = $_GET['action'];
     
 }else{
     $action= 'home';
     
 }
$param = explode('/',$action);

$diarioController = new DiarioController();



switch($param[0]){
    case 'home':
        $diarioController->showHome();
        break;
     case 'seccion':
        $diarioController->mostrarNoticias($param[1]);
        break;
     case 'noticia':
        $diarioController->mostrarNoticia($param[1]);
        break;
     case 'insertNoticia':
        $diarioController->insertNoticia();
        break;
     case 'deleteNoticia':
        $diarioController->deleteNoticia();
        break;
      case 'editarNoticia':
         $diarioController->editarNoticia();
         break;
      case 'editarNoticia':
         $diarioController->editarNoticia();
         break;
      case 'insertSeccion';
         $diarioController->insertSeccion();
         break;
      case 'deleteSeccion';
         $diarioController->deleteSeccion();
         break;
      case 'editarSeccion':
         $diarioController->editarSeccion();
          break;
       case 'verificarLogin': 
         $diarioController->verificarLogin();
         break;
      case 'createUser': 
         $diarioController->createUser();
         break;
    
        
}
         

