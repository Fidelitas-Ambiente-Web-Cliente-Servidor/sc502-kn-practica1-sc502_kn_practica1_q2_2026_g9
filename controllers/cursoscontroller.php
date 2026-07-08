<?php

require_once "models/CursoModel.php";


class CursosController
{

    private $model;



    public function __construct()
    {

        $this->model = new CursoModel();

    }



    public function index()
    {


        if(isset($_GET['categoria']))
        {

            $cursos =
            $this->model->getByCategory(
                $_GET['categoria']
            );

        }
        else
        {

            $cursos =
            $this->model->getAll();

        }



        require "views/layout/header.php";

        require "views/cursos.php";

        require "views/layout/footer.php";


    }


}

?>