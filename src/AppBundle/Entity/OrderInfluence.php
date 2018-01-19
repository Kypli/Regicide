<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderInfluence
 *
 * @ORM\Table(name="order_influence")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderInfluenceRepository")
 */
class OrderInfluence
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
     * @ORM\Column(name="impact_weight", type="integer")
     */
    private $impactWeight;

    /**
     * @var int
     *
     * @ORM\Column(name="impact_multiplicateur", type="integer")
     */
    private $impactMultiplicateur;

    /**
     * @var int
     *
     * @ORM\Column(name="impact_distance", type="integer")
     */
    private $impactDistance;

    /**
     * @var int
     *
     * @ORM\Column(name="impact_wear", type="integer")
     */
    private $impactWear;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_invention", type="string", length=255)
     */
    private $restrictionInvention;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_proprietaire", type="string", length=255)
     */
    private $restrictionProprietaire;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_building", type="string", length=255)
     */
    private $restrictionBuilding;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_surface", type="string", length=255)
     */
    private $restrictionSurface;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_inside", type="string", length=255)
     */
    private $restrictionInside;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_mobilier", type="string", length=255)
     */
    private $restrictionMobilier;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_fonction", type="string", length=255)
     */
    private $restrictionFonction;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_job", type="string", length=255)
     */
    private $restrictionJob;

    /**
     * @var string
     *
     * @ORM\Column(name="restriction_time", type="string", length=255)
     */
    private $restrictionTime;

    /**
     * @var string
     *
     * @ORM\Column(name="joker", type="string", length=255)
     */
    private $joker;

    /**
     * @var int
     *
     * @ORM\Column(name="limit_player", type="integer")
     */
    private $limitPlayer;

    /**
     * @var int
     *
     * @ORM\Column(name="limit_clan", type="integer")
     */
    private $limitClan;

    /**
     * @var int
     *
     * @ORM\Column(name="limit_province", type="integer")
     */
    private $limitProvince;


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
     * Set impactWeight
     *
     * @param integer $impactWeight
     *
     * @return OrderInfluence
     */
    public function setImpactWeight($impactWeight)
    {
        $this->impactWeight = $impactWeight;

        return $this;
    }

    /**
     * Get impactWeight
     *
     * @return int
     */
    public function getImpactWeight()
    {
        return $this->impactWeight;
    }

    /**
     * Set impactMultiplicateur
     *
     * @param integer $impactMultiplicateur
     *
     * @return OrderInfluence
     */
    public function setImpactMultiplicateur($impactMultiplicateur)
    {
        $this->impactMultiplicateur = $impactMultiplicateur;

        return $this;
    }

    /**
     * Get impactMultiplicateur
     *
     * @return int
     */
    public function getImpactMultiplicateur()
    {
        return $this->impactMultiplicateur;
    }

    /**
     * Set impactDistance
     *
     * @param integer $impactDistance
     *
     * @return OrderInfluence
     */
    public function setImpactDistance($impactDistance)
    {
        $this->impactDistance = $impactDistance;

        return $this;
    }

    /**
     * Get impactDistance
     *
     * @return int
     */
    public function getImpactDistance()
    {
        return $this->impactDistance;
    }

    /**
     * Set impactWear
     *
     * @param integer $impactWear
     *
     * @return OrderInfluence
     */
    public function setImpactWear($impactWear)
    {
        $this->impactWear = $impactWear;

        return $this;
    }

    /**
     * Get impactWear
     *
     * @return int
     */
    public function getImpactWear()
    {
        return $this->impactWear;
    }

    /**
     * Set restrictionInvention
     *
     * @param string $restrictionInvention
     *
     * @return OrderInfluence
     */
    public function setRestrictionInvention($restrictionInvention)
    {
        $this->restrictionInvention = $restrictionInvention;

        return $this;
    }

    /**
     * Get restrictionInvention
     *
     * @return string
     */
    public function getRestrictionInvention()
    {
        return $this->restrictionInvention;
    }

    /**
     * Set restrictionProprietaire
     *
     * @param string $restrictionProprietaire
     *
     * @return OrderInfluence
     */
    public function setRestrictionProprietaire($restrictionProprietaire)
    {
        $this->restrictionProprietaire = $restrictionProprietaire;

        return $this;
    }

    /**
     * Get restrictionProprietaire
     *
     * @return string
     */
    public function getRestrictionProprietaire()
    {
        return $this->restrictionProprietaire;
    }

    /**
     * Set restrictionBuilding
     *
     * @param string $restrictionBuilding
     *
     * @return OrderInfluence
     */
    public function setRestrictionBuilding($restrictionBuilding)
    {
        $this->restrictionBuilding = $restrictionBuilding;

        return $this;
    }

    /**
     * Get restrictionBuilding
     *
     * @return string
     */
    public function getRestrictionBuilding()
    {
        return $this->restrictionBuilding;
    }

    /**
     * Set restrictionSurface
     *
     * @param string $restrictionSurface
     *
     * @return OrderInfluence
     */
    public function setRestrictionSurface($restrictionSurface)
    {
        $this->restrictionSurface = $restrictionSurface;

        return $this;
    }

    /**
     * Get restrictionSurface
     *
     * @return string
     */
    public function getRestrictionSurface()
    {
        return $this->restrictionSurface;
    }

    /**
     * Set restrictionInside
     *
     * @param string $restrictionInside
     *
     * @return OrderInfluence
     */
    public function setRestrictionInside($restrictionInside)
    {
        $this->restrictionInside = $restrictionInside;

        return $this;
    }

    /**
     * Get restrictionInside
     *
     * @return string
     */
    public function getRestrictionInside()
    {
        return $this->restrictionInside;
    }

    /**
     * Set restrictionMobilier
     *
     * @param string $restrictionMobilier
     *
     * @return OrderInfluence
     */
    public function setRestrictionMobilier($restrictionMobilier)
    {
        $this->restrictionMobilier = $restrictionMobilier;

        return $this;
    }

    /**
     * Get restrictionMobilier
     *
     * @return string
     */
    public function getRestrictionMobilier()
    {
        return $this->restrictionMobilier;
    }

    /**
     * Set restrictionFonction
     *
     * @param string $restrictionFonction
     *
     * @return OrderInfluence
     */
    public function setRestrictionFonction($restrictionFonction)
    {
        $this->restrictionFonction = $restrictionFonction;

        return $this;
    }

    /**
     * Get restrictionFonction
     *
     * @return string
     */
    public function getRestrictionFonction()
    {
        return $this->restrictionFonction;
    }

    /**
     * Set restrictionJob
     *
     * @param string $restrictionJob
     *
     * @return OrderInfluence
     */
    public function setRestrictionJob($restrictionJob)
    {
        $this->restrictionJob = $restrictionJob;

        return $this;
    }

    /**
     * Get restrictionJob
     *
     * @return string
     */
    public function getRestrictionJob()
    {
        return $this->restrictionJob;
    }

    /**
     * Set restrictionTime
     *
     * @param string $restrictionTime
     *
     * @return OrderInfluence
     */
    public function setRestrictionTime($restrictionTime)
    {
        $this->restrictionTime = $restrictionTime;

        return $this;
    }

    /**
     * Get restrictionTime
     *
     * @return string
     */
    public function getRestrictionTime()
    {
        return $this->restrictionTime;
    }

    /**
     * Set joker
     *
     * @param string $joker
     *
     * @return OrderInfluence
     */
    public function setJoker($joker)
    {
        $this->joker = $joker;

        return $this;
    }

    /**
     * Get joker
     *
     * @return string
     */
    public function getJoker()
    {
        return $this->joker;
    }

    /**
     * Set limitPlayer
     *
     * @param integer $limitPlayer
     *
     * @return OrderInfluence
     */
    public function setLimitePlayer($limitPlayer)
    {
        $this->limitPlayer = $limitPlayer;

        return $this;
    }

    /**
     * Get limitPlayer
     *
     * @return int
     */
    public function getLimitPlayer()
    {
        return $this->limitPlayer;
    }

    /**
     * Set limitClan
     *
     * @param integer $limitClan
     *
     * @return OrderInfluence
     */
    public function setLimitClan($limitClan)
    {
        $this->limitClan = $limitClan;

        return $this;
    }

    /**
     * Get limitClan
     *
     * @return int
     */
    public function getLimitClan()
    {
        return $this->limitClan;
    }

    /**
     * Set limitProvince
     *
     * @param integer $limitProvince
     *
     * @return OrderInfluence
     */
    public function setLimitProvince($limitProvince)
    {
        $this->limitProvince = $limitProvince;

        return $this;
    }

    /**
     * Get limitProvince
     *
     * @return int
     */
    public function getLimitProvince()
    {
        return $this->limitProvince;
    }
}

