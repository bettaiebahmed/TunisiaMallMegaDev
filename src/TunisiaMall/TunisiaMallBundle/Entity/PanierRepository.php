<?php

namespace TunisiaMall\TunisiaMallBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * ArticleRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class PanierRepository extends EntityRepository {

    public function ajouter($ref,$nom,$prix,$iduser) {

      $query = $this->getEntityManager()
        ->createQuery("Insert into TunisiaMallBundle:Panier Values('',':ref',':nom',':prix',':iduser') ");
        $query->setParameter('ref', $ref);
        $query->setParameter('nom', $nom);
        $query->setParameter('prix', $prix);
        $query->setParameter('iduser', $iduser);
        

        $query->execute();
    }
    public function search($idenseigne) {

        $query = $this->createQueryBuilder('TunisiaMallBundle:Media')
                ->select('a.ref,a.nom,a.prix,a.id')
                ->distinct()
                ->from('TunisiaMallBundle:Panier', 'a')
                              
                ->where('a.iduser=:idenseigne')
                ->setParameter('idenseigne', $idenseigne);
                
        return $query->getQuery()->getResult();
    }
      public function totale($idenseigne) {

        $query = $this->createQueryBuilder('TunisiaMallBundle:Media')
                ->select('sum(a.totale) as totale')
                ->from('TunisiaMallBundle:Panier', 'a')
                              
                ->where('a.iduser=:idenseigne')
                ->setParameter('idenseigne', $idenseigne);
                
        return $query->getQuery()->getResult();
    }
     public function supp($id) {
        $query = $this->getEntityManager()->createQuery("Delete from TunisiaMallBundle:Panier a where a.id=:id ");
        $query->setParameter('id', $id);
        
        
        $query->execute();
    }
    public function suppFinale($id) {
        $query = $this->getEntityManager()->createQuery("Delete from TunisiaMallBundle:Panier a where a.iduser=:id ");
        $query->setParameter('id', $id);
        
        
        $query->execute();
    }
   
}
