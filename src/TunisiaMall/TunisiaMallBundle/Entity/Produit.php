<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Produit
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\ProduitRepository")
 */
class Produit
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
     * @ORM\Column(name="idenseigne", type="string")
     * 
     * 
     */
    private $idenseigne;

    /**
     * @var string
     *
     * @ORM\Column(name="ref", type="string", length=255)
     */
    private $ref;
     /**
     * @var string
     *
     * @ORM\Column(name="nom_categorie", type="string", length=255)
     */
    private $nom_categorie;

    /**
     * @var string
     *
     * @ORM\Column(name="nomProduit", type="string", length=255)
     */
    private $nomProduit;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=255)
     */
    private $description;
     /**
     * @var string
     *
     * @ORM\Column(name="TypeProduit", type="string", length=255)
     */
    private $typeProduit;
    /**
     * @var float
     *
     * @ORM\Column(name="prixdetaille", type="float")
     */
    private $prixdetaille;
 
    /**
     * @var integer
     *
     * @ORM\Column(name="QuantiteStock", type="integer")
     */
    private $quantiteStock;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Media", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Produit")
     *  @ORM\JoinColumn(name="image", referencedColumnName="id")
     */
    private $image;

    /**
     * @var float
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @var float
     *
     * @ORM\Column(name="prixGros", type="float")
     */
    private $prixGros;


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
     * Set ref
     *
     * @param string $ref
     * @return Produit
     */
    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }

    /**
     * Get ref
     *
     * @return string 
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Set nomProduit
     *
     * @param string $nomProduit
     * @return Produit
     */
    public function setNomProduit($nomProduit)
    {
        $this->nomProduit = $nomProduit;

        return $this;
    }

    /**
     * Get nomProduit
     *
     * @return string 
     */
    public function getNomProduit()
    {
        return $this->nomProduit;
    }
     
    
    /**
     * Set description
     *
     * @param string $description
     * @return Produit
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
     * Set quantiteStock
     *
     * @param integer $quantiteStock
     * @return Produit
     */
    public function setQuantiteStock($quantiteStock)
    {
        $this->quantiteStock = $quantiteStock;

        return $this;
    }

    /**
     * Get quantiteStock
     *
     * @return integer 
     */
    public function getQuantiteStock()
    {
        return $this->quantiteStock;
    }

    /**
     * Set prix
     *
     * @param float $prix
     * @return Produit
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;

        return $this;
    }

    /**
     * Get prix
     *
     * @return float 
     */
    public function getPrix()
    {
        return $this->prix;
    }
    /**
     * Set image
     *
     * @param \TunisiaMall\TunisiaMallBundle\Entity\Media $image
     * @return Produits
     */
    public function setImage(\TunisiaMall\TunisiaMallBundle\Entity\Media $image)
    {
        $this->image = $image;
        return $this;
    }
    function getnomCategorie() {
        return $this->nom_categorie;
    }

    function getIdenseigne() {
        return $this->idenseigne;
    }

    function setnomcategorie($nom_categorie) {
        $this->nom_categorie = $nom_categorie;
    }

    function setIdenseigne($idenseigne) {
        $this->idenseigne = $idenseigne;
    }

           /**
     * Get image
     *
     * @return \TunisiaMall\TunisiaMallBundle\Entity\Media 
     */
    public function getImage()
    {
        return $this->image;
    }
    function getPrixGros() {
        return $this->prixGros;
    }

    function setPrixGros($prixGros) {
        $this->prixGros = $prixGros;
    }
    function getTypeProduit() {
        return $this->typeProduit;
    }

    function setTypeProduit($typeProduit) {
        $this->typeProduit = $typeProduit;
    }
    function getPrixdetaille() {
        return $this->prixdetaille;
    }

    function setPrixdetaille($prixdetaille) {
        $this->prixdetaille = $prixdetaille;
    }





}
