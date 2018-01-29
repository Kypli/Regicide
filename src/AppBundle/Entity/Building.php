<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingRepository")
 */
class Building
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ressource", mappedBy="building")
     */
    private $ressource;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Object", mappedBy="building")
     */
    private $object;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\BuildingInside", mappedBy="buildingInside")
     */
    private $building;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Map", inversedBy="building")
     */
    private $map;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BuildingType", inversedBy="building")
     */
    private $buildingType;

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
     * @ORM\Column(name="presence", type="integer")
     */
    private $presence;

    /**
     * @var int
     *
     * @ORM\Column(name="quality", type="integer")
     */
    private $quality;

    /**
     * @var int
     *
     * @ORM\Column(name="construction", type="integer")
     */
    private $construction;

    /**
     * @var int
     *
     * @ORM\Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var int
     *
     * @ORM\Column(name="heightMax", type="integer")
     */
    private $heightMax;

    /**
     * @var int
     *
     * @ORM\Column(name="WeightMax", type="integer")
     */
    private $weightMax;

    /**
     * @var string
     *
     * @ORM\Column(name="owner", type="string", length=255)
     */
    private $owner;


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
     * Set location
     *
     * @param string $location
     *
     * @return Building
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set presence
     *
     * @param integer $presence
     *
     * @return Building
     */
    public function setPresence($presence)
    {
        $this->presence = $presence;

        return $this;
    }

    /**
     * Get presence
     *
     * @return int
     */
    public function getPresence()
    {
        return $this->presence;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Building
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set quality
     *
     * @param integer $quality
     *
     * @return Building
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
     * Set construction
     *
     * @param integer $construction
     *
     * @return Building
     */
    public function setConstruction($construction)
    {
        $this->construction = $construction;

        return $this;
    }

    /**
     * Get construction
     *
     * @return int
     */
    public function getConstruction()
    {
        return $this->construction;
    }

    /**
     * Set hp
     *
     * @param integer $hp
     *
     * @return Building
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set heightMax
     *
     * @param integer $heightMax
     *
     * @return Building
     */
    public function setHeightMax($heightMax)
    {
        $this->heightMax = $heightMax;

        return $this;
    }

    /**
     * Get heightMax
     *
     * @return int
     */
    public function getHeightMax()
    {
        return $this->heightMax;
    }

    /**
     * Set weightMax
     *
     * @param integer $weightMax
     *
     * @return Building
     */
    public function setWeightMax($weightMax)
    {
        $this->weightMax = $weightMax;

        return $this;
    }

    /**
     * Get weightMax
     *
     * @return int
     */
    public function getWeightMax()
    {
        return $this->weightMax;
    }

    /**
     * Set owner
     *
     * @param string $owner
     *
     * @return Building
     */
    public function setOwner($owner)
    {
        $this->owner = $owner;

        return $this;
    }

    /**
     * Get owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->owner;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->type = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add type
     *
     * @param \AppBundle\Entity\Map $type
     *
     * @return Building
     */
    public function addType(\AppBundle\Entity\Map $type)
    {
        $this->type[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \AppBundle\Entity\Map $type
     */
    public function removeType(\AppBundle\Entity\Map $type)
    {
        $this->type->removeElement($type);
    }

    /**
     * Set buildingType
     *
     * @param \AppBundle\Entity\BuildingType $buildingType
     *
     * @return Building
     */
    public function setBuildingType(\AppBundle\Entity\BuildingType $buildingType = null)
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    /**
     * Get buildingType
     *
     * @return \AppBundle\Entity\BuildingType
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }

    /**
     * Add ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     *
     * @return Building
     */
    public function addRessource(\AppBundle\Entity\Ressource $ressource)
    {
        $this->ressource[] = $ressource;

        return $this;
    }

    /**
     * Remove ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     */
    public function removeRessource(\AppBundle\Entity\Ressource $ressource)
    {
        $this->ressource->removeElement($ressource);
    }

    /**
     * Get ressource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRessource()
    {
        return $this->ressource;
    }

    /**
     * Add object
     *
     * @param \AppBundle\Entity\Object $object
     *
     * @return Building
     */
    public function addObject(\AppBundle\Entity\Object $object)
    {
        $this->object[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \AppBundle\Entity\Object $object
     */
    public function removeObject(\AppBundle\Entity\Object $object)
    {
        $this->object->removeElement($object);
    }

    /**
     * Get object
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Set building
     *
     * @param \AppBundle\Entity\BuildingInside $building
     *
     * @return Building
     */
    public function setBuilding(\AppBundle\Entity\BuildingInside $building = null)
    {
        $this->building = $building;

        return $this;
    }

    /**
     * Get building
     *
     * @return \AppBundle\Entity\BuildingInside
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Set map
     *
     * @param \AppBundle\Entity\Map $map
     *
     * @return Building
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
}
