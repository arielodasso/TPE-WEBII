<?php

class NoticiaCategoriaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }


    // Devuelve la lista de noticias completa.
     
    public function getNoticiasCategoria($id) {

        // Ejecuto la sentencia
        $query = $this->db->prepare('SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id_categoria WHERE b.id_categoria = ?');
        $query->execute([$id]);

        // Obtengo los resultados
        $noticias = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }


}

