<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Clan
 *
 * @ORM\Table(name="clan_rank")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClanRankRepository")
 */
class ClanRank
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Clan", mappedBy="clanRank")
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
     * @ORM\Column(name="rank_1", type="string", length=255)
     */
    private $rank1;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_2", type="string", length=255)
     */
    private $rank2;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_3", type="string", length=255)
     */
    private $rank3;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_4", type="string", length=255)
     */
    private $rank4;

    /**
     * @var string
     *
     * @ORM\Column(name="rank_5", type="string", length=255)
     */
    private $rank5;


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
     * @param string $rank1
     *
     * @return ClanRank
     */
    public function setRank1($rank1)
    {
        $this->rank1 = $rank1;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getRank1()
    {
        return $this->rank1;
    }

    /**
     * Set name
     *
     * @param string $rank2
     *
     * @return ClanRank
     */
    public function setRank2($rank2)
    {
        $this->rank2 = $rank2;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getRank2()
    {
        return $this->rank2;
    }

    /**
     * Set name
     *
     * @param string $rank3
     *
     * @return ClanRank
     */
    public function setRank3($rank3)
    {
        $this->rank3 = $rank3;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getRank3()
    {
        return $this->rank3;
    }

    /**
     * Set name
     *
     * @param string $rank1
     *
     * @return ClanRank
     */
    public function setRank4($rank4)
    {
        $this->rank4 = $rank4;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getRank4()
    {
        return $this->rank4;
    }

    /**
     * Set name
     *
     * @param string $rank5
     *
     * @return ClanRank
     */
    public function setRank5($rank5)
    {
        $this->rank5 = $rank5;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getRank5()
    {
        return $this->rank5;
    }

    /**
     * Set clan
     *
     * @param \AppBundle\Entity\Clan $clan
     *
     * @return ClanRank
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
     * Constructor
     */
    public function __construct()
    {
        $this->clan = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add clan
     *
     * @param \AppBundle\Entity\Clan $clan
     *
     * @return ClanRank
     */
    public function addClan(\AppBundle\Entity\Clan $clan)
    {
        $this->clan[] = $clan;

        return $this;
    }

    /**
     * Remove clan
     *
     * @param \AppBundle\Entity\Clan $clan
     */
    public function removeClan(\AppBundle\Entity\Clan $clan)
    {
        $this->clan->removeElement($clan);
    }
}
