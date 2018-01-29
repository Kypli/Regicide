<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MapType
 *
 * @ORM\Table(name="map_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MapTypeRepository")
 */
class MapType
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Map", mappedBy="mapType")
     */
    private $map;

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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="speedConstruction", type="integer")
     */
    private $speedConstruction;

    /**
     * @var string
     *
     * @ORM\Column(name="visibility", type="string", length=255)
     */
    private $visibility;

    /**
     * @var float
     *
     * @ORM\Column(name="wear", type="float")
     */
    private $wear;

    /**
     * @var float
     *
     * @ORM\Column(name="foodWear", type="float")
     */
    private $foodWear;

    /**
     * @var float
     *
     * @ORM\Column(name="woodWear", type="float")
     */
    private $woodWear;

    /**
     * @var float
     *
     * @ORM\Column(name="oreWear", type="float")
     */
    private $oreWear;

    /**
     * @var float
     *
     * @ORM\Column(name="vegetableWear", type="float")
     */
    private $vegetableWear;

    /**
     * @var float
     *
     * @ORM\Column(name="animalWear", type="float")
     */
    private $animalWear;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->map = new \Doctrine\Common\Collections\ArrayCollection();
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     * @return MapType
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return MapType
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param int $level
     * @return MapType
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * @return int
     */
    public function getSpeedConstruction()
    {
        return $this->speedConstruction;
    }

    /**
     * @param int $speedConstruction
     * @return MapType
     */
    public function setSpeedConstruction($speedConstruction)
    {
        $this->speedConstruction = $speedConstruction;
        return $this;
    }

    /**
     * @return string
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * @param string $visibility
     * @return MapType
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;
        return $this;
    }

    /**
     * @return float
     */
    public function getWear()
    {
        return $this->wear;
    }

    /**
     * @param float $wear
     * @return MapType
     */
    public function setWear($wear)
    {
        $this->wear = $wear;
        return $this;
    }

    /**
     * @return float
     */
    public function getFoodWear()
    {
        return $this->foodWear;
    }

    /**
     * @param float $foodWear
     * @return MapType
     */
    public function setFoodWear($foodWear)
    {
        $this->foodWear = $foodWear;
        return $this;
    }

    /**
     * @return float
     */
    public function getWoodWear()
    {
        return $this->woodWear;
    }

    /**
     * @param float $woodWear
     * @return MapType
     */
    public function setWoodWear($woodWear)
    {
        $this->woodWear = $woodWear;
        return $this;
    }

    /**
     * @return float
     */
    public function getOreWear()
    {
        return $this->oreWear;
    }

    /**
     * @param float $oreWear
     * @return MapType
     */
    public function setOreWear($oreWear)
    {
        $this->oreWear = $oreWear;
        return $this;
    }

    /**
     * @return float
     */
    public function getVegetableWear()
    {
        return $this->vegetableWear;
    }

    /**
     * @param float $vegetableWear
     * @return MapType
     */
    public function setVegetableWear($vegetableWear)
    {
        $this->vegetableWear = $vegetableWear;
        return $this;
    }

    /**
     * @return float
     */
    public function getAnimalWear()
    {
        return $this->animalWear;
    }

    /**
     * @param float $animalWear
     * @return MapType
     */
    public function setAnimalWear($animalWear)
    {
        $this->animalWear = $animalWear;
        return $this;
    }


    /**
     * Add map
     *
     * @param \AppBundle\Entity\Map $map
     *
     * @return MapType
     */
    public function addMap(\AppBundle\Entity\Map $map)
    {
        $this->map[] = $map;

        return $this;
    }

    /**
     * Remove map
     *
     * @param \AppBundle\Entity\Map $map
     */
    public function removeMap(\AppBundle\Entity\Map $map)
    {
        $this->map->removeElement($map);
    }

    /**
     * Get map
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMap()
    {
        return $this->map;
    }
}
