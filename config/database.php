<?php

class Database
{

    private static $instance = null;


    // Datos de conexión Docker MySQL
    private $host = "db";
    private $database = "appdb";
    private $username = "appuser";
    private $password = "apppass";



    private function __construct()
    {

    }



    public static function connect()
    {

        if(self::$instance == null)
        {

            try
            {

                self::$instance = new PDO(

                    "mysql:host=db;dbname=appdb;charset=utf8",

                    "appuser",

                    "apppass"

                );


                self::$instance->setAttribute(

                    PDO::ATTR_ERRMODE,

                    PDO::ERRMODE_EXCEPTION

                );


                self::$instance->setAttribute(

                    PDO::ATTR_DEFAULT_FETCH_MODE,

                    PDO::FETCH_ASSOC

                );


            }
            catch(PDOException $e)
            {

                die("Error de conexión: " . $e->getMessage());

            }

        }


        return self::$instance;

    }


}

?>