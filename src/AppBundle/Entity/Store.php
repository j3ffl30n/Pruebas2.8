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


}
