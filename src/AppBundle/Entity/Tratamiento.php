<?php

namespace AppBundle\Entity;

/**
 * Tratamiento
 */
class Tratamiento
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $datealarm;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Clients
     */
    private $idCliente;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Tratamiento
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
     * @return Tratamiento
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
     * Set datealarm
     *
     * @param \DateTime $datealarm
     *
     * @return Tratamiento
     */
    public function setDatealarm($datealarm)
    {
        $this->datealarm = $datealarm;

        return $this;
    }

    /**
     * Get datealarm
     *
     * @return \DateTime
     */
    public function getDatealarm()
    {
        return $this->datealarm;
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
     * Set idCliente
     *
     * @param \AppBundle\Entity\Clients $idCliente
     *
     * @return Tratamiento
     */
    public function setIdCliente(\AppBundle\Entity\Clients $idCliente = null)
    {
        $this->idCliente = $idCliente;

        return $this;
    }

    /**
     * Get idCliente
     *
     * @return \AppBundle\Entity\Clients
     */
    public function getIdCliente()
    {
        return $this->idCliente;
    }
}

