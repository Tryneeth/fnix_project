<?php

namespace AppBundle\Entity;

/**
 * Sesions
 */
class Sesions
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
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Tratamiento
     */
    private $idTratamiento;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Sesions
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
     * @return Sesions
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
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idTratamiento
     *
     * @param \AppBundle\Entity\Tratamiento $idTratamiento
     *
     * @return Sesions
     */
    public function setIdTratamiento(\AppBundle\Entity\Tratamiento $idTratamiento = null)
    {
        $this->idTratamiento = $idTratamiento;

        return $this;
    }

    /**
     * Get idTratamiento
     *
     * @return \AppBundle\Entity\Tratamiento
     */
    public function getIdTratamiento()
    {
        return $this->idTratamiento;
    }
}

