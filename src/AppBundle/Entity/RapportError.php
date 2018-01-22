<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RapportError
 *
 * @ORM\Table(name="rapport_error")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RapportErrorRepository")
 */
class RapportError
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Rapport", mappedBy="rapportError")
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
     * @var string
     *
     * @ORM\Column(name="descriptionCurrentOrder", type="text")
     */
    private $descriptionCurrentOrder;


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
     * @return RapportError
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
     * Set easterEgg
     *
     * @param string $easterEgg
     *
     * @return RapportError
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
     * @return RapportError
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
     * Set descriptionCurrentOrder
     *
     * @param string $descriptionCurrentOrder
     *
     * @return RapportError
     */
    public function setDescriptionCurrentOrder($descriptionCurrentOrder)
    {
        $this->descriptionCurrentOrder = $descriptionCurrentOrder;

        return $this;
    }

    /**
     * Get descriptionCurrentOrder
     *
     * @return string
     */
    public function getDescriptionCurrentOrder()
    {
        return $this->descriptionCurrentOrder;
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
     * @return RapportError
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
