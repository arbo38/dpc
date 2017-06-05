<?php

namespace DPC\StoreBundle\Repository;

use Doctrine\ORM\Tools\Pagination\Paginator;

/**
 * ProductRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ProductRepository extends \Doctrine\ORM\EntityRepository
{

	public function getProductDetail($id){
		$qb = $this->createQueryBuilder('p');

		$query = $qb
		->where('p.id = :id')
    	->setParameter('id', $id)
		->innerJoin('p.images', 'i')
      	->addSelect('i')
		->getQuery();

		return $query->getOneOrNullResult();
	}

	public function getCurrentSelection($limit = 9){
		$qb = $this->createQueryBuilder('p');

		$query = $qb
		->innerJoin('p.images', 'i')
      	->addSelect('i')
      	->orderBy('p.id', 'DESC')
      	->setMaxResults($limit)
		->getQuery();

		return $query->getResult();
	}

	public function getCatalogueProducts($page, $nbPerPage){
		$query = $this->createQueryBuilder('p')
	      ->leftJoin('p.images', 'i')
	      ->addSelect('i')
	      ->leftJoin('p.categories', 'c')
	      ->addSelect('c')
	      ->leftJoin('p.brand', 'b')
	      ->addSelect('c')
	      ->orderBy('p.id', 'DESC')
	      ->getQuery();

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	public function getPromotionsProducts($page, $nbPerPage){
		$query = $this->createQueryBuilder('p')
		  ->andWhere('p.promo = true')
	      ->leftJoin('p.images', 'i')
	      ->addSelect('i')
	      ->leftJoin('p.categories', 'c')
	      ->addSelect('c')
	      ->leftJoin('p.brand', 'b')
	      ->addSelect('c')
	      ->orderBy('p.id', 'DESC')
	      ->getQuery();

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	public function getOccasionsProducts($page, $nbPerPage){
		$query = $this->createQueryBuilder('p')
		  ->andWhere('p.occasion = true')
	      ->leftJoin('p.images', 'i')
	      ->addSelect('i')
	      ->leftJoin('p.categories', 'c')
	      ->addSelect('c')
	      ->leftJoin('p.brand', 'b')
	      ->addSelect('c')
	      ->orderBy('p.id', 'DESC')
	      ->getQuery();

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	// Admin
	
	public function adminGetPromotionsProducts(){
		$query = $this->createQueryBuilder('p')
		  ->andWhere('p.promo = true')
	      ->leftJoin('p.images', 'i')
	      ->addSelect('i')
	      ->leftJoin('p.categories', 'c')
	      ->addSelect('c')
	      ->leftJoin('p.brand', 'b')
	      ->addSelect('c')
	      ->orderBy('p.id', 'DESC')
	      ->getQuery();


    	return $query->getResult();
	}
}
