<?php
session_start();
require_once "../../bootstrapLib.php";
    if(isset($_GET['getNumC'])){
        $sql = "SELECT max(c.id) FROM compte c";
            $array = $entityManager->createQuery($sql)->getResult();
            foreach ($array as $key => $value) {
                foreach ($value as $key => $idd) {
                    $id = $idd;
                }
            }
            //var_dump($array);
            if($id == NULL || $id < 1){
                $id = 1;
            }else{
                $id++;
            }
            $numero = "BDP_".date('d').date('m').date('Y')."_C".$id;
        echo $numero;
    }
    
    if(isset($_GET['del'])){
        $cpt = 0;

        $compte = $entityManager->find('Compte', $_GET['del']);
        $client = $entityManager->find('Client', $compte->getClient()->getId());

        $sql = "SELECT c FROM compte c";
        $comptes = $entityManager->createQuery($sql)->getResult();
        foreach ($comptes as $c) {
            if($c->getClient()->getId() == $client->getId())
            {
                $cpt++;
            }
        }

        if($cpt == 1)
        {
            echo '0';
        }
        else
        {
            $entityManager->remove($compte);
            $entityManager->flush();
            echo '1';
        }

    }

    /*
    if(isset($_GET['numero'])){
        $res = findCompteByNumero($_GET['numero']);
        if($res != null)
        {
            echo '1';
        }
        else{
            echo '0';
        }
    }
    */
    // if(isset($_GET['numero'])){
    //     extract($_GET);
	// 	$dateCreation = gmdate("d-m-Y");
	// 	$idGestCompte = $_SESSION['idUser'];
    //     $idCompte = ajoutCompte($numero, $dateCreation, $sold, $idCl, $idGestCompte);
    //     echo $idCompte;
    // }