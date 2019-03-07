<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Staff
 *
 * @ORM\Table(name="staff", indexes={@ORM\Index(name="idx_fk_store_id", columns={"store_id"}), @ORM\Index(name="idx_fk_address_id", columns={"address_id"})})
 * @ORM\Entity
 */
class Staff
{
    /**
     * @var boolean
     *
     * @ORM\Column(name="staff_id", type="boolean")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $staffId;

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
     * @ORM\Column(name="picture", type="blob", length=65535, nullable=true)
     */
    private $picture;

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
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=16, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=40, nullable=true)
     */
    private $password;

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
     * @var \AppBundle\Entity\Store
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Store")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="store_id", referencedColumnName="store_id")
     * })
     */
    private $store;


}
