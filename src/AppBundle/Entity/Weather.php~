<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Weather
 *
 * @ORM\Table(name="weather")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WeatherRepository")
 */
class Weather
{
    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Province", mappedBy="weather")
     */
    private $provinceWeather;

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
     * @ORM\Column(name="effect", type="string", length=255)
     */
    private $effect;


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
     * @return Weather
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
     * Set effect
     *
     * @param string $effect
     *
     * @return Weather
     */
    public function setEffect($effect)
    {
        $this->effect = $effect;

        return $this;
    }

    /**
     * Get effect
     *
     * @return string
     */
    public function getEffect()
    {
        return $this->effect;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->provinceWeather = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add provinceWeather
     *
     * @param \AppBundle\Entity\Province $provinceWeather
     *
     * @return Weather
     */
    public function addProvinceWeather(\AppBundle\Entity\Province $provinceWeather)
    {
        $this->provinceWeather[] = $provinceWeather;

        return $this;
    }

    /**
     * Remove provinceWeather
     *
     * @param \AppBundle\Entity\Province $provinceWeather
     */
    public function removeProvinceWeather(\AppBundle\Entity\Province $provinceWeather)
    {
        $this->provinceWeather->removeElement($provinceWeather);
    }

    /**
     * Get provinceWeather
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getProvinceWeather()
    {
        return $this->provinceWeather;
    }
}
