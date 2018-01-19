<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RessourceType
 *
 * @ORM\Table(name="ressource_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RessourceTypeRepository")
 */
class RessourceType
{
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderCost", mappedBy="ressourceType")
     */
    private $orderCost;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Ressource", mappedBy="ressourceType")
     */
    private $ressource;

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
     * @ORM\Column(name="bonusLevel", type="integer")
     */
    private $bonusLevel;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusQuality", type="integer")
     */
    private $bonusQuality;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusObject", type="integer")
     */
    private $bonusObject;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusInvention", type="integer")
     */
    private $bonusInvention;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusWeather", type="integer")
     */
    private $bonusWeather;


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
     * @return RessourceType
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
     * Set bonusLevel
     *
     * @param integer $bonusLevel
     *
     * @return RessourceType
     */
    public function setBonusLevel($bonusLevel)
    {
        $this->bonusLevel = $bonusLevel;

        return $this;
    }

    /**
     * Get bonusLevel
     *
     * @return int
     */
    public function getBonusLevel()
    {
        return $this->bonusLevel;
    }

    /**
     * Set bonusQuality
     *
     * @param integer $bonusQuality
     *
     * @return RessourceType
     */
    public function setBonusQuality($bonusQuality)
    {
        $this->bonusQuality = $bonusQuality;

        return $this;
    }

    /**
     * Get bonusQuality
     *
     * @return int
     */
    public function getBonusQuality()
    {
        return $this->bonusQuality;
    }

    /**
     * Set bonusObject
     *
     * @param integer $bonusObject
     *
     * @return RessourceType
     */
    public function setBonusObject($bonusObject)
    {
        $this->bonusObject = $bonusObject;

        return $this;
    }

    /**
     * Get bonusObject
     *
     * @return int
     */
    public function getBonusObject()
    {
        return $this->bonusObject;
    }

    /**
     * Set bonusInvention
     *
     * @param integer $bonusInvention
     *
     * @return RessourceType
     */
    public function setBonusInvention($bonusInvention)
    {
        $this->bonusInvention = $bonusInvention;

        return $this;
    }

    /**
     * Get bonusInvention
     *
     * @return int
     */
    public function getBonusInvention()
    {
        return $this->bonusInvention;
    }

    /**
     * Set bonusWeather
     *
     * @param integer $bonusWeather
     *
     * @return RessourceType
     */
    public function setBonusWeather($bonusWeather)
    {
        $this->bonusWeather = $bonusWeather;

        return $this;
    }

    /**
     * Get bonusWeather
     *
     * @return int
     */
    public function getBonusWeather()
    {
        return $this->bonusWeather;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->resource = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add resource
     *
     * @param \AppBundle\Entity\Ressource $resource
     *
     * @return RessourceType
     */
    public function addResource(\AppBundle\Entity\Ressource $resource)
    {
        $this->ressource[] = $resource;

        return $this;
    }

    /**
     * Remove resource
     *
     * @param \AppBundle\Entity\Ressource $resource
     */
    public function removeResource(\AppBundle\Entity\Ressource $resource)
    {
        $this->ressource->removeElement($resource);
    }

    /**
     * Get resource
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getResource()
    {
        return $this->ressource;
    }

    /**
     * Add orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     *
     * @return RessourceType
     */
    public function addOrderCost(\AppBundle\Entity\OrderCost $orderCost)
    {
        $this->orderCost[] = $orderCost;

        return $this;
    }

    /**
     * Remove orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     */
    public function removeOrderCost(\AppBundle\Entity\OrderCost $orderCost)
    {
        $this->orderCost->removeElement($orderCost);
    }

    /**
     * Get orderCost
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderCost()
    {
        return $this->orderCost;
    }

    /**
     * Set orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     *
     * @return RessourceType
     */
    public function setOrderCost(\AppBundle\Entity\OrderCost $orderCost = null)
    {
        $this->orderCost = $orderCost;

        return $this;
    }

    /**
     * Add ressource
     *
     * @param \AppBundle\Entity\Ressource $ressource
     *
     * @return RessourceType
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
}
