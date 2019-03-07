<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FilmText
 *
 * @ORM\Table(name="film_text", indexes={@ORM\Index(name="idx_title_description", columns={"title", "description"})})
 * @ORM\Entity
 */
class FilmText
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


}
