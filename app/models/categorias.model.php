<?php

class CategoriaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }

    // Devuelve la lista de categorias completa.

    public function getAllCategorias() {

        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();

        // Obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

    // Inserta una categoria en la base de datos.
  
    public function insertCategoria($categoria) {
        $query = $this->db->prepare("INSERT INTO categorias (categoria) VALUES (?)");
        $query->execute([$categoria]);

        return $this->db->lastInsertId();
    }

    // Selecciona categoria

    function seleccionarCategoriaById($id) {
        $query = $this->db->prepare('SELECT * FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
    }

    public function updateCategoria($categoria,$id){
        $query = $this->db->prepare('UPDATE categorias SET categoria=? WHERE id_categoria=?');
        $query->execute([$categoria,$id]);

    }

    // Elimina una categoria dado su id.
 
    function deleteCategoriaById($id) {
        $query = $this->db->prepare('DELETE FROM categorias WHERE id_categoria = ?');
        $query->execute([$id]);
    }

}


