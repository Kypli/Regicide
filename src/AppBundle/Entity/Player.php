<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Player
 *
 * @ORM\Table(name="player")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PlayerRepository")
 */
class Player
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Mail", mappedBy="player")
     */
    private $mailPlayer;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\MiniTchat", mappedBy="player")
     */
    private $minitchatPlayer;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Personage", mappedBy="player")
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
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255, nullable=true)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=255, nullable=true)
     */
    private $city;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255, nullable=true)
     */
    private $country;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * @var int
     *
     * @ORM\Column(name="areaXmax", type="integer")
     */
    private $areaXmax;

    /**
     * @var int
     *
     * @ORM\Column(name="areaYmax", type="integer")
     */
    private $areaYmax;

    /**
     * @var string
     *
     * @ORM\Column(name="arrangement", type="string")
     */
    private $arrangement;

    /**
     * @var string
     *
     * @ORM\Column(name="arrangementOrder", type="string")
     */
    private $arrangementOrder;

    /**
     * @var bool
     *
     * @ORM\Column(name="active", type="boolean")
     */
    private $active;


    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return Player
     */
    public function setId(int $id): Player
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
     * @return Player
     */
    public function setFirstName(string $firstName): Player
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
     * @return Player
     */
    public function setLastName(string $lastName): Player
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return string
     */
    public function getSexe(): string
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     * @return Player
     */
    public function setSexe(string $sexe): Player
    {
        $this->sexe = $sexe;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity(): string
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return Player
     */
    public function setCity(string $city): Player
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry(): string
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return Player
     */
    public function setCountry(string $country): Player
    {
        $this->country = $country;
        return $this;
    }

    /**
     * @return string
     */
    public function getMail(): string
    {
        return $this->mail;
    }

    /**
     * @param string $mail
     * @return Player
     */
    public function setMail(string $mail): Player
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return Player
     */
    public function setPassword(string $password): Player
    {
        $this->password = $password;
        return $this;
    }

    /**
     * @return int
     */
    public function getAreaXmax(): int
    {
        return $this->areaXmax;
    }

    /**
     * @param int $areaXmax
     * @return Player
     */
    public function setAreaXmax(int $areaXmax): Player
    {
        $this->areaXmax = $areaXmax;
        return $this;
    }

    /**
     * @return int
     */
    public function getAreaYmax(): int
    {
        return $this->areaYmax;
    }

    /**
     * @param int $areaYmax
     * @return Player
     */
    public function setAreaYmax(int $areaYmax): Player
    {
        $this->areaYmax = $areaYmax;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrangement(): string
    {
        return $this->arrangement;
    }

    /**
     * @param string $arrangement
     * @return Player
     */
    public function setArrangement(string $arrangement): Player
    {
        $this->arrangement = $arrangement;
        return $this;
    }

    /**
     * @return string
     */
    public function getArrangementOrder(): string
    {
        return $this->arrangementOrder;
    }

    /**
     * @param string $arrangementOrder
     * @return Player
     */
    public function setArrangementOrder(string $arrangementOrder): Player
    {
        $this->arrangementOrder = $arrangementOrder;
        return $this;
    }

    /**
     * @return bool
     */
    public function isActive(): bool
    {
        return $this->active;
    }

    /**
     * @param bool $active
     * @return Player
     */
    public function setActive(bool $active): Player
    {
        $this->active = $active;
        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Add personagePlayer
     *
     * @param \AppBundle\Entity\Personage $personagePlayer
     *
     * @return Player
     */
    public function addPersonagePlayer(\AppBundle\Entity\Personage $personagePlayer)
    {
        $this->personagePlayer[] = $personagePlayer;

        return $this;
    }

    /**
     * Remove personagePlayer
     *
     * @param \AppBundle\Entity\Personage $personagePlayer
     */
    public function removePersonagePlayer(\AppBundle\Entity\Personage $personagePlayer)
    {
        $this->personagePlayer->removeElement($personagePlayer);
    }

    /**
     * Get personagePlayer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonagePlayer()
    {
        return $this->personagePlayer;
    }

    /**
     * Add mailPlayer
     *
     * @param \AppBundle\Entity\Mail $mailPlayer
     *
     * @return Player
     */
    public function addMailPlayer(\AppBundle\Entity\Mail $mailPlayer)
    {
        $this->mailPlayer[] = $mailPlayer;

        return $this;
    }

    /**
     * Remove mailPlayer
     *
     * @param \AppBundle\Entity\Mail $mailPlayer
     */
    public function removeMailPlayer(\AppBundle\Entity\Mail $mailPlayer)
    {
        $this->mailPlayer->removeElement($mailPlayer);
    }

    /**
     * Get mailPlayer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMailPlayer()
    {
        return $this->mailPlayer;
    }

    /**
     * Add minitchatPlayer
     *
     * @param \AppBundle\Entity\MiniTchat $minitchatPlayer
     *
     * @return Player
     */
    public function addMinitchatPlayer(\AppBundle\Entity\MiniTchat $minitchatPlayer)
    {
        $this->minitchatPlayer[] = $minitchatPlayer;

        return $this;
    }

    /**
     * Remove minitchatPlayer
     *
     * @param \AppBundle\Entity\MiniTchat $minitchatPlayer
     */
    public function removeMinitchatPlayer(\AppBundle\Entity\MiniTchat $minitchatPlayer)
    {
        $this->minitchatPlayer->removeElement($minitchatPlayer);
    }

    /**
     * Get minitchatPlayer
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMinitchatPlayer()
    {
        return $this->minitchatPlayer;
    }

    /**
     * Add personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Player
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->mailPlayer = new \Doctrine\Common\Collections\ArrayCollection();
        $this->minitchatPlayer = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set personage
     *
     * @param \AppBundle\Entity\Personage $personage
     *
     * @return Player
     */
    public function setPersonage(\AppBundle\Entity\Personage $personage = null)
    {
        $this->personage = $personage;

        return $this;
    }
}
