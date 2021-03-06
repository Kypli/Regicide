<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingType
 *
 * @ORM\Table(name="building_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingTypeRepository")
 */
class BuildingType
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Building", mappedBy="buildingType")
     */
    private $building;

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="maxHp", type="integer")
     */
    private $maxHp;

    /**
     * @var int
     *
     * @ORM\Column(name="wear", type="integer")
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
     * @var int
     *
     * @ORM\Column(name="maxHeight", type="integer")
     */
    private $maxHeight;

    /**
     * @var int
     *
     * @ORM\Column(name="maxWeight", type="integer")
     */
    private $maxWeight;

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
     * @var float
     *
     * @ORM\Column(name="speedConstructionLevel", type="float")
     */
    private $speedConstructionLevel;

    /**
     * @var bool
     *
     * @ORM\Column(name="visibility", type="boolean")
     */
    private $visibility;

    /**
     * @var string
     *
     * @ORM\Column(name="field", type="string", length=255)
     */
    private $field;


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
     * Set name
     *
     * @param string $name
     *
     * @return BuildingType
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set maxHp
     *
     * @param integer $maxHp
     *
     * @return BuildingType
     */
    public function setMaxHp($maxHp)
    {
        $this->maxHp = $maxHp;

        return $this;
    }

    /**
     * Get maxHp
     *
     * @return int
     */
    public function getMaxHp()
    {
        return $this->maxHp;
    }

    /**
     * Set wear
     *
     * @param integer $wear
     *
     * @return BuildingType
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
     * Set foodWear
     *
     * @param float $foodWear
     *
     * @return BuildingType
     */
    public function setFoodWear($foodWear)
    {
        $this->foodWear = $foodWear;

        return $this;
    }

    /**
     * Get foodWear
     *
     * @return float
     */
    public function getFoodWear()
    {
        return $this->foodWear;
    }

    /**
     * Set woodWear
     *
     * @param float $woodWear
     *
     * @return BuildingType
     */
    public function setWoodWear($woodWear)
    {
        $this->woodWear = $woodWear;

        return $this;
    }

    /**
     * Get woodWear
     *
     * @return float
     */
    public function getWoodWear()
    {
        return $this->woodWear;
    }

    /**
     * Set oreWear
     *
     * @param float $oreWear
     *
     * @return BuildingType
     */
    public function setOreWear($oreWear)
    {
        $this->oreWear = $oreWear;

        return $this;
    }

    /**
     * Get oreWear
     *
     * @return float
     */
    public function getOreWear()
    {
        return $this->oreWear;
    }

    /**
     * Set vegetableWear
     *
     * @param float $vegetableWear
     *
     * @return BuildingType
     */
    public function setVegetableWear($vegetableWear)
    {
        $this->vegetableWear = $vegetableWear;

        return $this;
    }

    /**
     * Get vegetableWear
     *
     * @return float
     */
    public function getVegetableWear()
    {
        return $this->vegetableWear;
    }

    /**
     * Set animalWear
     *
     * @param float $animalWear
     *
     * @return BuildingType
     */
    public function setAnimalWear($animalWear)
    {
        $this->animalWear = $animalWear;

        return $this;
    }

    /**
     * Get animalWear
     *
     * @return float
     */
    public function getAnimalWear()
    {
        return $this->animalWear;
    }

    /**
     * Set maxHeight
     *
     * @param integer $maxHeight
     *
     * @return BuildingType
     */
    public function setMaxHeight($maxHeight)
    {
        $this->maxHeight = $maxHeight;

        return $this;
    }

    /**
     * Get maxHeight
     *
     * @return int
     */
    public function getMaxHeight()
    {
        return $this->maxHeight;
    }

    /**
     * Set maxWeight
     *
     * @param integer $maxWeight
     *
     * @return BuildingType
     */
    public function setMaxWeight($maxWeight)
    {
        $this->maxWeight = $maxWeight;

        return $this;
    }

    /**
     * Get maxWeight
     *
     * @return int
     */
    public function getMaxWeight()
    {
        return $this->maxWeight;
    }

    /**
     * Set level
     *
     * @param integer $level
     *
     * @return BuildingType
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set speedConstruction
     *
     * @param integer $speedConstruction
     *
     * @return BuildingType
     */
    public function setSpeedConstruction($speedConstruction)
    {
        $this->speedConstruction = $speedConstruction;

        return $this;
    }

    /**
     * Get speedConstruction
     *
     * @return int
     */
    public function getSpeedConstruction()
    {
        return $this->speedConstruction;
    }

    /**
     * Set speedConstructionLevel
     *
     * @param float $speedConstructionLevel
     *
     * @return BuildingType
     */
    public function setSpeedConstructionLevel($speedConstructionLevel)
    {
        $this->speedConstructionLevel = $speedConstructionLevel;

        return $this;
    }

    /**
     * Get speedConstructionLevel
     *
     * @return float
     */
    public function getSpeedConstructionLevel()
    {
        return $this->speedConstructionLevel;
    }

    /**
     * Set visibility
     *
     * @param boolean $visibility
     *
     * @return BuildingType
     */
    public function setVisibility($visibility)
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * Get visibility
     *
     * @return bool
     */
    public function getVisibility()
    {
        return $this->visibility;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return BuildingType
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set buildingType
     *
     * @param \AppBundle\Entity\Building $buildingType
     *
     * @return BuildingType
     */
    public function setBuildingType(\AppBundle\Entity\Building $buildingType = null)
    {
        $this->buildingType = $buildingType;

        return $this;
    }

    /**
     * Get buildingType
     *
     * @return \AppBundle\Entity\Building
     */
    public function getBuildingType()
    {
        return $this->buildingType;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->buildingType = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add buildingType
     *
     * @param \AppBundle\Entity\Building $buildingType
     *
     * @return BuildingType
     */
    public function addBuildingType(\AppBundle\Entity\Building $buildingType)
    {
        $this->buildingType[] = $buildingType;

        return $this;
    }

    /**
     * Remove buildingType
     *
     * @param \AppBundle\Entity\Building $buildingType
     */
    public function removeBuildingType(\AppBundle\Entity\Building $buildingType)
    {
        $this->buildingType->removeElement($buildingType);
    }

    /**
     * Add building
     *
     * @param \AppBundle\Entity\Building $building
     *
     * @return BuildingType
     */
    public function addBuilding(\AppBundle\Entity\Building $building)
    {
        $this->building[] = $building;

        return $this;
    }

    /**
     * Remove building
     *
     * @param \AppBundle\Entity\Building $building
     */
    public function removeBuilding(\AppBundle\Entity\Building $building)
    {
        $this->building->removeElement($building);
    }

    /**
     * Get building
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuilding()
    {
        return $this->building;
    }
}
