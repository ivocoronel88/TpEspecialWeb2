<?php
    require_once "./Model/DiarioModel.php";
    require_once "./View/DiarioView.php";


    class DiarioController{
        private $view;
        private $model;
        
        
        function __construct(){
            $this->model = new DiarioModel();
            $this->view = new DiarioView();
        }
            
            
        function showHome(){
            
            $seccion = $this->model->getSeccion();
           
            $this->view->showSeccion($seccion);
        }

        function mostrarNoticias($id){
            $noticia = $this->model->getNoticiaPorSeccion($id);
        
            $this->view->showNoticiaPorSeccion($noticia);
        }
        function mostrarNoticia($id){
            $noticia = $this->model->getNoticia($id);
            $seccion = $this->model->getSeccion();
            $this->view->showNoticia($noticia,$seccion);
            
        
        }

        function insertNoticia(){
            $titulo = $_POST['input_titulo'];
            $subtitulo = $_POST['input_subtitulo'];
            $cuerpoNoticia = $_POST['input_cuerpoNoticia'];
            $seccion = $_POST['input_seccion'];
            $this->model->insertNoticia($titulo,$subtitulo, $cuerpoNoticia,$seccion);
            $this->showHome();
        }

        
        function deleteNoticia(){
            
            $id_noticia = $_POST['id_noticiaDelete'];
            $this->model->deleteNoticia($id_noticia);
            $this->showHome();
            
        }

        function editarNoticia(){
            $id_noticia = $_POST['id_noticia'];
            $titulo=$_POST['titulo'];
            $subTitulo=$_POST['subTitulo'];
            $cuerpoNoticia=$_POST['cuerpoNoticia'];
            $id_secciones=$_POST['id_seccion'];
            
            $this->model->editarNoticia($id_noticia,$titulo,$subTitulo,$cuerpoNoticia,$id_secciones);
            $this->mostrarNoticia($id_noticia);
        }

        function insertSeccion(){
      
            $seccion = $_POST['input_nombreSeccion'];
            var_dump($seccion);
            $this->model->insertSeccion($seccion);
            $this->showHome();
        }
    
        
        function deleteSeccion(){
            
            $id_seccion = $_POST['id_seccion'];
            
            $this->model->deleteSeccion($id_seccion);
            $this->showHome();
            
        }
    
       function editarSeccion(){
            $nombre = $_POST['nombre'];
            $id_secciones = intval($_POST['id_seccion']);
            $this->model->editarSeccion($id_secciones,$nombre);
            $this->showHome();
            
            
            
            
        }

        function idSeccion(){
            $id = $this->editarSeccion();
        }
        
        
        function createUser(){
            if(!empty($_POST['email'])&& !empty($_POST['password'])){
                $userEmail=$_POST['email'];
                $userPassword=password_hash($_POST['password'], PASSWORD_BCRYPT);
            
                $this->model->insertUsuario($userEmail, $userPassword);
        }
    }

    function verificarLogin(){
        $email = $_POST['email'];
        $password = $_POST['password'];
       
        if (!empty($_POST['email']) && !empty($_POST['password'])) {
            
            
            $usuario = $this->model->getUsuario($email);
            
            
            
            if ($usuario && password_verify($password, $usuario->password)) {
                
                session_start();
                
                
               
               
                $_SESSION["email"]=$usuario->email;
                $this->view->showHomeLogin("Logeaste king");
                
            } else {
                $this->view->showLogin("Acceso denegado");
            }
        }
    }
    
   
}
    
 
