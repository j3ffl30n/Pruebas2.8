<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 *
 * @ORM\Table(name="film", indexes={@ORM\Index(name="idx_title", columns={"title"}), @ORM\Index(name="idx_fk_language_id", columns={"language_id"}), @ORM\Index(name="idx_fk_original_language_id", columns={"original_language_id"})})
 * @ORM\Entity
 */
class Film
{
    /**
     * @var integer
     *
     * @ORM\Column(name="film_id", type="smallint")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $filmId;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", length=65535, nullable=true)
     */
    private $description;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="release_year", type="date", nullable=true)
     */
    private $releaseYear;

    /**
     * @var boolean
     *
     * @ORM\Column(name="rental_duration", type="boolean", nullable=false)
     */
    private $rentalDuration;

    /**
     * @var string
     *
     * @ORM\Column(name="rental_rate", type="decimal", precision=4, scale=2, nullable=false)
     */
    private $rentalRate;

    /**
     * @var integer
     *
     * @ORM\Column(name="length", type="smallint", nullable=true)
     */
    private $length;

    /**
     * @var string
     *
     * @ORM\Column(name="replacement_cost", type="decimal", precision=5, scale=2, nullable=false)
     */
    private $replacementCost;

    /**
     * @var string
     *
     * @ORM\Column(name="rating", type="string", nullable=true)
     */
    private $rating;

    /**
     * @var string
     *
     * @ORM\Column(name="special_features", type="string", nullable=true)
     */
    private $specialFeatures;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_update", type="datetime", nullable=false)
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Language
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="language_id", referencedColumnName="language_id")
     * })
     */
    private $language;

    /**
     * @var \AppBundle\Entity\Language
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Language")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="original_language_id", referencedColumnName="language_id")
     * })
     */
    private $originalLanguage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Actor", mappedBy="film")
     */
    private $actor;

    /**
     * @var \Doctrine\Common\Collections\Collection
     *
     * @ORM\ManyToMany(targetEntity="AppBundle\Entity\Category", inversedBy="film")
     * @ORM\JoinTable(name="film_category",
     *   joinColumns={
     *     @ORM\JoinColumn(name="film_id", referencedColumnName="film_id")
     *   },
     *   inverseJoinColumns={
     *     @ORM\JoinColumn(name="category_id", referencedColumnName="category_id")
     *   }
     * )
     */
    private $category;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->actor = new \Doctrine\Common\Collections\ArrayCollection();
        $this->category = new \Doctrine\Common\Collections\ArrayCollection();
    }

}
