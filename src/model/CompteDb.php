<?php
namespace src\model;
    use libs\system\Model;
    class CompteDb extends Model
    {
        public function getAllCpWithCl()
        {
            $sql = "SELECT c FROM compte c";
            $comptes = $this->entityManager->createQuery($sql)->getResult();
            return $comptes;
        }


        function genererNumero(){
            $sql = "SELECT max(c.id) FROM compte c";
            $array = $this->entityManager->createQuery($sql)->getResult();
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
            return $numero;
        }

        function genererNumeroCl(){
            $sql = "SELECT max(c.id) FROM client c";
            $array = $this->entityManager->createQuery($sql)->getResult();
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
            $numero = "BDP_".date('d').date('m').date('Y')."_CL".$id;
            return $numero;
        }
    }
?>