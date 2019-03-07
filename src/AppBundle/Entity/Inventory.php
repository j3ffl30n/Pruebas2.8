<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventory
 */
class Inventory
{
    /**
     * @var integer
     */
    private $inventoryId;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Film
     */
    private $film;

    /**
     * @var \AppBundle\Entity\Store
     */
    private $store;


    /**
     * Get inventoryId
     *
     * @return integer 
     */
    public function getInventoryId()
    {
        return $this->inventoryId;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Inventory
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
     * Set film
     *
     * @param \AppBundle\Entity\Film $film
     * @return Inventory
     */
    public function setFilm(\AppBundle\Entity\Film $film = null)
    {
        $this->film = $film;

        return $this;
    }

    /**
     * Get film
     *
     * @return \AppBundle\Entity\Film 
     */
    public function getFilm()
    {
        return $this->film;
    }

    /**
     * Set store
     *
     * @param \AppBundle\Entity\Store $store
     * @return Inventory
     */
    public function setStore(\AppBundle\Entity\Store $store = null)
    {
        $this->store = $store;

        return $this;
    }

    /**
     * Get store
     *
     * @return \AppBundle\Entity\Store 
     */
    public function getStore()
    {
        return $this->store;
    }
}
