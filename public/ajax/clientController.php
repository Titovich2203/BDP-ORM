<?php
    require_once "../../bootstrapLib.php";
    if(isset($_GET['del'])){
        $client = $entityManager->find('Client',$_GET['del']);

        $sql = "SELECT c FROM compte c";
        $comptes = $entityManager->createQuery($sql)->getResult();

        foreach ($comptes as $compte) {
            if($compte->getClient()->getId() == $client->getId())
            {
                $entityManager->remove($compte);
                $entityManager->flush();
            }
        }
        $entityManager->remove($client);
        $entityManager->flush();
        echo 1;
        /*
        if(deleteComptesByIdClient($_GET['del']) > 0){
            $res = deleteClient($_GET['del']);
            echo $res;
        }
        */
    }
    /*
    if(isset($_GET['numero'])){
        $res = getClientByNum($_GET['numero']);
        if($res != null)
        {
            echo '1';
        }
        else{
            echo '0';
        }
    }
    */