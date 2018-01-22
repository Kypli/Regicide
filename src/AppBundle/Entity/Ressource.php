<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Ressource
 *
 * @ORM\Table(name="ressource")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RessourceRepository")
 */
class Ressource
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personage", inversedBy="ressource")
     */
    private $personage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Map", inversedBy="ressource")
     */
    private $map;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Building", inversedBy="ressource")
     */
    private $building;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\RessourceType", inversedBy="ressource")
     */
    private $ressourceType;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="quality", type="string")
     */
    private $quality;


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
     * Set quality
     *
     * @param string $quality
     *
     * @return Ressource
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return string
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return Ressource
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set ressourceType
     *
     * @param \AppBundle\Entity\RessourceType $ressourceType
     *
     * @return Ressource
     */
    public function setRessourceType(\AppBundle\Entity\RessourceType $ressourceType = null)
    {
        $this->ressourceType = $ressourceType;

        return $this;
    }

    /**
     * Get ressourceType
     *
     * @return \AppBundle\Entity\RessourceType
     */
    public function getRessourceType()
    {
        return $this->ressourceType;
    }

    /**
     * Set personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Ressource
     */
    public function setPersonage(\AppBundle\Entity\Personage $personage = null)
    {
        $this->personage = $personage;

        return $this;
    }

    /**
     * Get personage
     *
     * @return \AppBundle\Entity\Personage
     */
    public function getPersonage()
    {
        return $this->personage;
    }

    /**
     * Set map
     *
     * @param \AppBundle\Entity\Map $map
     *
     * @return Ressource
     */
    public function setMap(\AppBundle\Entity\Map $map = null)
    {
        $this->map = $map;

        return $this;
    }

    /**
     * Get map
     *
     * @return \AppBundle\Entity\Map
     */
    public function getMap()
    {
        return $this->map;
    }

    /**
     * Set building
     *
     * @param \AppBundle\Entity\Building $building
     *
     * @return Ressource
     */
    public function setBuilding(\AppBundle\Entity\Building $building = null)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return \AppBundle\Entity\Building
     */
    public function getBuilding()
    {
        return $this->building;
    }
}
