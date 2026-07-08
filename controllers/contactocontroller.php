<?php

require_once "models/ContactoModel.php";


class ContactoController
{

    private $model;



    public function __construct()
    {

        $this->model = new ContactoModel();

    }



    public function index()
    {


        require "views/layout/header.php";

        require "views/contacto.php";

        require "views/layout/footer.php";


    }



    public function store()
    {


        $this->model->create($_POST);



        header(
            "Location:index.php?controller=contacto&action=index"
        );


    }


}

?>