<?php
session_start();
use libs\system\Controller;
use src\model\UserDb;
    class UserController extends Controller
    {
        public function connexion()
        {
            return $this->view->load("user/connexion");
        }
        public function identification()
        {
            extract ($_POST);
            $userDB = new UserDb();
            $user = $userDB->verifierConnexion($_POST['login'],$_POST['mdp']);
            if($user == null)
            {
                return $this->view->load("user/connexion",false);
               //header('location:/mesprojets/BDP-ORM/');
            }
            else
            {
                $_SESSION['profil'] = $user->getProfil();
                $_SESSION['nomComplet'] = $user->getNom().' '.$user->getPrenom();
                $_SESSION['idUser'] = $user->getId();
               // $_SESSION['userObject'] = $user;
                header('location:/mesprojets/BDP-ORM/View/accueil');
                //return $this->view->load("banque/accueil");
            }
        }
        public function deconnexion()
        {
            session_unset();
            $_SESSION = array();
            header('location:/mesprojets/BDP-ORM/');
        }
    }
    //echo '1';
?>