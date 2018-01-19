<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ObjectType
 *
 * @ORM\Table(name="object_type")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ObjectTypeRepository")
 */
class ObjectType
{
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderCost", mappedBy="objectType")
     */
    private $orderCost;

    /**
     *
     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Object", mappedBy="objectType")
     */
    private $object;

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
     * @ORM\Column(name="description", type="text")
     */
    private $description;


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
     * @return ObjectType
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
     * Set description
     *
     * @param string $description
     *
     * @return ObjectType
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->object = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add object
     *
     * @param \AppBundle\Entity\Object $object
     *
     * @return ObjectType
     */
    public function addObject(\AppBundle\Entity\Object $object)
    {
        $this->object[] = $object;

        return $this;
    }

    /**
     * Remove object
     *
     * @param \AppBundle\Entity\Object $object
     */
    public function removeObject(\AppBundle\Entity\Object $object)
    {
        $this->object->removeElement($object);
    }

    /**
     * Get object
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * Add orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     *
     * @return ObjectType
     */
    public function addOrderCost(\AppBundle\Entity\OrderCost $orderCost)
    {
        $this->orderCost[] = $orderCost;

        return $this;
    }

    /**
     * Remove orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     */
    public function removeOrderCost(\AppBundle\Entity\OrderCost $orderCost)
    {
        $this->orderCost->removeElement($orderCost);
    }

    /**
     * Get orderCost
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getOrderCost()
    {
        return $this->orderCost;
    }

    /**
     * Set orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     *
     * @return ObjectType
     */
    public function setOrderCost(\AppBundle\Entity\OrderCost $orderCost = null)
    {
        $this->orderCost = $orderCost;

        return $this;
    }
}
