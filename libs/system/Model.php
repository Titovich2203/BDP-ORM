<?php

namespace libs\system;

class Model
{
    protected $entityManager;

    public function __construct()
    {
        require_once "bootstrapLib.php";
        //global $entityManager;
        if(isset($entityManager))
        $this->entityManager = $entityManager;
    }

    public function getEm()
    {
        return $this->entityManager;
    }
    
}
