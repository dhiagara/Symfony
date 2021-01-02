<?php

namespace App\Entity;
use Doctrine\ORM\Mapping as ORM;


class Favoris 
{
      /**
     * @ORM\ManyToOne(targetEntity="App\Entity\User", inversedBy="Favoris")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;
}


