<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Boutique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Boutique
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
     * @ORM\Column(name="tel", type="integer")
     */
    private $tel;

    /**
     * @var integer
     *
     * @ORM\Column(name="fax", type="integer")
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="mail", type="string", length=255)
     */
    private $mail;
    /**
     * @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Media", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\Boutique")
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
     * @return Boutique
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
     * Set tel
     *
     * @param integer $tel
     * @return Boutique
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
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

    /**
     * Get tel
     *
     * @return integer 
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param integer $fax
     * @return Boutique
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return integer 
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set mail
     *
     * @param string $mail
     * @return Boutique
     */
    public function setMail($mail)
    {
        $this->mail = $mail;

        return $this;
    }

    /**
     * Get mail
     *
     * @return string 
     */
    public function getMail()
    {
        return $this->mail;
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
    
}
