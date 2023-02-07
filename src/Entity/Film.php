<?php 

namespace App\Entity; 

use Doctrine\ORM\Mapping as ORM;/**
* @ORM\Entity
* @ApiResource
*/
class Film
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
     * @ORM\Column(type="date")
     */
 private $releaseDate; /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Category")
     */
 private $categories;/**
     * @ORM\ManyToMany(targetEntity="App\Entity\StreamingPlatform")
     */
private $streamingPlatforms;// Getters and setters
}

