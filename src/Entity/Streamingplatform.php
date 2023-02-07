<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;/**
* @ORM\Entity
* @ApiResource
*/
class StreamingPlatform
{
/**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
private $id; /**
     * @ORM\Column(type="string", length=255)
     */
private $name;/**
     * @ORM\ManyToMany(targetEntity="App\Entity\Film", mappedBy="streamingPlatforms")
     */
private $films; // Getters and setters
}