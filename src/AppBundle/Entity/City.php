<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * City
 *
 * @ORM\Table(name="city", indexes={@ORM\Index(name="idx_fk_country_id", columns={"country_id"})})
 * @ORM\Entity
 */
class City
{
    /**
     * @var integer
     *
     * @ORM\Column(name="city_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $cityId;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=50, nullable=false)
     */
    private $city;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Country
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Country")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="country_id", referencedColumnName="country_id")
     * })
     */
    private $country;


}
