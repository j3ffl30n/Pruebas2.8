<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payment
 *
 * @ORM\Table(name="payment", indexes={@ORM\Index(name="idx_fk_staff_id", columns={"staff_id"}), @ORM\Index(name="idx_fk_customer_id", columns={"customer_id"}), @ORM\Index(name="fk_payment_rental_idx", columns={"rental_id"})})
 * @ORM\Entity
 */
class Payment
{
    /**
     * @var integer
     *
     * @ORM\Column(name="payment_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $paymentId;

    /**
     * @var string
     *
     * @ORM\Column(name="amount", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $amount;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="payment_date", type="datetime", nullable=false)
     */
    private $paymentDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=true)
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
     * @var \AppBundle\Entity\Rental
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Rental")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rental_id", referencedColumnName="rental_id")
     * })
     */
    private $rental;

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
