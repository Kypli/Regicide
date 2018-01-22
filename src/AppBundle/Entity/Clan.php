<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clan
 *
 * @ORM\Table(name="clan")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClanRepository")
 */
class Clan
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\ClanRank", mappedBy="clan")
     */
    private $clanRanks;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Personage", mappedBy="clan")
     */
    private $personageClan;

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
     * @return Clan
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
     * Constructor
     */
    public function __construct()
    {
        $this->personageClan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add personageClan
     *
     * @param \AppBundle\Entity\Personage $personageClan
     *
     * @return Clan
     */
    public function addPersonageClan(\AppBundle\Entity\Personage $personageClan)
    {
        $this->personageClan[] = $personageClan;

        return $this;
    }

    /**
     * Remove personageClan
     *
     * @param \AppBundle\Entity\Personage $personageClan
     */
    public function removePersonageClan(\AppBundle\Entity\Personage $personageClan)
    {
        $this->personageClan->removeElement($personageClan);
    }

    /**
     * Get personageClan
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPersonageClan()
    {
        return $this->personageClan;
    }

    /**
     * Set clanRank
     *
     * @param \AppBundle\Entity\ClanRank $clanRank
     *
     * @return Clan
     */
    public function setClanRank(\AppBundle\Entity\ClanRank $clanRank = null)
    {
        $this->clanRanks = $clanRank;

        return $this;
    }

    /**
     * Get clanRank
     *
     * @return \AppBundle\Entity\ClanRank
     */
    public function getClanRank()
    {
        return $this->clanRanks;
    }

    /**
     * Add clanRank
     *
     * @param \AppBundle\Entity\ClanRank $clanRank
     *
     * @return Clan
     */
    public function addClanRank(\AppBundle\Entity\ClanRank $clanRank)
    {
        $this->clanRanks[] = $clanRank;

        return $this;
    }

    /**
     * Remove clanRank
     *
     * @param \AppBundle\Entity\ClanRank $clanRank
     */
    public function removeClanRank(\AppBundle\Entity\ClanRank $clanRank)
    {
        $this->clanRanks->removeElement($clanRank);
    }

    /**
     * Get clanRanks
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getClanRanks()
    {
        return $this->clanRanks;
    }
}
