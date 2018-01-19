<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Building
 *
 * @ORM\Table(name="building_inside")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\BuildingInsideRepository")
 */
class BuildingInside
{
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Map", inversedBy="locationMapInside")
     */
    private $locationInside;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\BuildingInsideType", inversedBy="buildingInside")
     */
    private $buildingInsideType;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

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
     * Set buildingInsideType
     *
     * @param \AppBundle\Entity\BuildingInsideType $buildingInsideType
     *
     * @return BuildingInside
     */
    public function setBuildingInsideType(\AppBundle\Entity\BuildingInsideType $buildingInsideType = null)
    {
        $this->buildingInsideType = $buildingInsideType;

        return $this;
    }

    /**
     * Get buildingInsideType
     *
     * @return \AppBundle\Entity\BuildingInsideType
     */
    public function getBuildingInsideType()
    {
        return $this->buildingInsideType;
    }

    /**
     * Set locationInside
     *
     * @param \AppBundle\Entity\Map $locationInside
     *
     * @return BuildingInside
     */
    public function setLocationInside(\AppBundle\Entity\Map $locationInside = null)
    {
        $this->locationInside = $locationInside;

        return $this;
    }

    /**
     * Get locationInside
     *
     * @return \AppBundle\Entity\Map
     */
    public function getLocationInside()
    {
        return $this->locationInside;
    }

}
