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

    public function selectNoticiaById($id) {
        $titulo = $_POST['titulo'];
        $query = $this->db->prepare('SELECT * FROM noticias WHERE id = ?');
        $query->execute([$id,$titulo]);
        $categoria=$query->fetch(PDO::FETCH_LAZY);
    }

    // Actualizar una noticia

    public function updateNoticia($id,$titulo,$descripcion,$cuerpo,$fecha,$categoria){
        $query = $this->db->prepare('UPDATE noticias SET titulo=?, descripcion=?, cuerpo=?, fecha=? WHERE id=?');
        $query->execute([$id,$titulo,$descripcion,$cuerpo,$fecha,$categoria]);

    }


    /**
     * Elimina un equipo dado su id.
     */
    public function deleteNoticiaById($id) {
        $query = $this->db->prepare('DELETE FROM noticias WHERE id = ?');
        $query->execute([$id]);
    }
}