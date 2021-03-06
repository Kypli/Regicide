<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Object
 *
 * @ORM\Table(name="object")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObjectRepository")
 */
class Object
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personage", inversedBy="object")
     */
    private $personage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Map", inversedBy="object")
     */
    private $map;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Building", inversedBy="object")
     */
    private $building;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ObjectType", inversedBy="object")
     */
    private $objectType;

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
     * @var int
     *
     * @ORM\Column(name="quality", type="integer")
     */
    private $quality;

    /**
     * @var int
     *
     * @ORM\Column(name="wear", type="integer")
     */
    private $wear;

    /**
     * @var int
     *
     * @ORM\Column(name="height", type="integer")
     */
    private $height;

    /**
     * @var int
     *
     * @ORM\Column(name="weight", type="integer")
     */
    private $weight;


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
     * Set number
     *
     * @param integer $number
     *
     * @return Object
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
     * Set quality
     *
     * @param integer $quality
     *
     * @return Object
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * Get quality
     *
     * @return int
     */
    public function getQuality()
    {
        return $this->quality;
    }

    /**
     * Set wear
     *
     * @param integer $wear
     *
     * @return Object
     */
    public function setWear($wear)
    {
        $this->wear = $wear;

        return $this;
    }

    /**
     * Get wear
     *
     * @return int
     */
    public function getWear()
    {
        return $this->wear;
    }

    /**
     * Set height
     *
     * @param integer $height
     *
     * @return Object
     */
    public function setHeight($height)
    {
        $this->height = $height;

        return $this;
    }

    /**
     * Get height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set weight
     *
     * @param integer $weight
     *
     * @return Object
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;

        return $this;
    }

    /**
     * Get weight
     *
     * @return int
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set objectType
     *
     * @param \AppBundle\Entity\ObjectType $objectType
     *
     * @return Object
     */
    public function setObjectType(\AppBundle\Entity\ObjectType $objectType = null)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return \AppBundle\Entity\ObjectType
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Set personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Object
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
     * @return Object
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
     * @return Object
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
