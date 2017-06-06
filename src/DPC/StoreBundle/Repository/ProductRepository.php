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
		->leftJoin('p.images', 'i')
	    ->addSelect('i')
	    ->innerJoin('p.categories', 'c')
	    ->addSelect('c')
	    ->leftJoin('p.brand', 'b')
	    ->addSelect('c')
		->getQuery();

		return $query->getOneOrNullResult();
	}

	public function getCurrentSelection($limit = 9){
		$qb = $this->createQueryBuilder('p');

		$query = $qb
		->leftJoin('p.images', 'i')
	    ->addSelect('i')
	    ->leftJoin('p.categories', 'c')
	    ->addSelect('c')
	    ->leftJoin('p.brand', 'b')
	    ->addSelect('c')
      	->orderBy('p.id', 'DESC')
      	->setMaxResults($limit)
		->getQuery();

		return $query->getResult();
	}

	public function getCatalogueProducts($page = null, $nbPerPage = null){
		$query = $this->createQueryBuilder('p')
	      ->leftJoin('p.images', 'i')
	      ->addSelect('i')
	      ->leftJoin('p.categories', 'c')
	      ->addSelect('c')
	      ->leftJoin('p.brand', 'b')
	      ->addSelect('c')
	      ->orderBy('p.id', 'DESC')
	      ->getQuery();

	    if(is_null($page) && is_null($nbPerPage)){
	    	return $query->getResult();
	    }

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	public function getPromotionsProducts($page = null, $nbPerPage = null){
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

	    if(is_null($page) && is_null($nbPerPage)){
	    	return $query->getResult();
	    }

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	public function getOccasionsProducts($page = null, $nbPerPage = null){
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

	    if(is_null($page) && is_null($nbPerPage)){
	    	return $query->getResult();
	    }

	    $query
	      ->setFirstResult(($page-1) * $nbPerPage)
	      ->setMaxResults($nbPerPage);

    	return new Paginator($query, true);
	}

	public function search($title, $occasion, $promo, $category, $brand){
		$query = $this->createQueryBuilder('p');
	      if(!is_null($title)){
	      	$query
	      	->andWhere('p.title LIKE :zbra')
	      	->setParameter('zbra', $title);
	      }
	      if(!is_null($promo)){
	      	$query
	      	->andWhere('p.promo = true');
	      }
	      if(!is_null($promo)){
	      	$query
	      	->andWhere('p.promo = true');
	      }
	      if(!is_null($occasion)){
	      	$query
	      	->andWhere('p.occasion = true');
	      }
	      if(!is_null($category)){
	      	$query
	      	->leftJoin('p.categories', 'c')
	      	->addSelect('c')
	      	->andWhere('c.id = :category')
	      	->setParameter('category', $category->getId());
	      }
	      if(!is_null($brand)){
	      	$query
	      	->andWhere('p.brand = :brand')
	      	->setParameter('brand', $brand);
	      }

	    $query->orderBy('p.id', 'DESC');

	    return $query->getQuery()->getResult();

	}
}
