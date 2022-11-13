<?php

class HomeModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }

    /**
     * Devuelve la lista de equipos completa.
     */
    public function getAllNoticias() {
        // Ejecuto la sentencia (2 subpasos)
        $consulta = $this->db->prepare("SELECT * FROM noticias");
        $consulta->execute();

        // Obtengo los resultados
        $noticias = $consulta->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $noticias;
    }

    public function getNombreCategoria() {

        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT categoria FROM noticias JOIN categorias ON noticias.id_categoria_fk=categorias.id_categoria");
        $query->execute();

        //  Obtengo los resultados
        $nombreCategoria = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $nombreCategoria;
    }

}