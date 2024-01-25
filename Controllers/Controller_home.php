<?php

class Controller_home extends Controller
{
    public function action_default()
    {
        $this->action_home();
    }

    public function action_home()
    {

        $this->render('home');
    }
// ---------------------------------------------------------------------------------------------------------
    // formulaire de connection
    public function action_formulaire_connexion()
    {
        $this->render('formulaire_connexion');
    }
 // ---------------------------------------------------------------------------------------------------------

    public function action_login()

    // Effectue l'authentification en utilisant le modèle

    {
        $m = Model::get_model();
        $data = ['identification' => $m->get_login()];
        $this->render("login", $data);
    }
// ---------------------------------------------------------------------------------------------------------

    public function action_formulaire_inscription()
    {
        $this->render('formulaire_inscription');
    }
 // ---------------------------------------------------------------------------------------------------------
    public function action_ins()

// Effectue l'authentification en utilisant le modèle

    {
        $m = Model::get_model();
        $data = ['identification' => $m->get_login()];
        $this->render("deconnexion");
    }
// ---------------------------------------------------------------------------------------------------------
}
