<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
    class User
    {
        /** 
         * @ORM\Id
         * @ORM\Column(type="integer")
         * @ORM\GeneratedValue
         */
        private $id;
        /** 
         * @ORM\Column(type="string") 
         */
        private $nom;
        /** 
         * @ORM\Column(type="string") 
         */
        private $prenom;
        /** 
         * @ORM\Column(type="string") 
         */
        private $login;
        /** 
         * @ORM\Column(type="string") 
         */
        private $password;
        /** 
         * @ORM\Column(type="string") 
         */
        private $profil;
        /** 
         * @ORM\Column(type="integer") 
         */
        private $alreadyLogin;

        public function __contruct()
        {
            # code...
        }
        
        public function setId($id)
        {
            $this->id = $id;
        }

        public function getId()
        {
            return $this->id;
        }

        public function setNom($nom)
        {
            $this->nom = $nom;
        }

        public function getNom()
        {
            return $this->nom;
        }
        public function setPrenom($prenom)
        {
            $this->prenom = $prenom;
        }

        public function getPrenom()
        {
            return $this->prenom;
        }
        public function setLogin($login)
        {
            $this->login = $login;
        }

        public function getLogin()
        {
            return $this->login;
        }

        public function setPassword($password)
        {
            $this->password = $password;
        }

        public function getPassword()
        {
            return $this->password;
        }
        public function setProfil($profil)
        {
            $this->profil = $profil;
        }

        public function getProfil()
        {
            return $this->profil;
        }

        public function setAlreadyLogin($alreadyLogin)
        {
            $this->alreadyLogin = $alreadyLogin;
        }

        public function getAlreadyLogin()
        {
            return $this->alreadyLogin;
        }
    }
?>