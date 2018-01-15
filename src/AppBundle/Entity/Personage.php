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
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Map", mappedBy="personage")
     */
    private $mapPersonage;

    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Player", inversedBy="personagePlayer")
     */
    private $player;

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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="invention", type="string", length=255)
     */
    private $invention;

    /**
     * @var string
     *
     * @ORM\Column(name="province", type="string", length=255)
     */
    private $province;

    /**
     * @var int
     *
     * @ORM\Column(name="areaX", type="integer")
     */
    private $areaX;

    /**
     * @var int
     *
     * @ORM\Column(name="areaY", type="integer")
     */
    private $areaY;

    /**
     * @var string
     *
     * @ORM\Column(name="gender", type="string", length=255)
     */
    private $gender;

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
     * @return Personage
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
     * Set clan
     *
     * @param string $clan
     *
     * @return Personage
     */
    public function setClan($clan)
    {
        $this->clan = $clan;

        return $this;
    }

    /**
     * Get clan
     *
     * @return string
     */
    public function getClan()
    {
        return $this->clan;
    }

    /**
     * Set invention
     *
     * @param string $invention
     *
     * @return Personage
     */
    public function setInvention($invention)
    {
        $this->invention = $invention;

        return $this;
    }

    /**
     * Get invention
     *
     * @return string
     */
    public function getInvention()
    {
        return $this->invention;
    }

    /**
     * Set province
     *
     * @param string $province
     *
     * @return Personage
     */
    public function setProvince($province)
    {
        $this->province = $province;

        return $this;
    }

    /**
     * Get province
     *
     * @return string
     */
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * Set areaX
     *
     * @param integer $areaX
     *
     * @return Personage
     */
    public function setAreaX($areaX)
    {
        $this->areaX = $areaX;

        return $this;
    }

    /**
     * Get areaX
     *
     * @return int
     */
    public function getAreaX()
    {
        return $this->areaX;
    }

    /**
     * Set areaY
     *
     * @param integer $areaY
     *
     * @return Personage
     */
    public function setAreaY($areaY)
    {
        $this->areaY = $areaY;

        return $this;
    }

    /**
     * Get areaY
     *
     * @return int
     */
    public function getAreaY()
    {
        return $this->areaY;
    }

    /**
     * Set gender
     *
     * @param string $gender
     *
     * @return Personage
     */
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get gender
     *
     * @return string
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Personage
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set job2
     *
     * @param string $job2
     *
     * @return Personage
     */
    public function setJob2($job2)
    {
        $this->job2 = $job2;

        return $this;
    }

    /**
     * Get job2
     *
     * @return string
     */
    public function getJob2()
    {
        return $this->job2;
    }

    /**
     * Set hp
     *
     * @param integer $hp
     *
     * @return Personage
     */
    public function setHp($hp)
    {
        $this->hp = $hp;

        return $this;
    }

    /**
     * Get hp
     *
     * @return int
     */
    public function getHp()
    {
        return $this->hp;
    }

    /**
     * Set bonusHp
     *
     * @param integer $bonusHp
     *
     * @return Personage
     */
    public function setBonusHp($bonusHp)
    {
        $this->bonusHp = $bonusHp;

        return $this;
    }

    /**
     * Get bonusHp
     *
     * @return int
     */
    public function getBonusHp()
    {
        return $this->bonusHp;
    }

    /**
     * Set weightInventory
     *
     * @param integer $weightInventory
     *
     * @return Personage
     */
    public function setWeightInventory($weightInventory)
    {
        $this->weightInventory = $weightInventory;

        return $this;
    }

    /**
     * Get weightInventory
     *
     * @return int
     */
    public function getWeightInventory()
    {
        return $this->weightInventory;
    }

    /**
     * Set heightInventory
     *
     * @param integer $heightInventory
     *
     * @return Personage
     */
    public function setHeightInventory($heightInventory)
    {
        $this->heightInventory = $heightInventory;

        return $this;
    }

    /**
     * Get heightInventory
     *
     * @return int
     */
    public function getHeightInventory()
    {
        return $this->heightInventory;
    }

    /**
     * Set dateLastAction
     *
     * @param \DateTime $dateLastAction
     *
     * @return Personage
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
}
