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
}
