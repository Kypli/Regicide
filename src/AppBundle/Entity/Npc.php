<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Npc
 *
 * @ORM\Table(name="npc")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NpcRepository")
 */
class Npc
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="lastName", type="string", length=255)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=255)
     */
    private $sexe;

    /**
     * @var int
     *
     * @ORM\Column(name="hp", type="integer")
     */
    private $hp;

    /**
     * @var int
     *
     * @ORM\Column(name="hpMax", type="integer")
     */
    private $hpMax;

    /**
     * @var string
     *
     * @ORM\Column(name="Job", type="string", length=255)
     */
    private $job;

    /**
     * @var int
     *
     * @ORM\Column(name="experience", type="integer")
     */
    private $experience;

    /**
     * @var int
     *
     * @ORM\Column(name="moral", type="integer")
     */
    private $moral;


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
     * @return Npc
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
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Npc
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set sexe
     *
     * @param string $sexe
     *
     * @return Npc
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;

        return $this;
    }

    /**
     * Get sexe
     *
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set hp
     *
     * @param integer $hp
     *
     * @return Npc
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
     * Set hpMax
     *
     * @param integer $hpMax
     *
     * @return Npc
     */
    public function setHpMax($hpMax)
    {
        $this->hpMax = $hpMax;

        return $this;
    }

    /**
     * Get hpMax
     *
     * @return int
     */
    public function getHpMax()
    {
        return $this->hpMax;
    }

    /**
     * Set job
     *
     * @param string $job
     *
     * @return Npc
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
     * Set experience
     *
     * @param integer $experience
     *
     * @return Npc
     */
    public function setExperience($experience)
    {
        $this->experience = $experience;

        return $this;
    }

    /**
     * Get experience
     *
     * @return int
     */
    public function getExperience()
    {
        return $this->experience;
    }

    /**
     * Set moral
     *
     * @param integer $moral
     *
     * @return Npc
     */
    public function setMoral($moral)
    {
        $this->moral = $moral;

        return $this;
    }

    /**
     * Get moral
     *
     * @return int
     */
    public function getMoral()
    {
        return $this->moral;
    }
}
