<?php

require_once "config/database.php";


class IndexModel
{

    private $db;


    public function __construct()
    {
        $this->db = Database::connect();
    }



    // Listar cursos destacados

    public function getAll()
    {

        $sql = "SELECT * FROM cursos_destacados";


        $stmt = $this->db->prepare($sql);


        $stmt->execute();


        return $stmt->fetchAll();

    }



    // Buscar por ID

    public function getById($id)
    {

        $sql = "SELECT * FROM cursos_destacados WHERE id = ?";


        $stmt = $this->db->prepare($sql);


        $stmt->execute([$id]);


        return $stmt->fetch();

    }



    // Crear curso

    public function create($data)
    {

        $sql = "INSERT INTO cursos_destacados
        (nombre, descripcion, imagen, categoria)
        VALUES (?, ?, ?, ?)";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([

            $data['nombre'],
            $data['descripcion'],
            $data['imagen'],
            $data['categoria']

        ]);

    }



    // Actualizar

    public function update($data)
    {

        $sql = "UPDATE cursos_destacados SET

        nombre=?,
        descripcion=?,
        imagen=?,
        categoria=?

        WHERE id=?";



        $stmt = $this->db->prepare($sql);



        return $stmt->execute([

            $data['nombre'],
            $data['descripcion'],
            $data['imagen'],
            $data['categoria'],
            $data['id']

        ]);

    }



    // Eliminar

    public function delete($id)
    {

        $sql = "DELETE FROM cursos_destacados WHERE id=?";


        $stmt = $this->db->prepare($sql);


        return $stmt->execute([$id]);

    }


}

?>