<?php
session_start();
use libs\system\Controller;
use libs\system\Model;
    class CompteController extends Controller
    {
        public function addCompte()
        {
            $model = new Model();
            $entityManager = $model->getEm();

            var_dump($_POST);
            extract($_POST);
            $client = new Client();
            $client->setNumero($numeroCli);
            $client->setNom($nom);
            $client->setPrenom($prenom);
            $client->setAdresse($adresse);
            $client->setTel($ind.$tel);

            $entityManager->persist($client);
            $entityManager->flush();
            
            if($client->getId() > 0)
            {
                $compte = new Compte();
                $dateCreation = gmdate("d-m-Y");
                $compte->setNumero($numero);
                $compte->setSolde($solde);
                $compte->setDateCreation($dateCreation);
                $compte->setClient($client);
                $entityManager->find('User', $_SESSION['idUser']);
                $compte->setUser($user);

                
                $entityManager->persist($compte);
                $entityManager->flush();
            
                if($compte->getId() > 0)
                {
                    header('location:/mesprojets/BDP-ORM/View/newCompteS');
                }
                else
                {
                    header('location:/mesprojets/BDP-ORM/View/newCompteE');
                }
            }
            else
            {
                header('location:/mesprojets/BDP-ORM/View/newCompteE');
            }
        }
        public function newCompteNC()
        {
            $model = new Model();
            $entityManager = $model->getEm();

            
            extract($_POST);
            $compte = new Compte();
            $dateCreation = gmdate("d-m-Y");
            $compte->setNumero($numero);
            $compte->setSolde($solde);
            $compte->setDateCreation($dateCreation);
            $client = $entityManager->find('Client', $idCli);
            $compte->setClient($client);
            $entityManager->find('User', $_SESSION['idUser']);
            $compte->setUser($user);
            $entityManager->persist($compte);
                $entityManager->flush();
            
                if($compte->getId() > 0)
                {
                    header('location:/mesprojets/BDP-ORM/View/newCompteS');
                }
                else
                {
                    header('location:/mesprojets/BDP-ORM/View/newCompteE');
                }
        }
    }
    //echo '1';
?>