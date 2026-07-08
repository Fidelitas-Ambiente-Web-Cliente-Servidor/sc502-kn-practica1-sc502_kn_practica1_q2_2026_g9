<?php

require_once "config/database.php";


class ProfesorModel
{

    private $db;


    public function __construct()
    {

        $this->db = Database::connect();

    }




    public function getAll()
    {

        $sql = "SELECT * FROM profesores";


        $stmt = $this->db->prepare($sql);


        $stmt->execute();


        return $stmt->fetchAll();

    }




    public function getById($id)
    {

        $sql = "SELECT * FROM profesores 
                WHERE id=?";


        $stmt = $this->db->prepare($sql);


        $stmt->execute([$id]);


        return $stmt->fetch();

    }


}

?>