<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * OrderCost
 *
 * @ORM\Table(name="order_cost")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderCostRepository")
 */
class OrderCost
{
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\RessourceType", inversedBy="orderCost")
     */
    private $ressourceType;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\ObjectType", inversedBy="orderCost")
     */
    private $objectType;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\Orderr", mappedBy="orderCost")
     */
    private $orderr;

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
     * @var \DateTime
     *
     * @ORM\Column(name="time", type="datetime")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="res_1_type", type="string", length=255)
     */
    private $res1Type;

    /**
     * @var int
     *
     * @ORM\Column(name="res_1_quantity", type="integer")
     */
    private $res1Quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="res_2_quantity", type="integer")
     */
    private $res2Quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="res_3_quantity", type="integer")
     */
    private $res3Quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="res_4_quantity", type="integer")
     */
    private $res4Quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="res_5_quantity", type="integer")
     */
    private $res5Quantity;


    /**
     * Constructor
     */
    public function __construct()
    {
        $this->orderr = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * Set stamina
     *
     * @param integer $stamina
     *
     * @return OrderCost
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;

        return $this;
    }

    /**
     * Get stamina
     *
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * Set satiety
     *
     * @param integer $satiety
     *
     * @return OrderCost
     */
    public function setSatiety($satiety)
    {
        $this->satiety = $satiety;

        return $this;
    }

    /**
     * Get satiety
     *
     * @return int
     */
    public function getSatiety()
    {
        return $this->satiety;
    }

    /**
     * Set time
     *
     * @param \DateTime $time
     *
     * @return OrderCost
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set res1Type
     *
     * @param string $res1Type
     *
     * @return OrderCost
     */
    public function setRes1Type($res1Type)
    {
        $this->res1Type = $res1Type;

        return $this;
    }

    /**
     * Get res1Type
     *
     * @return string
     */
    public function getRes1Type()
    {
        return $this->res1Type;
    }

    /**
     * Set res1Quantity
     *
     * @param integer $res1Quantity
     *
     * @return OrderCost
     */
    public function setRes1Quantity($res1Quantity)
    {
        $this->res1Quantity = $res1Quantity;

        return $this;
    }

    /**
     * Get res1Quantity
     *
     * @return int
     */
    public function getRes1Quantity()
    {
        return $this->res1Quantity;
    }

    /**
     * Set res2Quantity
     *
     * @param integer $res2Quantity
     *
     * @return OrderCost
     */
    public function setRes2Quantity($res2Quantity)
    {
        $this->res2Quantity = $res2Quantity;

        return $this;
    }

    /**
     * Get res2Quantity
     *
     * @return int
     */
    public function getRes2Quantity()
    {
        return $this->res2Quantity;
    }

    /**
     * Set res3Quantity
     *
     * @param integer $res3Quantity
     *
     * @return OrderCost
     */
    public function setRes3Quantity($res3Quantity)
    {
        $this->res3Quantity = $res3Quantity;

        return $this;
    }

    /**
     * Get res3Quantity
     *
     * @return int
     */
    public function getRes3Quantity()
    {
        return $this->res3Quantity;
    }

    /**
     * Set res4Quantity
     *
     * @param integer $res4Quantity
     *
     * @return OrderCost
     */
    public function setRes4Quantity($res4Quantity)
    {
        $this->res4Quantity = $res4Quantity;

        return $this;
    }

    /**
     * Get res4Quantity
     *
     * @return int
     */
    public function getRes4Quantity()
    {
        return $this->res4Quantity;
    }

    /**
     * Set res5Quantity
     *
     * @param integer $res5Quantity
     *
     * @return OrderCost
     */
    public function setRes5Quantity($res5Quantity)
    {
        $this->res5Quantity = $res5Quantity;

        return $this;
    }

    /**
     * Get res5Quantity
     *
     * @return int
     */
    public function getRes5Quantity()
    {
        return $this->res5Quantity;
    }


    /**
     * Set ressourceType
     *
     * @param \AppBundle\Entity\RessourceType $ressourceType
     *
     * @return OrderCost
     */
    public function setRessourceType(\AppBundle\Entity\RessourceType $ressourceType = null)
    {
        $this->ressourceType = $ressourceType;

        return $this;
    }

    /**
     * Get ressourceType
     *
     * @return \AppBundle\Entity\RessourceType
     */
    public function getRessourceType()
    {
        return $this->ressourceType;
    }

    /**
     * Set objectType
     *
     * @param \AppBundle\Entity\ObjectType $objectType
     *
     * @return OrderCost
     */
    public function setObjectType(\AppBundle\Entity\ObjectType $objectType = null)
    {
        $this->objectType = $objectType;

        return $this;
    }

    /**
     * Get objectType
     *
     * @return \AppBundle\Entity\ObjectType
     */
    public function getObjectType()
    {
        return $this->objectType;
    }

    /**
     * Add orderr
     *
     * @param \AppBundle\Entity\Orderr $orderr
     *
     * @return OrderCost
     */
    public function addOrderr(\AppBundle\Entity\Orderr $orderr)
    {
        $this->orderr[] = $orderr;

        return $this;
    }

    /**
     * Remove orderr
     *
     * @param \AppBundle\Entity\Orderr $orderr
     */
    public function removeOrderr(\AppBundle\Entity\Orderr $orderr)
    {
        $this->orderr->removeElement($orderr);
    }

    /**
     * Get orderr
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderr()
    {
        return $this->orderr;
    }

    /**
     * Set orderr
     *
     * @param \AppBundle\Entity\Orderr $orderr
     *
     * @return OrderCost
     */
    public function setOrderr(\AppBundle\Entity\Orderr $orderr = null)
    {
        $this->orderr = $orderr;

        return $this;
    }
}
