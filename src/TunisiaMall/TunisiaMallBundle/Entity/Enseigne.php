<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enseigne
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\EnseigneRepository")

 */
class Enseigne
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;
    /**
     * @var integer
     *
     * @ORM\Column(name="iduser", type="integer")
     */
    private $iduser;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Media", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Enseigne")
     *  @ORM\JoinColumn(name="image", referencedColumnName="id")
     */
    private $image;


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
     * Set nom
     *
     * @param string $nom
     * @return Enseigne
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
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
    function getIduser() {
        return $this->iduser;
    }

    function setIduser($iduser) {
        $this->iduser = $iduser;
    }

}
