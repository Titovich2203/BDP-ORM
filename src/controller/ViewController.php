<?php

use libs\system\Controller;
use src\model\CompteDb;
use src\model\ClientDb;
    class ViewController extends Controller
    {
        public function accueil()
        {
            $this->view->load('banque/header');
            $this->view->load('banque/accueil');
            $this->view->load('banque/footer');
        }

        public function listeCompte()
        {
            $this->view->load('banque/header');
            $comptesDb = new CompteDb();
            $comptes = $comptesDb->getAllCpWithCl();
            $this->view->load('compte/liste',$comptes);
            $this->view->load('banque/footer');
        }

        public function NewCompte()
        {
            $this->view->load('banque/header');
            $comptesDb = new CompteDb();
            //$clDb = new ClientDb();
            $numeros =  $comptesDb->genererNumero();
            $numeros = $numeros.'/'.$comptesDb->genererNumeroCl();
            //echo $numeros;
            $this->view->load('compte/add', $numeros);
            $this->view->load('banque/footer');
        }
        public function NewCompteS()
        {
            $this->view->load('banque/header');
            $comptesDb = new CompteDb();
            //$clDb = new ClientDb();
            $numeros =  $comptesDb->genererNumero();
            $numeros = $numeros.'/'.$comptesDb->genererNumeroCl();
            $numeros = $numeros.'/S';
            //echo $numeros;
            $this->view->load('compte/add', $numeros);
            $this->view->load('banque/footer');
        }
        public function NewCompteE()
        {
            $this->view->load('banque/header');
            $comptesDb = new CompteDb();
            //$clDb = new ClientDb();
            $numeros =  $comptesDb->genererNumero();
            $numeros = $numeros.'/'.$comptesDb->genererNumeroCl();
            $numeros = $numeros.'/E';
            //echo $numeros;
            $this->view->load('compte/add', $numeros);
            $this->view->load('banque/footer');
        }

        public function listeClient()
        {
            $this->view->load('banque/header');
            $clientDb = new ClientDb();
            $clients = $clientDb->getAllClients();
            $this->view->load('client/liste',$clients);
            $this->view->load('banque/footer');
        }
    }
?>