<?php

require_once "config/database.php";

class IndexModel
{

    private $db;

    public function __construct()
    {
        $this->db = Database::connect();
    }

    // ==========================
    // LISTAR
    // ==========================

    public function getAll()
    {
        $sql = "SELECT * FROM cursos_destacados ORDER BY id DESC";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();
    }

    // ==========================
    // BUSCAR POR ID
    // ==========================

    public function getById($id)
    {
        $sql = "SELECT * FROM cursos_destacados WHERE id=?";

        $stmt = $this->db->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetch();
    }

    // ==========================
    // CREAR
    // ==========================

    public function create($data, $files)
    {

        $imagen = "";

        if(isset($files["imagen"]) && $files["imagen"]["error"] == 0){

            $imagen = basename($files["imagen"]["name"]);

            move_uploaded_file(

                $files["imagen"]["tmp_name"],

                "img/curso/".$imagen

            );

        }

        $sql = "INSERT INTO cursos_destacados
        (nombre, descripcion, imagen, categoria)
        VALUES (?, ?, ?, ?)";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([

            $data["nombre"],
            $data["descripcion"],
            $imagen,
            $data["categoria"]

        ]);

    }

    // ==========================
    // ACTUALIZAR
    // ==========================

    public function update($data, $files)
    {

        $imagen = $data["imagen_actual"];

        if(isset($files["imagen"]) && $files["imagen"]["error"] == 0){

            $imagen = basename($files["imagen"]["name"]);

            move_uploaded_file(

                $files["imagen"]["tmp_name"],

                "img/curso/".$imagen

            );

        }

        $sql = "UPDATE cursos_destacados SET

                nombre=?,
                descripcion=?,
                imagen=?,
                categoria=?

                WHERE id=?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([

            $data["nombre"],
            $data["descripcion"],
            $imagen,
            $data["categoria"],
            $data["id"]

        ]);

    }

    // ==========================
    // ELIMINAR
    // ==========================

    public function delete($id)
    {

        $curso = $this->getById($id);

        if($curso){

            $ruta = "img/curso/".$curso["imagen"];

            if(file_exists($ruta)){

                unlink($ruta);

            }

        }

        $sql = "DELETE FROM cursos_destacados WHERE id=?";

        $stmt = $this->db->prepare($sql);

        return $stmt->execute([$id]);

    }

}

?>