<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Facture
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Facture
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
     * @var integer
     *
     * @ORM\Column(name="quantite", type="integer")
     */
    private $quantite;

    /**
     * @var float
     *
     * @ORM\Column(name="totale", type="float")
     */
    private $totale;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Produit", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Facture")
     *  @ORM\JoinColumn(name="idproduit", referencedColumnName="id")
     */
    private $idproduit;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Commande", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Facture")
     *  @ORM\JoinColumn(name="idcomd", referencedColumnName="id")
     */
    private $idcomd;
    


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
     * Set quantite
     *
     * @param integer $quantite
     * @return Facture
     */
    public function setQuantite($quantite)
    {
        $this->quantite = $quantite;

        return $this;
    }

    /**
     * Get quantite
     *
     * @return integer 
     */
    public function getQuantite()
    {
        return $this->quantite;
    }

    /**
     * Set totale
     *
     * @param float $totale
     * @return Facture
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }
    function getIdproduit() {
        return $this->idproduit;
    }

    function getIdcomd() {
        return $this->idcomd;
    }

    function setIdproduit($idproduit) {
        $this->idproduit = $idproduit;
    }

    function setIdcomd($idcomd) {
        $this->idcomd = $idcomd;
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
    
}
