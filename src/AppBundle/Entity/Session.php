<?php

namespace AppBundle\Entity;

/**
 * Session
 */
class Session
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
    private $alarm;

    /**
     * @var \DateTime
     */
    private $date;

    /**
     * @var integer
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Treatment
     */
    private $idTreatment;

    /**
     * @var \AppBundle\Entity\Admin
     */
    private $idAdmin;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Session
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
     * @return Session
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
     * Set alarm
     *
     * @param \DateTime $alarm
     *
     * @return Session
     */
    public function setAlarm($alarm)
    {
        $this->alarm = $alarm;

        return $this;
    }

    /**
     * Get alarm
     *
     * @return \DateTime
     */
    public function getAlarm()
    {
        return $this->alarm;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Session
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
     * Set idTreatment
     *
     * @param \AppBundle\Entity\Treatment $idTreatment
     *
     * @return Session
     */
    public function setIdTreatment(\AppBundle\Entity\Treatment $idTreatment = null)
    {
        $this->idTreatment = $idTreatment;

        return $this;
    }

    /**
     * Get idTreatment
     *
     * @return \AppBundle\Entity\Treatment
     */
    public function getIdTreatment()
    {
        return $this->idTreatment;
    }

    /**
     * Set idAdmin
     *
     * @param \AppBundle\Entity\Admin $idAdmin
     *
     * @return Session
     */
    public function setIdAdmin(\AppBundle\Entity\Admin $idAdmin = null)
    {
        $this->idAdmin = $idAdmin;

        return $this;
    }

    /**
     * Get idAdmin
     *
     * @return \AppBundle\Entity\Admin
     */
    public function getIdAdmin()
    {
        return $this->idAdmin;
    }
}

