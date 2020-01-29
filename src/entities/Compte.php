<?php
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="compte")
 */
    class Compte
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
        private $dateCreation;
        /** 
         * @ORM\Column(type="decimal") 
         */
        private $solde;
        // ...
	    /**
	     * Many comptes have one client. This is the owning side.
	     * @ORM\ManyToOne(targetEntity="Client", inversedBy="comptes")
	     * @ORM\JoinColumn(name="client_id", referencedColumnName="id")
	     */
        private $client;
        /**
	     * @ORM\ManyToOne(targetEntity="User")
	     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
	     */
        private $user;

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

        public function setNumero($numero)
        {
            $this->numero = $numero;
        }

        public function getNumero()
        {
            return $this->numero;
        }
        public function setDateCreation($dateCreation)
        {
            $this->dateCreation = $dateCreation;
        }

        public function getDateCreation()
        {
            return $this->dateCreation;
        }
        public function setSolde($solde)
        {
            $this->solde = $solde;
        }

        public function getSolde()
        {
            return $this->solde;
        }

        public function setClient($client)
        {
            $this->client = $client;
        }

        public function getClient()
        {
            return $this->client;
        }
        public function setUser($user)
        {
            $this->user = $user;
        }

        public function getUser()
        {
            return $this->user;
        }
    }
?>