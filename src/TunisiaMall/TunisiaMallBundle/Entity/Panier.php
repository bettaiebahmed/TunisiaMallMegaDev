<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Panier
 *
 * @ORM\Table()
 * @ORM\Entity
 *@ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\PanierRepository")

 */
class Panier
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
     * @ORM\Column(name="ref", type="string")
     */
    private $ref;

    /**
     * @var integer
     *
     * @ORM\Column(name="nom", type="string")
     */
    private $nom;
 /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="float")
     */
    private $prix;
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;
    /**
     * @var string
     *
     * @ORM\Column(name="qte", type="string")
     */
    private $qte;
     /**
     * @var float
     *
     * @ORM\Column(name="totale", type="float")
     */
    private $totale=0;
    function getTotale() {
        return $this->totale;
    }

    function setTotale($totale) {
        $this->totale = $totale;
    }

       
    function getRef() {
        return $this->ref;
    }

    function getNom() {
        return $this->nom;
    }

    function getPrix() {
        return $this->prix;
    }

    function getIduser() {
        return $this->iduser;
    }

    function setRef($ref) {
        $this->ref = $ref;
    }

    function setNom($nom) {
        $this->nom = $nom;
    }

    function setPrix($prix) {
        $this->prix = $prix;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }
    function getQte() {
        return $this->qte;
    }

    function setQte($qte) {
        $this->qte = $qte;
    }



}
