<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Map
 *
 * @ORM\Table(name="map")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MapRepository")
 */
class Map
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personage", mappedBy="maps")
     */
    private $personage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Province", inversedBy="provinceMap")
     */
    private $province;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MapType", inversedBy="map")
     */
    private $mapType;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Building", mappedBy="location")
     */
    private $locationMap;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\BuildingInside", mappedBy="locationInside")
     */
    private $locationMapInside;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var array
     *
     * @ORM\Column(name="coordinate", type="array")
     */
    private $coordinate;

    /**
     * @var int
     *
     * @ORM\Column(name="presence", type="integer")
     */
    private $presence;

    /**
     * @var int
     *
     * @ORM\Column(name="level", type="integer")
     */
    private $level;

    /**
     * @var int
     *
     * @ORM\Column(name="quality", type="integer")
     */
    private $quality;

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
     * Set coordinate
     *
     * @param integer $coordinate
     *
     * @return Map
     */
    public function setCoordinate($coordinate)
    {
        $this->coordinate = $coordinate;

        return $this;
    }

    /**
     * Get coordinate
     *
     * @return array
     */
    public function getCoordinate()
    {
        return $this->coordinate;
    }

    /**
     * Set presence
     *
     * @param integer $presence
     *
     * @return Map
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
     * @return Map
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
     * Set level
     *
     * @param integer $level
     *
     * @return Map
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
     * Set quality
     *
     * @param integer $quality
     *
     * @return Map
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
     * Set owner
     *
     * @param string $owner
     *
     * @return Map
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
     * Set locationMap
     *
     * @param \AppBundle\Entity\Building $locationMap
     *
     * @return Map
     */
    public function setLocationMap(\AppBundle\Entity\Building $locationMap = null)
    {
        $this->locationMap = $locationMap;

        return $this;
    }

    /**
     * Get locationMap
     *
     * @return \AppBundle\Entity\Building
     */
    public function getLocationMap()
    {
        return $this->locationMap;
    }

    /**
     * Set locationMapInside
     *
     * @param \AppBundle\Entity\BuildingInside $locationMapInside
     *
     * @return Map
     */
    public function setLocationMapInside(\AppBundle\Entity\Building $locationMapInside = null)
    {
        $this->locationMapInside = $locationMapInside;

        return $this;
    }

    /**
     * Get locationMapInside
     *
     * @return \AppBundle\Entity\BuildingInside
     */
    public function getLocationMapInside()
    {
        return $this->locationMapInside;
    }

    /**
     * Set personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Map
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
     * Set province
     *
     * @param \AppBundle\Entity\Province $province
     *
     * @return Map
     */
    public function setProvince(\AppBundle\Entity\Province $province = null)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return \AppBundle\Entity\Province
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set mapType
     *
     * @param \AppBundle\Entity\MapType $mapType
     *
     * @return Map
     */
    public function setMapType(\AppBundle\Entity\MapType $mapType = null)
    {
        $this->mapType = $mapType;

        return $this;
    }

    /**
     * Get mapType
     *
     * @return \AppBundle\Entity\MapType
     */
    public function getMapType()
    {
        return $this->mapType;
    }
}
