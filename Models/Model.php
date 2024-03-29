<?php

class Model
{
    private $bd;

    private static $instance = null;

    private function __construct()
    {
        try {
            $this->bd = new PDO('mysql:host=localhost;dbname="?"', 'root', '');
            $this->bd->query("SET NAMES 'utf8'");
            $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die('<p>Echec connexion. Erreur [' . $e->getCode() . '] : ' . $e->getMessage() . '</p>');
        }
    }

    public static function get_model()
    {

        if (is_null(self::$instance)) {
            self::$instance = new Model();
        }
        return self::$instance;
    }

// =============================================== ADMIN ================================================================





// =============================================== USERS ================================================================
    





}
