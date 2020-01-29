<?php
namespace src\model;
use libs\system\Model;
    class ClientDb extends Model
    {
        public function getAllClients()
        {
            $sql = "SELECT c FROM client c";
            $comptes = $this->entityManager->createQuery($sql)->getResult();
            return $comptes;
        }
    }
    
?>