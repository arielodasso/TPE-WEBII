<?php

class noticiaCompletaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }


    // Devuelve noticia pasando su id.
    
    function seleccionarNoticiaById($id) {
        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id]);
    }


}

