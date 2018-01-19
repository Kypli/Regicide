<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rapport
 *
 * @ORM\Table(name="rapport")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RapportRepository")
 */
class Rapport
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
     * @ORM\Column(name="number", type="integer")
     */
    private $number;

    /**
     * @var int
     *
     * @ORM\Column(name="id_erreur", type="integer")
     */
    private $idErreur;

    /**
     * @var string
     *
     * @ORM\Column(name="orderType", type="string", length=255)
     */
    private $orderType;

    /**
     * @var int
     *
     * @ORM\Column(name="orderId", type="integer")
     */
    private $orderId;

    /**
     * @var string
     *
     * @ORM\Column(name="info1", type="string", length=255)
     */
    private $info1;

    /**
     * @var string
     *
     * @ORM\Column(name="info2", type="string", length=255)
     */
    private $info2;

    /**
     * @var string
     *
     * @ORM\Column(name="info3", type="string", length=255)
     */
    private $info3;

    /**
     * @var string
     *
     * @ORM\Column(name="info4", type="string", length=255)
     */
    private $info4;

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
     * @var int
     *
     * @ORM\Column(name="time", type="integer")
     */
    private $time;

    /**
     * @var string
     *
     * @ORM\Column(name="res_spent", type="text")
     */
    private $resSpent;

    /**
     * @var string
     *
     * @ORM\Column(name="res_creation", type="text")
     */
    private $resCreation;

    /**
     * @var string
     *
     * @ORM\Column(name="obj_spent", type="text")
     */
    private $objSpent;

    /**
     * @var string
     *
     * @ORM\Column(name="obj_creation", type="text")
     */
    private $objCreation;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetime")
     */
    private $date;


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
     * Set number
     *
     * @param integer $number
     *
     * @return Rapport
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return int
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set idErreur
     *
     * @param integer $idErreur
     *
     * @return Rapport
     */
    public function setIdErreur($idErreur)
    {
        $this->idErreur = $idErreur;

        return $this;
    }

    /**
     * Get idErreur
     *
     * @return int
     */
    public function getIdErreur()
    {
        return $this->idErreur;
    }

    /**
     * Set orderType
     *
     * @param string $orderType
     *
     * @return Rapport
     */
    public function setOrderType($orderType)
    {
        $this->orderType = $orderType;

        return $this;
    }

    /**
     * Get orderType
     *
     * @return string
     */
    public function getOrderType()
    {
        return $this->orderType;
    }

    /**
     * Set orderId
     *
     * @param integer $orderId
     *
     * @return Rapport
     */
    public function setOrderId($orderId)
    {
        $this->orderId = $orderId;

        return $this;
    }

    /**
     * Get orderId
     *
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * Set info1
     *
     * @param string $info1
     *
     * @return Rapport
     */
    public function setInfo1($info1)
    {
        $this->info1 = $info1;

        return $this;
    }

    /**
     * Get info1
     *
     * @return string
     */
    public function getInfo1()
    {
        return $this->info1;
    }

    /**
     * Set info2
     *
     * @param string $info2
     *
     * @return Rapport
     */
    public function setInfo2($info2)
    {
        $this->info2 = $info2;

        return $this;
    }

    /**
     * Get info2
     *
     * @return string
     */
    public function getInfo2()
    {
        return $this->info2;
    }

    /**
     * Set info3
     *
     * @param string $info3
     *
     * @return Rapport
     */
    public function setInfo3($info3)
    {
        $this->info3 = $info3;

        return $this;
    }

    /**
     * Get info3
     *
     * @return string
     */
    public function getInfo3()
    {
        return $this->info3;
    }

    /**
     * Set info4
     *
     * @param string $info4
     *
     * @return Rapport
     */
    public function setInfo4($info4)
    {
        $this->info4 = $info4;

        return $this;
    }

    /**
     * Get info4
     *
     * @return string
     */
    public function getInfo4()
    {
        return $this->info4;
    }

    /**
     * Set stamina
     *
     * @param integer $stamina
     *
     * @return Rapport
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
     * @return Rapport
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
     * @param integer $time
     *
     * @return Rapport
     */
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }

    /**
     * Get time
     *
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set resSpent
     *
     * @param string $resSpent
     *
     * @return Rapport
     */
    public function setResSpent($resSpent)
    {
        $this->resSpent = $resSpent;

        return $this;
    }

    /**
     * Get resSpent
     *
     * @return string
     */
    public function getResSpent()
    {
        return $this->resSpent;
    }

    /**
     * Set resCreation
     *
     * @param string $resCreation
     *
     * @return Rapport
     */
    public function setResCreation($resCreation)
    {
        $this->resCreation = $resCreation;

        return $this;
    }

    /**
     * Get resCreation
     *
     * @return string
     */
    public function getResCreation()
    {
        return $this->resCreation;
    }

    /**
     * Set objSpent
     *
     * @param string $objSpent
     *
     * @return Rapport
     */
    public function setObjSpent($objSpent)
    {
        $this->objSpent = $objSpent;

        return $this;
    }

    /**
     * Get objSpent
     *
     * @return string
     */
    public function getObjSpent()
    {
        return $this->objSpent;
    }

    /**
     * Set objCreation
     *
     * @param string $objCreation
     *
     * @return Rapport
     */
    public function setObjCreation($objCreation)
    {
        $this->objCreation = $objCreation;

        return $this;
    }

    /**
     * Get objCreation
     *
     * @return string
     */
    public function getObjCreation()
    {
        return $this->objCreation;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Rapport
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }
}
