<?php

require_once "models/IndexModel.php";

class IndexController
{

    private $model;

    public function __construct()
    {
        $this->model = new IndexModel();
    }

    // Mostrar todos los cursos
    public function index()
    {
        $cursos = $this->model->getAll();

        require "views/layout/header.php";
        require "views/inicio.php";
        require "views/layout/footer.php";
    }

    // Mostrar formulario agregar
    public function create()
    {
        require "views/layout/header.php";
        require "views/agregar.php";
        require "views/layout/footer.php";
    }

    // Guardar curso
    public function store()
    {
        $this->model->create($_POST, $_FILES);

        header("Location: index.php?controller=index&action=index");
        exit();
    }

    // Mostrar formulario editar
    public function edit()
    {
        if (!isset($_GET['id'])) {
            header("Location: index.php?controller=index&action=index");
            exit();
        }

        $id = $_GET['id'];

        $curso = $this->model->getById($id);

        require "views/layout/header.php";
        require "views/editar.php";
        require "views/layout/footer.php";
    }

    // Actualizar curso
    public function update()
    {
        $this->model->update($_POST, $_FILES);

        header("Location: index.php?controller=index&action=index");
        exit();
    }

    // Eliminar curso
    public function delete()
    {
        if (!isset($_GET['id'])) {
            header("Location: index.php?controller=index&action=index");
            exit();
        }

        $id = $_GET['id'];

        $this->model->delete($id);

        header("Location: index.php?controller=index&action=index");
        exit();
    }

}
?>