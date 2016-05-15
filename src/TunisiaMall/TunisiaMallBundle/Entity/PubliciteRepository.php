<?php
namespace TunisiaMall\TunisiaMallBundle\Entity;
use Doctrine\ORM\EntityRepository;
/**
 * visitorRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PubliciteRepository extends EntityRepository
{
     public function modify($id, $nomPub, $typePub) {
        $query = $this->getEntityManager()
                ->createQuery("Update TunisiaMallBundle:Publicite p SET p.nomPub=:nomPub,p.typePub=:typePub"
                               . " where p.id=:id ");
        $query->setParameter('id', $id);
        $query->setParameter('nomPub', $nomPub);
        $query->setParameter('typePub', $typePub);
        $query->execute();
    }
     public function supp($id) {
        $query = $this->getEntityManager()->createQuery("Delete from TunisiaMallBundle:Publicite p where p.id=:id ");
        $query->setParameter('id', $id);
        
        
        $query->execute();
    }
     public function modifyEmplacement($id, $emplacement) {
        $query = $this->getEntityManager()
                ->createQuery("Update TunisiaMallBundle:Publicite p SET p.emplacement=:emplacement"
                               . " where p.id=:id ");
        $query->setParameter('id', $id);
        $query->setParameter('emplacement', $emplacement);
        $query->execute();
    }
}