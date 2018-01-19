<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonageInvention
 *
 * @ORM\Table(name="personage_invention")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonageInventionRepository")
 */
class PersonageInvention
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Personage", inversedBy="personageInvention")
     */
    private $personage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Invention", inversedBy="personageInvention")
     */
    private $invention;

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
     * @ORM\Column(name="invention_progress", type="integer")
     */
    private $inventionProgress;

    /**
     * @var int
     *
     * @ORM\Column(name="intuition_progress", type="integer")
     */
    private $intuitionProgress;


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
     * Set inventionProgress
     *
     * @param integer $inventionProgress
     *
     * @return PersonageInvention
     */
    public function setInventionProgress($inventionProgress)
    {
        $this->inventionProgress = $inventionProgress;

        return $this;
    }

    /**
     * Get inventionProgress
     *
     * @return int
     */
    public function getInventionProgress()
    {
        return $this->inventionProgress;
    }

    /**
     * Set intuitionProgress
     *
     * @param integer $intuitionProgress
     *
     * @return PersonageInvention
     */
    public function setIntuitionProgress($intuitionProgress)
    {
        $this->intuitionProgress = $intuitionProgress;

        return $this;
    }

    /**
     * Get intuitionProgress
     *
     * @return int
     */
    public function getIntuitionProgress()
    {
        return $this->intuitionProgress;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->invention = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add invention
     *
     * @param \AppBundle\Entity\Personage $invention
     *
     * @return PersonageInvention
     */
    public function addInvention(\AppBundle\Entity\Personage $invention)
    {
        $this->invention[] = $invention;

        return $this;
    }

    /**
     * Remove invention
     *
     * @param \AppBundle\Entity\Personage $invention
     */
    public function removeInvention(\AppBundle\Entity\Personage $invention)
    {
        $this->invention->removeElement($invention);
    }

    /**
     * Get invention
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getInvention()
    {
        return $this->invention;
    }

    /**
     * Set invention
     *
     * @param \AppBundle\Entity\Personage $invention
     *
     * @return PersonageInvention
     */
    public function setInvention(\AppBundle\Entity\Personage $invention = null)
    {
        $this->invention = $invention;

        return $this;
    }
}
