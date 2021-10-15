<?php

class DiarioModel{
    
    private $db;

    function __construct(){
        $this->db = new PDO('mysql:host=localhost;' . 'dbname=db_diario;charset=utf8', 'root', '');
    }
    
    function getDiario(){
        $sentencia = $this->db->prepare('SELECT * FROM noticia');
        $sentencia->execute();
        $diario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $diario;
    }

    function getNoticiaPorSeccion($id){
        $sentencia = $this->db->prepare('SELECT * FROM noticia WHERE id_secciones=?');
       //$sentencia = $this->db->prepare( "SELECT N.*, S.nombre as nombreSeccion from noticia N NATURAL JOIN secciones S on N.id_secciones = S.id_secciones WHERE id_secciones=?");
       $sentencia->execute(array($id));
        $diario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $diario;
    }

    function getNoticia($id){
       $sentencia = $this->db->prepare( "SELECT N.*, S.nombre as nombreSeccion from noticia N JOIN secciones S on N.id_secciones = S.id_secciones WHERE id_noticia=?");
       $sentencia->execute(array($id));
        $diario = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $diario;
    }
    
    function getSeccion(){
        $sentencia = $this->db->prepare( "SELECT * FROM secciones");
        $sentencia->execute();
        $seccion = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $seccion;
    }
    
    function insertNoticia($titulo,$Subtitulo, $cuerponoticia, $id_secciones){
        $sentencia = $this->db->prepare("INSERT INTO noticia (titulo,Subtitulo, cuerponoticia, id_secciones) VALUES (?, ?, ?, ?)");
        $sentencia->execute(array($titulo,$Subtitulo, $cuerponoticia, $id_secciones));
    }
    
    
    function deleteNoticia($id){
        $sentencia = $this->db->prepare("DELETE FROM noticia WHERE id_noticia = ?");
        $sentencia->execute(array($id));
    }

    function editarNoticia($id_noticia, $titulo,$Subtitulo, $cuerponoticia, $id_secciones){
        $sentencia = $this->db->prepare("UPDATE noticia SET titulo= ?,Subtitulo=?,cuerponoticia=?,id_secciones=? WHERE id_noticia = ?");
        $sentencia-> execute(array($titulo,$Subtitulo,$cuerponoticia,$id_secciones, $id_noticia));

    }
    
    //----------------------

    function insertSeccion($nombre){
        $sentencia = $this->db->prepare("INSERT INTO secciones (nombre) VALUES (? )");
        $sentencia->execute(array($nombre));
    }
    
    
    function deleteSeccion($id_secciones){
        $sentencia = $this->db->prepare("DELETE FROM secciones WHERE id_secciones = ?");
        $sentencia->execute(array($id_secciones));
    }

    function editarSeccion($nombre, $id_secciones){
        
        
        $sentencia = $this->db->prepare("UPDATE secciones SET nombre = ? WHERE id_secciones = ?");
        $sentencia-> execute(array($nombre, $id_secciones));
        
    }

    
    
    function insertUsuario($userEmail, $userPassword){
        $sentencia = $this->db->prepare("INSERT INTO usuario (email, password) VALUES ( ? , ?)");
        $sentencia->execute([$userEmail,$userPassword]);
        
    }    
        
   
    function getUsuario($email){
        $query = $this->db->prepare('SELECT * FROM usuario WHERE email = ?');
        $query->execute([$email]);
        return $query->fetch(PDO::FETCH_OBJ);
    }/*
    function getUsuario(){
        $query = $this->db->prepare('SELECT * FROM usuario');
        $query->execute();
        return $query->fetch(PDO::FETCH_OBJ);
    }
        
    


   
    
    /*
    
    function updateLibroFromDB($id,$autor,$nombre_libro, $descripcion, $precio, $genero){
        $sentencia = $this->db->prepare("UPDATE  libros SET autor=?,nombre_libro=?,descripcion=?,precio=?,id_categoria=? WHERE libros.id = ?");
        $sentencia->execute(array($id,$autor,$nombre_libro, $descripcion, $precio, $genero));
    }
    function updateCategoriaFromDB($id,$categoria){
        $sentencia = $this->db->prepare("UPDATE  categorias SET categoria=? WHERE categorias.id_categoria =?");
        $sentencia->execute(array($id,$categoria));
    }

     */
    
}