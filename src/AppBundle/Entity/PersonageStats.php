<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PersonageStats
 *
 * @ORM\Table(name="personage_stats")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonageStatsRepository")
 */
class PersonageStats
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personage", mappedBy="personageStats")
     */
    private $personage;

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
     * @ORM\Column(name="vision", type="integer")
     */
    private $vision;

    /**
     * @var text
     *
     * @ORM\Column(name="visitedMap", type="text")
     */
    private $visitedMap;

    /**
     * @var int
     *
     * @ORM\Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var int
     *
     * @ORM\Column(name="bonusHp", type="integer")
     */
    private $bonusHp;

    /**
     * @var int
     *
     * @ORM\Column(name="stamina", type="integer")
     */
    private $stamina;

    /**
     * @var int
     *
     * @ORM\Column(name="satiety", type="integer")
     */
    private $satiety;

    /**
     * @var int
     *
     * @ORM\Column(name="timeReserve", type="integer")
     */
    private $timeReserve;

    /**
     * @var int
     *
     * @ORM\Column(name="weightInventory", type="integer")
     */
    private $weightInventory;

    /**
     * @var int
     *
     * @ORM\Column(name="heightInventory", type="integer")
     */
    private $heightInventory;

    /**
     * @var date
     *
     * @ORM\Column(name="dateLastAction", type="datetime")
     */
    private $dateLastAction;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return PersonageStats
     */
    public function setId(int $id): PersonageStats
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getVision(): int
    {
        return $this->vision;
    }

    /**
     * @param int $vision
     * @return PersonageStats
     */
    public function setVision(int $vision): PersonageStats
    {
        $this->vision = $vision;
        return $this;
    }

    /**
     * @return text
     */
    public function getVisitedMap(): text
    {
        return $this->visitedMap;
    }

    /**
     * @param int $visitedMap
     * @return PersonageStats
     */
    public function setVisitedMap(int $visitedMap): PersonageStats
    {
        $this->visitedMap = $visitedMap;
        return $this;
    }

    /**
     * @return int
     */
    public function getHp(): int
    {
        return $this->hp;
    }

    /**
     * @param int $hp
     * @return PersonageStats
     */
    public function setHp(int $hp): PersonageStats
    {
        $this->hp = $hp;
        return $this;
    }

    /**
     * @return int
     */
    public function getBonusHp(): int
    {
        return $this->bonusHp;
    }

    /**
     * @param int $bonusHp
     * @return PersonageStats
     */
    public function setBonusHp(int $bonusHp): PersonageStats
    {
        $this->bonusHp = $bonusHp;
        return $this;
    }

    /**
     * @return int
     */
    public function getStamina(): int
    {
        return $this->stamina;
    }

    /**
     * @param int $stamina
     * @return PersonageStats
     */
    public function setStamina(int $stamina): PersonageStats
    {
        $this->stamina = $stamina;
        return $this;
    }

    /**
     * @return int
     */
    public function getSatiety(): int
    {
        return $this->satiety;
    }

    /**
     * @param int $satiety
     * @return PersonageStats
     */
    public function setSatiety(int $satiety): PersonageStats
    {
        $this->satiety = $satiety;
        return $this;
    }

    /**
     * @return int
     */
    public function getTimeReserve(): int
    {
        return $this->timeReserve;
    }

    /**
     * @param int $timeReserve
     * @return PersonageStats
     */
    public function setTimeReserve(int $timeReserve): PersonageStats
    {
        $this->timeReserve = $timeReserve;
        return $this;
    }

    /**
     * @return int
     */
    public function getWeightInventory(): int
    {
        return $this->weightInventory;
    }

    /**
     * @param int $weightInventory
     * @return PersonageStats
     */
    public function setWeightInventory(int $weightInventory): PersonageStats
    {
        $this->weightInventory = $weightInventory;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeightInventory(): int
    {
        return $this->heightInventory;
    }

    /**
     * @param int $heightInventory
     * @return PersonageStats
     */
    public function setHeightInventory(int $heightInventory): PersonageStats
    {
        $this->heightInventory = $heightInventory;
        return $this;
    }

    /**
     * Set dateLastAction
     *
     * @param \DateTime $dateLastAction
     *
     * @return PersonageStats
     */
    public function setDateLastAction($dateLastAction)
    {
        $this->dateLastAction = $dateLastAction;

        return $this;
    }

    /**
     * Get dateLastAction
     *
     * @return \DateTime
     */
    public function getDateLastAction()
    {
        return $this->dateLastAction;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->personage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return PersonageStats
     */
    public function addPersonage(\AppBundle\Entity\Personage $personage)
    {
        $this->personage[] = $personage;

        return $this;
    }

    /**
     * Remove personage
     *
     * @param \AppBundle\Entity\Personage $personage
     */
    public function removePersonage(\AppBundle\Entity\Personage $personage)
    {
        $this->personage->removeElement($personage);
    }

    /**
     * Get personage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonage()
    {
        return $this->personage;
    }
}
