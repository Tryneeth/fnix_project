<?php

namespace AppBundle\Entity;

/**
 * Shift
 */
class Shift
{
    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Client
     */
    private $idClient;


    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Shift
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

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idClient
     *
     * @param \AppBundle\Entity\Client $idClient
     *
     * @return Shift
     */
    public function setIdClient(\AppBundle\Entity\Client $idClient = null)
    {
        $this->idClient = $idClient;

        return $this;
    }

    /**
     * Get idClient
     *
     * @return \AppBundle\Entity\Client
     */
    public function getIdClient()
    {
        return $this->idClient;
    }
}

