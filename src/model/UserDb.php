<?php
namespace src\model;
    use libs\system\Model;
    class UserDb extends Model
    {
        public function verifierConnexion($login, $mdp)
        {
            $sql = "SELECT a FROM user a";
            $users = $this->entityManager->createQuery($sql)->getResult();
            $ok = false;
            foreach ($users as $user) {
                if($user->getLogin() == $login && password_verify($mdp, $user->getPassword()))
                {
                    return $user;
                    //return 'OK';
                    $ok = true;
                }
            }
            if($ok == false)
            {
                return NULL;
            }
        }
    }
    
?>