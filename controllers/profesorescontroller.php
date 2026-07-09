<?php

require_once "models/ProfesorModel.php";

class ProfesoresController
{
    private $model;

    public function __construct()
    {
        $this->model = new ProfesorModel();
    }

    public function index()
    {
        $profesores = $this->model->getAll();

        require "views/profesores.php";
    }

    public function show()
    {
        $id = $_GET['id'];

        $profesor = $this->model->getById($id);

        require "views/profesor_detalle.php";
    }
}