<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Statistique
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Statistique
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
     * @ORM\Column(name="new", type="integer")
     */
    private $new;

    /**
     * @var integer
     *
     * @ORM\Column(name="retu", type="integer")
     */
    private $retu;

    /**
     * @var integer
     *
     * @ORM\Column(name="totale", type="integer")
     */
    private $totale;


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
     * Set new
     *
     * @param integer $new
     * @return Statistique
     */
    public function setNew($new)
    {
        $this->new = $new;

        return $this;
    }

    /**
     * Get new
     *
     * @return integer 
     */
    public function getNew()
    {
        return $this->new;
    }

    /**
     * Set retu
     *
     * @param integer $retu
     * @return Statistique
     */
    public function setRetu($retu)
    {
        $this->retu = $retu;

        return $this;
    }

    /**
     * Get retu
     *
     * @return integer 
     */
    public function getRetu()
    {
        return $this->retu;
    }

    /**
     * Set totale
     *
     * @param integer $totale
     * @return Statistique
     */
    public function setTotale($totale)
    {
        $this->totale = $totale;

        return $this;
    }

    /**
     * Get totale
     *
     * @return integer 
     */
    public function getTotale()
    {
        return $this->totale;
    }
}
