<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rental
 *
 * @ORM\Table(name="rental", uniqueConstraints={@ORM\UniqueConstraint(name="idx_rental", columns={"rental_date", "inventory_id", "customer_id"})}, indexes={@ORM\Index(name="idx_fk_inventory_id", columns={"inventory_id"}), @ORM\Index(name="idx_fk_customer_id", columns={"customer_id"}), @ORM\Index(name="idx_fk_staff_id", columns={"staff_id"})})
 * @ORM\Entity
 */
class Rental
{
    /**
     * @var integer
     *
     * @ORM\Column(name="rental_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $rentalId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="rental_date", type="datetime", nullable=false)
     */
    private $rentalDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="return_date", type="datetime", nullable=true)
     */
    private $returnDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="customer_id", referencedColumnName="customer_id")
     * })
     */
    private $customer;

    /**
     * @var \AppBundle\Entity\Inventory
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Inventory")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="inventory_id", referencedColumnName="inventory_id")
     * })
     */
    private $inventory;

    /**
     * @var \AppBundle\Entity\Staff
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Staff")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="staff_id", referencedColumnName="staff_id")
     * })
     */
    private $staff;


}
