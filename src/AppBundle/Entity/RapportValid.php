<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportValid
 *
 * @ORM\Table(name="rapport_valid")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RapportValidRepository")
 */
class RapportValid
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Rapport", mappedBy="rapportValid")
     */
    private $rapport;

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
     * @var string
     *
     * @ORM\Column(name="orderType", type="string", length=255)
     */
    private $orderType;

    /**
     * @var int
     *
     * @ORM\Column(name="orderMin", type="integer")
     */
    private $orderMin;

    /**
     * @var int
     *
     * @ORM\Column(name="orderMax", type="integer")
     */
    private $orderMax;

    /**
     * @var string
     *
     * @ORM\Column(name="easterEgg", type="string", length=255)
     */
    private $easterEgg;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return RapportValid
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
     * Set orderType
     *
     * @param string $orderType
     *
     * @return RapportValid
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set orderMin
     *
     * @param integer $orderMin
     *
     * @return RapportValid
     */
    public function setOrderMin($orderMin)
    {
        $this->orderMin = $orderMin;

        return $this;
    }

    /**
     * Get orderMin
     *
     * @return int
     */
    public function getOrderMin()
    {
        return $this->orderMin;
    }

    /**
     * Set orderMax
     *
     * @param integer $orderMax
     *
     * @return RapportValid
     */
    public function setOrderMax($orderMax)
    {
        $this->orderMax = $orderMax;

        return $this;
    }

    /**
     * Get orderMax
     *
     * @return int
     */
    public function getOrderMax()
    {
        return $this->orderMax;
    }

    /**
     * Set easterEgg
     *
     * @param string $easterEgg
     *
     * @return RapportValid
     */
    public function setEasterEgg($easterEgg)
    {
        $this->easterEgg = $easterEgg;

        return $this;
    }

    /**
     * Get easterEgg
     *
     * @return string
     */
    public function getEasterEgg()
    {
        return $this->easterEgg;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return RapportValid
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->rapport = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add rapport
     *
     * @param \AppBundle\Entity\Rapport $rapport
     *
     * @return RapportValid
     */
    public function addRapport(\AppBundle\Entity\Rapport $rapport)
    {
        $this->rapport[] = $rapport;

        return $this;
    }

    /**
     * Remove rapport
     *
     * @param \AppBundle\Entity\Rapport $rapport
     */
    public function removeRapport(\AppBundle\Entity\Rapport $rapport)
    {
        $this->rapport->removeElement($rapport);
    }

    /**
     * Get rapport
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getRapport()
    {
        return $this->rapport;
    }
}
