<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Store
 *
 * @ORM\Table(name="store", uniqueConstraints={@ORM\UniqueConstraint(name="idx_unique_manager", columns={"manager_staff_id"})}, indexes={@ORM\Index(name="idx_fk_address_id", columns={"address_id"})})
 * @ORM\Entity
 */
class Store
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="store_id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $storeId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Address
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Address")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="address_id", referencedColumnName="address_id")
     * })
     */
    private $address;

    /**
     * @var \AppBundle\Entity\Staff
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="manager_staff_id", referencedColumnName="staff_id")
     * })
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
