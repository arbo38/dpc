<?php

namespace DPC\ServiceBundle\Repository;

/**
 * ServiceCategoryRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ServiceCategoryRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllServiceCategory(){
		$qb = $this->createQueryBuilder('sc');

		$query = $qb
		->leftJoin('sc.image', 'i')
	    ->addSelect('i')
	    ->leftJoin('sc.services', 's')
	    ->addSelect('s')
		->getQuery();

		return $query->getResult();
	}

	public function findServiceCategory($id){
		$qb = $this->createQueryBuilder('sc');

		$query = $qb
		->andWhere('sc.id = :id')
	    ->setParameter('id', $id)
	    ->leftJoin('sc.services', 's')
	    ->addSelect('s')
	    ->leftJoin('s.image', 'i')
	    ->addSelect('i')
		->getQuery();

		return $query->getOneOrNullResult();
	}
}
