<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="customer", indexes={@ORM\Index(name="idx_fk_store_id", columns={"store_id"}), @ORM\Index(name="idx_fk_address_id", columns={"address_id"}), @ORM\Index(name="idx_last_name", columns={"last_name"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var integer
     *
     * @ORM\Column(name="customer_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $customerId;

    /**
     * @var string
     *
     * @ORM\Column(name="first_name", type="string", length=45, nullable=false)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="last_name", type="string", length=45, nullable=false)
     */
    private $lastName;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=50, nullable=true)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="active", type="boolean", nullable=false)
     */
    private $active;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="create_date", type="datetime", nullable=false)
     */
    private $createDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true)
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
     * @var \AppBundle\Entity\Store
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Store")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="store_id", referencedColumnName="store_id")
     * })
     */
    private $store;


}
