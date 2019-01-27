<?php

namespace AppBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert;

/**
 * Justicia
 *
 * @ORM\Table(name="justicia")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\JusticiaRepository")
 */
class Justicia implements UserInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255)
     * 
     * @Assert\NotBlank
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     * @Assert\Length(
     *      min = 3,
     *      max = 16,
     *      minMessage = "Tus apellidos debe de medir como minimo 3 caracteres",
     *      maxMessage = "Tus apellidos debe de medir como maximo 16 de caracteres"
     * )     
     */
    private $password;

    /**
     * @var string
     *
     * @ORM\Column(name="superpoder", type="string", length=255)
     * 
     * @Assert\NotBlank
     * 
     */
    private $superpoder;

    /**
       * @var array
       *
       * @ORM\Column(name="roles", type="json_array")
       */
      private $roles;


    private $plainPassword;

    public function __construct()
    {
        $this->roles = array('ROLE_USER');
    }
    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return Justicia
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Justicia
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set superpoder
     *
     * @param string $superpoder
     *
     * @return Justicia
     */
    public function setSuperpoder($superpoder)
    {
        $this->superpoder = $superpoder;

        return $this;
    }

    /**
     * Get superpoder
     *
     * @return string
     */
    public function getSuperpoder()
    {
        return $this->superpoder;
    }

    /**
   * Set roles
   *
   * @param array $roles
   *
   * @return Justicia
   */
  public function setRoles($roles)
  {
      $this->roles = $roles;

      return $this;
  }

  /**
   * Get roles
   *
   * @return array
   */
  public function getRoles()
  {
      return $this->roles;
  }


        public function getPlainPassword()
    {
        return $this->plainPassword;
    }

    public function setPlainPassword($password)
    {
        $this->plainPassword = $password;
    }


 public function getSalt()
{
  // The bcrypt and argon2i algorithms don't require a separate salt.
  // You *may* need a real salt if you choose a different encoder.
  return null;
}

    public function eraseCredentials()
    {
    }
}

