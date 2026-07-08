<?php

require_once "config/database.php";


class IndexModel{


    private $db;


    public function __construct(){

        $this->db = Database::connect();

    }



    // READ

    public function getAll(){

        $sql = "SELECT * FROM cursos_destacados";

        $stmt = $this->db->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);

    }



    // CREATE

    public function create($nombre,$descripcion,$imagen,$categoria){


        $sql="INSERT INTO cursos_destacados
        (nombre,descripcion,imagen,categoria)
        VALUES
        (?,?,?,?)";


        $stmt=$this->db->prepare($sql);


        return $stmt->execute([
            $nombre,
            $descripcion,
            $imagen,
            $categoria
        ]);

    }



    // DELETE

    public function delete($id){


        $sql="DELETE FROM cursos_destacados WHERE id=?";


        $stmt=$this->db->prepare($sql);


        return $stmt->execute([$id]);

    }



    // BUSCAR UNO

    public function getById($id){


        $sql="SELECT * FROM cursos_destacados WHERE id=?";


        $stmt=$this->db->prepare($sql);


        $stmt->execute([$id]);


        return $stmt->fetch(PDO::FETCH_ASSOC);

    }



    // UPDATE

    public function update($id,$nombre,$descripcion,$imagen,$categoria){


        $sql="UPDATE cursos_destacados SET

        nombre=?,
        descripcion=?,
        imagen=?,
        categoria=?

        WHERE id=?";


        $stmt=$this->db->prepare($sql);


        return $stmt->execute([
            $nombre,
            $descripcion,
            $imagen,
            $categoria,
            $id
        ]);

    }


}

?>