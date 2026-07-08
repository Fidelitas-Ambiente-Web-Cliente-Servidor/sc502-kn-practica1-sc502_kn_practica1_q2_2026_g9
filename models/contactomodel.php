<?php

require_once "config/database.php";


class ContactoModel
{

    private $db;


    public function __construct()
    {

        $this->db = Database::connect();

    }




    public function create($data)
    {

        $sql = "INSERT INTO contacto

        (nombre, correo, mensaje)

        VALUES (?, ?, ?)";


        $stmt = $this->db->prepare($sql);



        return $stmt->execute([

            $data['nombre'],
            $data['correo'],
            $data['mensaje']

        ]);

    }


}

?>