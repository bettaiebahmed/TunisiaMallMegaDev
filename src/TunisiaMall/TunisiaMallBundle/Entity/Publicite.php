<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Publicite
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Publicite
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
     * @ORM\Column(name="nomPub", type="string", length=255)
     */
    private $nomPub;

    /**
     * @var string
     *
     * @ORM\Column(name="typePub", type="string", length=255)
     */
    private $typePub;


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
     * Set nomPub
     *
     * @param string $nomPub
     * @return Publicite
     */
    public function setNomPub($nomPub)
    {
        $this->nomPub = $nomPub;

        return $this;
    }

    /**
     * Get nomPub
     *
     * @return string 
     */
    public function getNomPub()
    {
        return $this->nomPub;
    }

    /**
     * Set typePub
     *
     * @param string $typePub
     * @return Publicite
     */
    public function setTypePub($typePub)
    {
        $this->typePub = $typePub;

        return $this;
    }

    /**
     * Get typePub
     *
     * @return string 
     */
    public function getTypePub()
    {
        return $this->typePub;
    }
}
