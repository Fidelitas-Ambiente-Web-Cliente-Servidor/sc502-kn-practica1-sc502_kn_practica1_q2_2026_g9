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
        $sql = "SELECT * FROM cursos_destacados";

        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getByCategory($categoria)
    {
        $sql = "SELECT * FROM cursos_destacados
                WHERE categoria = ?";

        $stmt = $this->db->prepare($sql);
        $stmt->execute([$categoria]);

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}