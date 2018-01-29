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
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Province", inversedBy="map")
     */
    private $province;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\MapType", inversedBy="map")
     */
    private $mapType;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ressource", mappedBy="map")
     */
    private $ressource;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Object", mappedBy="map")
     */
    private $object;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personage", mappedBy="map")
     */
    private $personages;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Building", mappedBy="map")
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
     * @var int
     *
     * @ORM\Column(name="coordinateX", type="integer")
     */
    private $coordinateX;

    /**
     * @var int
     *
     * @ORM\Column(name="coordinateY", type="integer")
     */
    private $coordinateY;

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
     * @var string
     */
    private $visible;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personages = new \Doctrine\Common\Collections\ArrayCollection();
        $this->ressource = new \Doctrine\Common\Collections\ArrayCollection();
        $this->object = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set coordinateX
     *
     * @param integer $coordinateX
     *
     * @return Map
     */
    public function setCoordinateX($coordinateX)
    {
        $this->coordinateX = $coordinateX;

        return $this;
    }

    /**
     * Get coordinateX
     *
     * @return integer
     */
    public function getCoordinateX()
    {
        return $this->coordinateX;
    }

    /**
     * Set coordinateY
     *
     * @param integer $coordinateY
     *
     * @return Map
     */
    public function setCoordinateY($coordinateY)
    {
        $this->coordinateY = $coordinateY;

        return $this;
    }

    /**
     * Get coordinateX
     *
     * @return integer
     */
    public function getCoordinateY()
    {
        return $this->coordinateY;
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
     * Set visible
     *
     * @param string $visible
     *
     * @return Map
     */
    public function setVisible($visible = null)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return string
     */
    public function getVisible()
    {
        return $this->visible;
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
     * Add ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     *
     * @return Map
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
     * Get object
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Add object
     *
     * @param \AppBundle\Entity\Object $object
     *
     * @return Map
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
     * Get personages
     *
     * @return \AppBundle\Entity\Personage
     */
    public function getPersonages()
    {
        return $this->personages;
    }

    /**
     * Add personages
     *
     * @param \AppBundle\Entity\Personage $personages
     *
     * @return Map
     */
    public function addPersonages(\AppBundle\Entity\Personage $personages)
    {
        $this->personages[] = $personages;

        return $this;
    }

    /**
     * Remove personage
     *
     * @param \AppBundle\Entity\Personage $personage
     */
    public function removePersonages(\AppBundle\Entity\Personage $personage)
    {
        $this->personages->removeElement($personage);
    }

    /**
     * Set building
     *
     * @param \AppBundle\Entity\Building $building
     *
     * @return Map
     */
    public function setLocationMap(\AppBundle\Entity\Building $building = null)
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

    /**
     * Add personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Map
     */
    public function addPersonage(\AppBundle\Entity\Personage $personage)
    {
        $this->personages[] = $personage;

        return $this;
    }

    /**
     * Remove personage
     *
     * @param \AppBundle\Entity\Personage $personage
     */
    public function removePersonage(\AppBundle\Entity\Personage $personage)
    {
        $this->personages->removeElement($personage);
    }

    /**
     * Set building
     *
     * @param \AppBundle\Entity\Building $building
     *
     * @return Map
     */
    public function setBuilding(\AppBundle\Entity\Building $building = null)
    {
        $this->building = $building;

        return $this;
    }
}
