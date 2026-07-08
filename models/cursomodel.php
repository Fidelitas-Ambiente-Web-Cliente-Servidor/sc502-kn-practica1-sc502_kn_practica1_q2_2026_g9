<?php

require_once "config/database.php";


class CursoModel
{

    private $db;


    public function __construct()
    {

        $this->db = Database::connect();

    }



    public function getAll()
    {

        $sql = "SELECT * FROM cursos";


        $stmt = $this->db->prepare($sql);


        $stmt->execute();


        return $stmt->fetchAll();

    }




    public function getByCategory($categoria)
    {

        $sql = "SELECT * FROM cursos 
                WHERE categoria = ?";


        $stmt = $this->db->prepare($sql);


        $stmt->execute([$categoria]);


        return $stmt->fetchAll();

    }


}

?>