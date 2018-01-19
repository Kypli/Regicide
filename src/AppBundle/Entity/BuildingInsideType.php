<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * BuildingType
 *
 * @ORM\Table(name="building_inside_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingInsideTypeRepository")
 */
class BuildingInsideType
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\BuildingInside", mappedBy="buildingInsideType")
     */
    private $buildingInside;

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
     * @ORM\Column(name="limit_x", type="integer")
     */
    private $limitX;

    /**
     * @var int
     *
     * @ORM\Column(name="limit_y", type="integer")
     */
    private $limitY;

    /**
     * @var string
     *
     * @ORM\Column(name="floor", type="string")
     */
    private $floor;


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
     * Set limitX
     *
     * @param string $limitX
     *
     * @return BuildingInsideType
     */
    public function setLimitX($limitX)
    {
        $this->limitX = $limitX;

        return $this;
    }

    /**
     * Get $limitX
     *
     * @return string
     */
    public function getLimitX()
    {
        return $this->limitX;
    }

    /**
     * Set limitY
     *
     * @param string $limitY
     *
     * @return BuildingInsideType
     */
    public function setLimitY($limitY)
    {
        $this->limitY = $limitY;

        return $this;
    }

    /**
     * Get $limitY
     *
     * @return string
     */
    public function getLimitY()
    {
        return $this->limitY;
    }

    /**
     * Set floor
     *
     * @param string $floor
     *
     * @return BuildingInsideType
     */
    public function setFloor($floor)
    {
        $this->floor = $floor;

        return $this;
    }

    /**
     * Get floor
     *
     * @return string
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Add buildingInside
     *
     * @param \AppBundle\Entity\BuildingInside $buildingInside
     *
     * @return BuildingInsideType
     */
    public function addBuildingInside(\AppBundle\Entity\BuildingInside $buildingInside)
    {
        $this->buildingInside[] = $buildingInside;

        return $this;
    }

    /**
     * Remove buildingInside
     *
     * @param \AppBundle\Entity\BuildingInside $buildingInside
     */
    public function removeBuildingInside(\AppBundle\Entity\BuildingInside $buildingInside)
    {
        $this->buildingInside->removeElement($buildingInside);
    }

    /**
     * Get buildingInside
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getBuildingInside()
    {
        return $this->buildingInside;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->buildingInside = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
