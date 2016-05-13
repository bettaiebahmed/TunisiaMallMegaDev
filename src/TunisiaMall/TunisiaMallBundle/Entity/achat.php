<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * achat
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\achatRepository")
 */
class achat
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="bought", type="string", length=255)
     */
    private $bought;

    /**
     * @var float
     *
     * @ORM\Column(name="totale", type="float")
     */
    private $totale;

    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var integer
     *
     * @ORM\Column(name="ccv", type="integer")
     */
    private $ccv;


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
     * Set bought
     *
     * @param string $bought
     * @return achat
     */
    public function setBought($bought)
    {
        $this->bought = $bought;

        return $this;
    }

    /**
     * Get bought
     *
     * @return string 
     */
    public function getBought()
    {
        return $this->bought;
    }

    /**
     * Set totale
     *
     * @param float $totale
     * @return achat
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }

    /**
     * Get totale
     *
     * @return float 
     */
    public function getTotale()
    {
        return $this->totale;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     * @return achat
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return integer 
     */
    public function getIduser()
    {
        return $this->iduser;
    }

    /**
     * Set adress
     *
     * @param string $adress
     * @return achat
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

    /**
     * Set ccv
     *
     * @param integer $ccv
     * @return achat
     */
    public function setCcv($ccv)
    {
        $this->ccv = $ccv;

        return $this;
    }

    /**
     * Get ccv
     *
     * @return integer 
     */
    public function getCcv()
    {
        return $this->ccv;
    }
}
