<?php

class NoticiaModel {

    private $db;

    public function __construct() {
        $this->db = new PDO('mysql:host=localhost;'.'dbname=qatar_news;charset=utf8', 'root', '');
    }

    // Devuelve la lista de noticias completa.
     
    public function getAllNoticias() {

        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM noticias");
        $query->execute();

        // Obtengo los resultados
        $noticias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
  
        return $noticias;
    }

    public function getAllCategorias() {

        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT * FROM categorias");
        $query->execute();

        // Obtengo los resultados
        $categorias = $query->fetchAll(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

    public function getNoticiaById() {

        // Ejecuto la sentencia (2 subpasos)
        $query = $this->db->prepare("SELECT FROM noticias WHERE id = ?");
        $query->execute();

        //  Obtengo los resultados
        $categorias = $query->fetch(PDO::FETCH_OBJ); // devuelve un arreglo de objetos
        
        return $categorias;
    }

    /**
     * Inserta una categoria en la base de datos.
     */
    public function insertNoticia($titulo, $descripcion, $cuerpo, $fecha, $categoria) {
            $query = $this->db->prepare("INSERT INTO noticias (titulo, descripcion, cuerpo, fecha, id_categoria_fk) VALUES (?, ?, ?, ?, ?)");
            $query->execute([$titulo, $descripcion, $cuerpo, $fecha, $categoria]);
        return $this->db->lastInsertId();
    }


    // Selecciona categoria

    function selectNoticiaById($id) {
        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id]);
        $categoria = $query->fetch(PDO::FETCH_LAZY);
        $nombre = $categoria['nombre'];
        return $categoria;
    }

    // Actualizar una noticia

    function updateNoticia($titulo, $descripcion, $fecha, $cuerpo, $id) {
        $query = $this->db->prepare("UPDATE noticias SET titulo = ?, descripcion = ?, fecha = ?, cuerpo = ? WHERE id = ?");
        $query->execute([$titulo, $descripcion, $fecha, $cuerpo, $id]);
    }


    /**
     * Elimina un equipo dado su id.
     */
    public function deleteNoticiaById($id) {
        $query = $this->db->prepare('DELETE FROM noticias WHERE id = ?');
        $query->execute([$id]);
    }


    public function filtrar($id) {

        $query = $this->db->prepare("SELECT a.*,b.* FROM noticias a INNER JOIN categorias b ON a.id_categoria_fk = b.id_categoria WHERE b.id_categoria = ? ORDER BY categoria ASC");
        $query->execute([$id]);
        $noticias = $query->fetchAll(PDO::FETCH_OBJ);
        return $noticias;
    }

    
    function seleccionarNoticiaById($id) {
        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id]);
        $noticias = $query->fetchAll(PDO::FETCH_OBJ);
        return $noticias;
    }

}