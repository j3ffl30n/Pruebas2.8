<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilmText
 */
class FilmText
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
     * @return FilmText
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
     * @return FilmText
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
}
