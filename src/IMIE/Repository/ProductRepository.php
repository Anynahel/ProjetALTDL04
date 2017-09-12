<?php

namespace IMIE\Repository;

use IMIE\Repository\Repository;

class ProductRepository extends \Doctrine\ORM\EntityRepository 
{

    public function findLast($limit) {

        return $this->getEntityManager()
        ->createQueryBuilder()
        ->select('b')
        ->from('IMIEBundle:Product', 'b')
        // ->innerJoin('b.author', 'a')
        // ->orderBy('b.createdAt', 'DESC')
        ->setMaxResults($limit)
        ->getQuery()
        ->getResult();
    }

    public function findProduct($expression) {
        $qb = $this->getEntityManager()->createQueryBuilder();
        $query = $qb->select('b')
        ->from('IMIEBundle:Product', 'b')
        ->where($qb->expr()->like('b.title', ':expression'))
        ->orderBy('b.title', 'ASC')
        ->setParameter('expression', '%' . $expression . '%');

        return $query->getQuery()->getResult();
    }

}
