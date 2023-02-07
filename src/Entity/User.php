<?php 

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;/**
* @ORM\Entity
* @ApiResource
*/
class User implements UserInterface
{
 /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
private $id; /**
     * @ORM\Column(type="string", length=255)
     */
private $username; /**
     * @ORM\Column(type="string", length=255)
     */
private $password; /**
     * @ORM\Column(type="array")
     */
 private $roles; // UserInterface methods and getters/setters
}