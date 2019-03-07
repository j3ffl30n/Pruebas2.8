<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 *
 * @ORM\Table(name="inventory", indexes={@ORM\Index(name="idx_fk_film_id", columns={"film_id"}), @ORM\Index(name="idx_store_id_film_id", columns={"store_id", "film_id"}), @ORM\Index(name="fk_inventory_store_idx", columns={"store_id"})})
 * @ORM\Entity
 */
class Inventory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="inventory_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $inventoryId;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Film
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Film")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="film_id", referencedColumnName="film_id")
     * })
     */
    private $film;

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
