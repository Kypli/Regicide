<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Personage
 *
 * @ORM\Table(name="personage")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PersonageRepository")
 */
class Personage
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Map", inversedBy="personage")
     */
    private $maps;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Player", inversedBy="personagePlayer")
     */
    private $player;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\PersonageStats", inversedBy="personage")
     */
    private $personageStats;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Clan", inversedBy="personageClan")
     */
    private $clan;

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
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="age", type="string", length=255)
     */
    private $age;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

    /**
     * @var boolean
     *
     * @ORM\Column(name="photo", type="boolean", length=255)
     */
    private $photo;

    /**
     * @var int
     *
     * @ORM\Column(name="receveiveMail", type="integer", length=255)
     */
    private $receveiveMail;

    /**
     * @var string
     *
     * @ORM\Column(name="invention", type="string", length=255)
     */
    private $invention;

    /**
     * @var string
     *
     * @ORM\Column(name="job", type="string", length=255)
     */
    private $job;

    /**
     * @var string
     *
     * @ORM\Column(name="job2", type="string", length=255)
     */
    private $job2;

    /**
     * @var bool
     *
     * @ORM\Column(name="insideBuilding", type="boolean")
     */
    private $insideBuilding;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Personage
     */
    public function setId(int $id): Personage
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName(): string
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return Personage
     */
    public function setFirstName(string $firstName): Personage
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return Personage
     */
    public function setLastName(string $lastName): Personage
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getAge(): string
    {
        return $this->age;
    }

    /**
     * @param string $age
     * @return Personage
     */
    public function setAge(string $age): Personage
    {
        $this->age = $age;
        return $this;
    }

    /**
     * @return string
     */
    public function getGender(): string
    {
        return $this->gender;
    }

    /**
     * @param string $gender
     * @return Personage
     */
    public function setGender(string $gender): Personage
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return bool
     */
    public function isPhoto(): bool
    {
        return $this->photo;
    }

    /**
     * @param bool $photo
     * @return Personage
     */
    public function setPhoto(bool $photo): Personage
    {
        $this->photo = $photo;
        return $this;
    }

    /**
     * @return int
     */
    public function getReceveiveMail(): int
    {
        return $this->receveiveMail;
    }

    /**
     * @param int $receveiveMail
     * @return Personage
     */
    public function setReceveiveMail(int $receveiveMail): Personage
    {
        $this->receveiveMail = $receveiveMail;
        return $this;
    }

    /**
     * @return string
     */
    public function getInvention(): string
    {
        return $this->invention;
    }

    /**
     * @param string $invention
     * @return Personage
     */
    public function setInvention(string $invention): Personage
    {
        $this->invention = $invention;
        return $this;
    }

    /**
     * @return string
     */
    public function getJob(): string
    {
        return $this->job;
    }

    /**
     * @param string $job
     * @return Personage
     */
    public function setJob(string $job): Personage
    {
        $this->job = $job;
        return $this;
    }

    /**
     * @return string
     */
    public function getJob2(): string
    {
        return $this->job2;
    }

    /**
     * @param string $job2
     * @return Personage
     */
    public function setJob2(string $job2): Personage
    {
        $this->job2 = $job2;
        return $this;
    }

    /**
     * @return bool
     */
    public function isInsideBuilding(): bool
    {
        return $this->insideBuilding;
    }

    /**
     * @param bool $insideBuilding
     * @return Personage
     */
    public function setInsideBuilding(bool $insideBuilding): Personage
    {
        $this->insideBuilding = $insideBuilding;
        return $this;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mapPersonage = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add mapPersonage
     *
     * @param \AppBundle\Entity\Map $mapPersonage
     *
     * @return Personage
     */
    public function addMapPersonage(\AppBundle\Entity\Map $mapPersonage)
    {
        $this->mapPersonage[] = $mapPersonage;

        return $this;
    }

    /**
     * Remove mapPersonage
     *
     * @param \AppBundle\Entity\Map $mapPersonage
     */
    public function removeMapPersonage(\AppBundle\Entity\Map $mapPersonage)
    {
        $this->mapPersonage->removeElement($mapPersonage);
    }

    /**
     * Get mapPersonage
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMapPersonage()
    {
        return $this->mapPersonage;
    }


    /**
     * Get photo
     *
     * @return boolean
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set player
     *
     * @param \AppBundle\Entity\Player $player
     *
     * @return Personage
     */
    public function setPlayer(\AppBundle\Entity\Player $player = null)
    {
        $this->player = $player;

        return $this;
    }

    /**
     * Get player
     *
     * @return \AppBundle\Entity\Player
     */
    public function getPlayer()
    {
        return $this->player;
    }

    /**
     * Set personageStats
     *
     * @param \AppBundle\Entity\PersonageStats $personageStats
     *
     * @return Personage
     */
    public function setPersonageStats(\AppBundle\Entity\PersonageStats $personageStats = null)
    {
        $this->personageStats = $personageStats;

        return $this;
    }

    /**
     * Get personageStats
     *
     * @return \AppBundle\Entity\PersonageStats
     */
    public function getPersonageStats()
    {
        return $this->personageStats;
    }

    /**
     * Set clan
     *
     * @param \AppBundle\Entity\Clan $clan
     *
     * @return Personage
     */
    public function setClan(\AppBundle\Entity\Clan $clan = null)
    {
        $this->clan = $clan;

        return $this;
    }

    /**
     * Get clan
     *
     * @return \AppBundle\Entity\Clan
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * Get insideBuilding
     *
     * @return boolean
     */
    public function getInsideBuilding()
    {
        return $this->insideBuilding;
    }
}
