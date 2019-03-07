<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Film
 */
class Film
{
    /**
     * @var integer
     */
    private $filmId;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \DateTime
     */
    private $releaseYear;

    /**
     * @var boolean
     */
    private $rentalDuration;

    /**
     * @var string
     */
    private $rentalRate;

    /**
     * @var integer
     */
    private $length;

    /**
     * @var string
     */
    private $replacementCost;

    /**
     * @var string
     */
    private $rating;

    /**
     * @var string
     */
    private $specialFeatures;

    /**
     * @var \DateTime
     */
    private $lastUpdate;

    /**
     * @var \AppBundle\Entity\Language
     */
    private $language;

    /**
     * @var \AppBundle\Entity\Language
     */
    private $originalLanguage;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $actor;

    /**
     * @var \Doctrine\Common\Collections\Collection
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

    /**
     * Get filmId
     *
     * @return integer 
     */
    public function getFilmId()
    {
        return $this->filmId;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Film
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Film
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set releaseYear
     *
     * @param \DateTime $releaseYear
     * @return Film
     */
    public function setReleaseYear($releaseYear)
    {
        $this->releaseYear = $releaseYear;

        return $this;
    }

    /**
     * Get releaseYear
     *
     * @return \DateTime 
     */
    public function getReleaseYear()
    {
        return $this->releaseYear;
    }

    /**
     * Set rentalDuration
     *
     * @param boolean $rentalDuration
     * @return Film
     */
    public function setRentalDuration($rentalDuration)
    {
        $this->rentalDuration = $rentalDuration;

        return $this;
    }

    /**
     * Get rentalDuration
     *
     * @return boolean 
     */
    public function getRentalDuration()
    {
        return $this->rentalDuration;
    }

    /**
     * Set rentalRate
     *
     * @param string $rentalRate
     * @return Film
     */
    public function setRentalRate($rentalRate)
    {
        $this->rentalRate = $rentalRate;

        return $this;
    }

    /**
     * Get rentalRate
     *
     * @return string 
     */
    public function getRentalRate()
    {
        return $this->rentalRate;
    }

    /**
     * Set length
     *
     * @param integer $length
     * @return Film
     */
    public function setLength($length)
    {
        $this->length = $length;

        return $this;
    }

    /**
     * Get length
     *
     * @return integer 
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * Set replacementCost
     *
     * @param string $replacementCost
     * @return Film
     */
    public function setReplacementCost($replacementCost)
    {
        $this->replacementCost = $replacementCost;

        return $this;
    }

    /**
     * Get replacementCost
     *
     * @return string 
     */
    public function getReplacementCost()
    {
        return $this->replacementCost;
    }

    /**
     * Set rating
     *
     * @param string $rating
     * @return Film
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string 
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set specialFeatures
     *
     * @param string $specialFeatures
     * @return Film
     */
    public function setSpecialFeatures($specialFeatures)
    {
        $this->specialFeatures = $specialFeatures;

        return $this;
    }

    /**
     * Get specialFeatures
     *
     * @return string 
     */
    public function getSpecialFeatures()
    {
        return $this->specialFeatures;
    }

    /**
     * Set lastUpdate
     *
     * @param \DateTime $lastUpdate
     * @return Film
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
     * Set language
     *
     * @param \AppBundle\Entity\Language $language
     * @return Film
     */
    public function setLanguage(\AppBundle\Entity\Language $language = null)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return \AppBundle\Entity\Language 
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set originalLanguage
     *
     * @param \AppBundle\Entity\Language $originalLanguage
     * @return Film
     */
    public function setOriginalLanguage(\AppBundle\Entity\Language $originalLanguage = null)
    {
        $this->originalLanguage = $originalLanguage;

        return $this;
    }

    /**
     * Get originalLanguage
     *
     * @return \AppBundle\Entity\Language 
     */
    public function getOriginalLanguage()
    {
        return $this->originalLanguage;
    }

    /**
     * Add actor
     *
     * @param \AppBundle\Entity\Actor $actor
     * @return Film
     */
    public function addActor(\AppBundle\Entity\Actor $actor)
    {
        $this->actor[] = $actor;

        return $this;
    }

    /**
     * Remove actor
     *
     * @param \AppBundle\Entity\Actor $actor
     */
    public function removeActor(\AppBundle\Entity\Actor $actor)
    {
        $this->actor->removeElement($actor);
    }

    /**
     * Get actor
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getActor()
    {
        return $this->actor;
    }

    /**
     * Add category
     *
     * @param \AppBundle\Entity\Category $category
     * @return Film
     */
    public function addCategory(\AppBundle\Entity\Category $category)
    {
        $this->category[] = $category;

        return $this;
    }

    /**
     * Remove category
     *
     * @param \AppBundle\Entity\Category $category
     */
    public function removeCategory(\AppBundle\Entity\Category $category)
    {
        $this->category->removeElement($category);
    }

    /**
     * Get category
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
