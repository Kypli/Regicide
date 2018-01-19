<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * MiniTchat
 *
 * @ORM\Table(name="mini_tchat")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\MiniTchatRepository")
 */
class MiniTchat
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
     * @ORM\Column(name="destinataire", type="integer")
     */
    private $destinataire;

    /**
     * @var string
     *
     * @ORM\Column(name="message", type="string", length=255)
     */
    private $message;

    /**
     * @var bool
     *
     * @ORM\Column(name="block", type="boolean")
     */
    private $block;

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
     * Set destinataire
     *
     * @param integer $destinataire
     *
     * @return MiniTchat
     */
    public function setDestinataire($destinataire)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return int
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return MiniTchat
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set block
     *
     * @param boolean $block
     *
     * @return MiniTchat
     */
    public function setBlock($block)
    {
        $this->block = $block;

        return $this;
    }

    /**
     * Get block
     *
     * @return bool
     */
    public function getBlock()
    {
        return $this->block;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return MiniTchat
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
