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
     * @ORM\Column(name="invention", type="integer")
     */
    private $invention;

    /**
     * @var int
     *
     * @ORM\Column(name="invention_progress", type="integer")
     */
    private $inventionProgress;

    /**
     * @var int
     *
     * @ORM\Column(name="intuition", type="integer")
     */
    private $intuition;

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
     * Set invention
     *
     * @param integer $invention
     *
     * @return PersonageInvention
     */
    public function setInvention($invention)
    {
        $this->invention = $invention;

        return $this;
    }

    /**
     * Get invention
     *
     * @return int
     */
    public function getInvention()
    {
        return $this->invention;
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
     * Set intuition
     *
     * @param integer $intuition
     *
     * @return PersonageInvention
     */
    public function setIntuition($intuition)
    {
        $this->intuition = $intuition;

        return $this;
    }

    /**
     * Get intuition
     *
     * @return int
     */
    public function getIntuition()
    {
        return $this->intuition;
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
}
