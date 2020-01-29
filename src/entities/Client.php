<?php
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @ORM\Entity
 * @ORM\Table(name="client")
 */
    class Client
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
        private $numero;
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
        private $adresse;
        /** 
         * @ORM\Column(type="string") 
         */
        private $tel;
        // ...
	    /**
	     * One client has many comptes. This is the inverse side.
	     * @ORM\OneToMany(targetEntity="Compte", mappedBy="client")
	     */
        private $comptes;
        
        public function __contruct()
        {
        	$this->comptes = new ArrayCollection();
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

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getNumero()
        {
            return $this->numero;
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

        public function setAdresse($adresse)
        {
            $this->adresse = $adresse;
        }

        public function getAdresse()
        {
            return $this->adresse;
        }
        public function setTel($tel)
        {
            $this->tel = $tel;
        }

        public function getTel()
        {
            return $this->tel;
        }

        public function setComptes($comptes)
        {
            $this->comptes = $comptes;
        }

        public function getComptes()
        {
            return $this->comptes;
        }
    }
?>