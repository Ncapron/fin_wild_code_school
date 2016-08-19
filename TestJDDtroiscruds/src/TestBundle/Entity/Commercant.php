<?php

namespace TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commercant
 */
class Commercant
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $boutique;

    /**
     * @var string
     */
    private $responsable;

    /**
     * @var string
     */
    private $adresse;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set boutique
     *
     * @param string $boutique
     * @return Commercant
     */
    public function setBoutique($boutique)
    {
        $this->boutique = $boutique;

        return $this;
    }

    /**
     * Get boutique
     *
     * @return string 
     */
    public function getBoutique()
    {
        return $this->boutique;
    }

    /**
     * Set responsable
     *
     * @param string $responsable
     * @return Commercant
     */
    public function setResponsable($responsable)
    {
        $this->responsable = $responsable;

        return $this;
    }

    /**
     * Get responsable
     *
     * @return string 
     */
    public function getResponsable()
    {
        return $this->responsable;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return Commercant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}
