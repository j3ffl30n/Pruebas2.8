<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rental
 */
class Rental
{
    /**
     * @var integer
     */
    private $rentalId;

    /**
     * @var \DateTime
     */
    private $rentalDate;

    /**
     * @var \DateTime
     */
    private $returnDate;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Customer
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\Inventory
     */
    private $inventory;

    /**
     * @var \AppBundle\Entity\Staff
     */
    private $staff;


    /**
     * Get rentalId
     *
     * @return integer 
     */
    public function getRentalId()
    {
        return $this->rentalId;
    }

    /**
     * Set rentalDate
     *
     * @param \DateTime $rentalDate
     * @return Rental
     */
    public function setRentalDate($rentalDate)
    {
        $this->rentalDate = $rentalDate;

        return $this;
    }

    /**
     * Get rentalDate
     *
     * @return \DateTime 
     */
    public function getRentalDate()
    {
        return $this->rentalDate;
    }

    /**
     * Set returnDate
     *
     * @param \DateTime $returnDate
     * @return Rental
     */
    public function setReturnDate($returnDate)
    {
        $this->returnDate = $returnDate;

        return $this;
    }

    /**
     * Get returnDate
     *
     * @return \DateTime 
     */
    public function getReturnDate()
    {
        return $this->returnDate;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Rental
     */
    public function setLastUpdate($lastUpdate)
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    /**
     * Get lastUpdate
     *
     * @return \DateTime 
     */
    public function getLastUpdate()
    {
        return $this->lastUpdate;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     * @return Rental
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer 
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * Set inventory
     *
     * @param \AppBundle\Entity\Inventory $inventory
     * @return Rental
     */
    public function setInventory(\AppBundle\Entity\Inventory $inventory = null)
    {
        $this->inventory = $inventory;

        return $this;
    }

    /**
     * Get inventory
     *
     * @return \AppBundle\Entity\Inventory 
     */
    public function getInventory()
    {
        return $this->inventory;
    }

    /**
     * Set staff
     *
     * @param \AppBundle\Entity\Staff $staff
     * @return Rental
     */
    public function setStaff(\AppBundle\Entity\Staff $staff = null)
    {
        $this->staff = $staff;

        return $this;
    }

    /**
     * Get staff
     *
     * @return \AppBundle\Entity\Staff 
     */
    public function getStaff()
    {
        return $this->staff;
    }
}
