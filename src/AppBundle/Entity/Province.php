<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Province
 *
 * @ORM\Table(name="province")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ProvinceRepository")
 */
class Province
{
    /**
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Weather", inversedBy="provinceWeather")
     */
    private $weather;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Map", mappedBy="province")
     */
    private $map;

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
     * @ORM\Column(name="name", type="string", length=255, unique=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="nickname", type="string", length=255, unique=true)
     */
    private $nickname;

    /**
     * @var int
     *
     * @ORM\Column(name="pollution", type="integer")
     */
    private $pollution;

    /**
     * @var int
     *
     * @ORM\Column(name="limitX", type="integer")
     */
    private $limitX;

    /**
     * @var int
     *
     * @ORM\Column(name="limitY", type="integer")
     */
    private $limitY;


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
     * @return Province
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
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Province
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set weather
     *
     * @param string $weather
     *
     * @return Province
     */
    public function setWeather($weather)
    {
        $this->weather = $weather;

        return $this;
    }

    /**
     * Get weather
     *
     * @return string
     */
    public function getWeather()
    {
        return $this->weather;
    }

    /**
     * Set pollution
     *
     * @param integer $pollution
     *
     * @return Province
     */
    public function setPollution($pollution)
    {
        $this->pollution = $pollution;

        return $this;
    }

    /**
     * Get pollution
     *
     * @return int
     */
    public function getPollution()
    {
        return $this->pollution;
    }

    /**
     * Set limitX
     *
     * @param integer $limitX
     *
     * @return Province
     */
    public function setLimitX($limitX)
    {
        $this->limitX = $limitX;

        return $this;
    }

    /**
     * Get limitX
     *
     * @return int
     */
    public function getLimitX()
    {
        return $this->limitX;
    }

    /**
     * Set limitY
     *
     * @param integer $limitY
     *
     * @return Province
     */
    public function setLimitY($limitY)
    {
        $this->limitY = $limitY;

        return $this;
    }

    /**
     * Get limitY
     *
     * @return int
     */
    public function getLimitY()
    {
        return $this->limitY;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->provinceMap = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add provinceMap
     *
     * @param \AppBundle\Entity\Map $provinceMap
     *
     * @return Province
     */
    public function addProvinceMap(\AppBundle\Entity\Map $provinceMap)
    {
        $this->provinceMap[] = $provinceMap;

        return $this;
    }

    /**
     * Remove provinceMap
     *
     * @param \AppBundle\Entity\Map $provinceMap
     */
    public function removeProvinceMap(\AppBundle\Entity\Map $provinceMap)
    {
        $this->provinceMap->removeElement($provinceMap);
    }

    /**
     * Get provinceMap
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProvinceMap()
    {
        return $this->provinceMap;
    }

    /**
     * Add map
     *
     * @param \AppBundle\Entity\Map $map
     *
     * @return Province
     */
    public function addMap(\AppBundle\Entity\Map $map)
    {
        $this->map[] = $map;

        return $this;
    }

    /**
     * Remove map
     *
     * @param \AppBundle\Entity\Map $map
     */
    public function removeMap(\AppBundle\Entity\Map $map)
    {
        $this->map->removeElement($map);
    }

    /**
     * Get map
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMap()
    {
        return $this->map;
    }
}
