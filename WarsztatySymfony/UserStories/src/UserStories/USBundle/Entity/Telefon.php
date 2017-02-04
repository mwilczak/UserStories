<?php

namespace UserStories\USBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefon
 *
 * @ORM\Table(name="telefon")
 * @ORM\Entity(repositoryClass="UserStories\USBundle\Repository\TelefonRepository")
 */
class Telefon
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
     * @ORM\Column(name="telefon", type="string", length=255, nullable=true)
     */
    private $telefon;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set telefon
     *
     * @param string $telefon
     * @return Telefon
     */
    public function setTelefon($telefon)
    {
        $this->telefon = $telefon;

        return $this;
    }

    /**
     * Get telefon
     *
     * @return string 
     */
    public function getTelefon()
    {
        return $this->telefon;
    }
}
