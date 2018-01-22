<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Invention
 *
 * @ORM\Table(name="invention")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\InventionRepository")
 */
class Invention
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\PersonageInvention", mappedBy="invention")
     */
    private $personageInvention;

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
     * @ORM\Column(name="detailName", type="string", length=255)
     */
    private $detailName;

    /**
     * @var string
     *
     * @ORM\Column(name="clue", type="text")
     */
    private $clue;

    /**
     * @var string
     *
     * @ORM\Column(name="need", type="string", length=255)
     */
    private $need;

    /**
     * @var int
     *
     * @ORM\Column(name="intuition_progress", type="integer")
     */
    private $intuitionProgress;

    /**
     * @var int
     *
     * @ORM\Column(name="invention_progress", type="integer")
     */
    private $inventionProgress;


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
     * @return Invention
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
     * Set detailName
     *
     * @param string $detailName
     *
     * @return Invention
     */
    public function setDetailName($detailName)
    {
        $this->detailName = $detailName;

        return $this;
    }

    /**
     * Get detailName
     *
     * @return string
     */
    public function getDetailName()
    {
        return $this->detailName;
    }

    /**
     * Set clue
     *
     * @param string $clue
     *
     * @return Invention
     */
    public function setClue($clue)
    {
        $this->clue = $clue;

        return $this;
    }

    /**
     * Get clue
     *
     * @return string
     */
    public function getClue()
    {
        return $this->clue;
    }

    /**
     * Set need
     *
     * @param string $need
     *
     * @return Invention
     */
    public function setNeed($need)
    {
        $this->need = $need;

        return $this;
    }

    /**
     * Get need
     *
     * @return string
     */
    public function getNeed()
    {
        return $this->need;
    }

    /**
     * Set intuitionProgress
     *
     * @param integer $intuitionProgress
     *
     * @return Invention
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
     * Set inventionProgress
     *
     * @param integer $inventionProgress
     *
     * @return Invention
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
     * Constructor
     */
    public function __construct()
    {
        $this->personageInvention = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personageInvention
     *
     * @param \AppBundle\Entity\PersonageInvention $personageInvention
     *
     * @return Invention
     */
    public function addPersonageInvention(\AppBundle\Entity\PersonageInvention $personageInvention)
    {
        $this->personageInvention[] = $personageInvention;

        return $this;
    }

    /**
     * Remove personageInvention
     *
     * @param \AppBundle\Entity\PersonageInvention $personageInvention
     */
    public function removePersonageInvention(\AppBundle\Entity\PersonageInvention $personageInvention)
    {
        $this->personageInvention->removeElement($personageInvention);
    }

    /**
     * Get personageInvention
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonageInvention()
    {
        return $this->personageInvention;
    }
}
