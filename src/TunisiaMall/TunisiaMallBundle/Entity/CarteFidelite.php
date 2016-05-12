<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CarteFidelite
 *
 * @ORM\Table()
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\CarteFideliteRepository")
 */
class CarteFidelite
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
     * @ORM\Column(name="num", type="integer")
     */
    private $num;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="validite", type="datetime")
     */
    private $validite;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbrePoint", type="integer")
     */
    private $nbrePoint;

    /**
     * @var string
     *
     * @ORM\Column(name="idboutique", type="string")
     */
    private $idboutique;

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
     * Set num
     *
     * @param integer $num
     * @return CarteFidelite
     */
    public function setNum($num)
    {
        $this->num = $num;

        return $this;
    }

    /**
     * Get num
     *
     * @return integer 
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * Set validite
     *
     * @param \DateTime $validite
     * @return CarteFidelite
     */
    public function setValidite($validite)
    {
        $this->validite = $validite;

        return $this;
    }

    /**
     * Get validite
     *
     * @return \DateTime 
     */
    public function getValidite()
    {
        return $this->validite;
    }

    /**
     * Set nbrePoint
     *
     * @param integer $nbrePoint
     * @return CarteFidelite
     */
    public function setNbrePoint($nbrePoint)
    {
        $this->nbrePoint = $nbrePoint;

        return $this;
    }

    /**
     * Get nbrePoint
     *
     * @return integer 
     */
    public function getNbrePoint()
    {
        return $this->nbrePoint;
    }
    function getIdboutique() {
        return $this->idboutique;
    }

    function setIdboutique($idboutique) {
        $this->idboutique = $idboutique;
    }


}
