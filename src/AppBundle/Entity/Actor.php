<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Actor
 *
 * @ORM\Table(name="actor", indexes={@ORM\Index(name="idx_actor_last_name", columns={"last_name"})})
 * @ORM\Entity
 */
class Actor
{
    /**
     * @var integer
     *
     * @ORM\Column(name="actor_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $actorId;

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
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Film", inversedBy="actor")
     * @ORM\JoinTable(name="film_actor",
     *   joinColumns={
     *     @ORM\JoinColumn(name="actor_id", referencedColumnName="actor_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="film_id", referencedColumnName="film_id")
     *   }
     * )
     */
    private $film;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->film = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
