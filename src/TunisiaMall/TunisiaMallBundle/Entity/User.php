<?php
namespace TunisiaMall\TunisiaMallBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
/**
* @ORM\Entity
* @ORM\Table(name="fos_user")
 *@ORM\Entity(repositoryClass="TunisiaMall\TunisiaMallBundle\Entity\UserRepository")

*/
class User extends BaseUser
{
/**
* @ORM\Id
* @ORM\Column(type="integer")
* @ORM\GeneratedValue(strategy="AUTO")
*/
protected $id;
/**
* @ORM\Column(type="string")
* 
*/
private $nom; 
/**
* @ORM\Column(type="string")
* 
*/
private $prenom; 
/**
* @ORM\Column(type="string")
* 
*/
private $boutique; 
/**
* @ORM\Column(type="string")
* 
*/
private $valide="Invalide";
/**
* 
* 
* @ORM\Column(type="integer")
*/
private $cin;
    
/**
* @var string
*
* @ORM\Column(name="adresse", type="text", length=255)
*/
private $adresse;
    
/**
* @ORM\OneToOne(targetEntity="TunisiaMall\TunisiaMallBundle\Entity\Media", cascade={"persist","remove"},mappedBy="TunisiaMall\TunisiaMallBundle\Entity\User")
*  @ORM\JoinColumn(name="image", referencedColumnName="id")
*/
private $image;

public function __construct()
{
parent::__construct();
// your own logic
}
function getNom() {
    return $this->nom;
}

function getPrenom() {
    return $this->prenom;
}

function getBoutique() {
    return $this->boutique;
}

function setNom($nom) {
    $this->nom = $nom;
}

function setPrenom($prenom) {
    $this->prenom = $prenom;
}

function setBoutique($boutique) {
    $this->boutique = $boutique;
}

function getValide() {
    return $this->valide;
}

function setValide($valide) {
    $this->valide = $valide;
}

function getCin() {
    return $this->cin;
}

function getAdresse() {
    return $this->adresse;
}
/**
     * Get image
     *
     * @return \TunisiaMall\TunisiaMallBundle\Entity\Media 
     */
function getImage() {
    return $this->image;
}

function setCin($cin) {
    $this->cin = $cin;
}

function setAdresse($adresse) {
    $this->adresse = $adresse;
}
/**
     * Set image
     *
     * @param \TunisiaMall\TunisiaMallBundle\Entity\Media $image
     * @return Produits
     */
function setImage(\TunisiaMall\TunisiaMallBundle\Entity\Media $image) {
    $this->image = $image;
}



}
?>
