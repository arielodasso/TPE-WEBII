<?php

class ComentariosModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }


    public function getAllComentarios() {

        $query = $this->db->prepare("SELECT * FROM comentarios");
        $query->execute();

        $comentarios = $query->fetchAll(PDO::FETCH_OBJ);
        
        return $comentarios;
    }
}