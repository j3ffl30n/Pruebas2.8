<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Store
 */
class Store
{
    /**
     * @var boolean
     */
    private $storeId;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Address
     */
    private $address;

    /**
     * @var \AppBundle\Entity\Staff
     */
    private $managerStaff;


    /**
     * Get storeId
     *
     * @return boolean 
     */
    public function getStoreId()
    {
        return $this->storeId;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Store
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
     * Set address
     *
     * @param \AppBundle\Entity\Address $address
     * @return Store
     */
    public function setAddress(\AppBundle\Entity\Address $address = null)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return \AppBundle\Entity\Address 
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set managerStaff
     *
     * @param \AppBundle\Entity\Staff $managerStaff
     * @return Store
     */
    public function setManagerStaff(\AppBundle\Entity\Staff $managerStaff = null)
    {
        $this->managerStaff = $managerStaff;

        return $this;
    }

    /**
     * Get managerStaff
     *
     * @return \AppBundle\Entity\Staff 
     */
    public function getManagerStaff()
    {
        return $this->managerStaff;
    }
}
