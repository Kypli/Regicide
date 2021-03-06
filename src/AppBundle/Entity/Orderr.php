<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orderr
 *
 * @ORM\Table(name="orderr")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\OrderrRepository")
 */
class Orderr
{
    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderInfluence", inversedBy="orderr")
     */
    private $orderInfluence;

    /**
     *
     * @ORM\OneToOne(targetEntity="AppBundle\Entity\OrderCost", inversedBy="orderr")
     */
    private $orderCost;

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
     * @ORM\Column(name="type", type="string", length=255)
     */
    private $type;

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
     * @var string
     *
     * @ORM\Column(name="intuition", type="string", length=255)
     */
    private $intuition;


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
     * Set type
     *
     * @param string $type
     *
     * @return Orderr
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Orderr
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
     * @return Orderr
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
     * Set intuition
     *
     * @param string $intuition
     *
     * @return Orderr
     */
    public function setIntuition($intuition)
    {
        $this->intuition = $intuition;

        return $this;
    }

    /**
     * Get intuition
     *
     * @return string
     */
    public function getIntuition()
    {
        return $this->intuition;
    }

    /**
     * Set orderInfluence
     *
     * @param \AppBundle\Entity\OrderInfluence $orderInfluence
     *
     * @return Orderr
     */
    public function setOrderInfluence(\AppBundle\Entity\OrderInfluence $orderInfluence = null)
    {
        $this->orderInfluence = $orderInfluence;

        return $this;
    }

    /**
     * Get orderInfluence
     *
     * @return \AppBundle\Entity\OrderInfluence
     */
    public function getOrderInfluence()
    {
        return $this->orderInfluence;
    }

    /**
     * Set orderCost
     *
     * @param \AppBundle\Entity\OrderCost $orderCost
     *
     * @return Orderr
     */
    public function setOrderCost(\AppBundle\Entity\OrderCost $orderCost = null)
    {
        $this->orderCost = $orderCost;

        return $this;
    }

    /**
     * Get orderCost
     *
     * @return \AppBundle\Entity\OrderCost
     */
    public function getOrderCost()
    {
        return $this->orderCost;
    }
}
