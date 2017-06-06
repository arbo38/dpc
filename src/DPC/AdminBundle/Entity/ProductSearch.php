<?php

namespace DPC\AdminBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductSearch
 *
 * @ORM\Table(name="product_search")
 * @ORM\Entity(repositoryClass="DPC\AdminBundle\Repository\ProductSearchRepository")
 */
class ProductSearch
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=true)
     */
    private $title;

    /**
     * @var bool
     *
     * @ORM\Column(name="occasion", type="boolean", nullable=true)
     */
    private $occasion;

    /**
     * @var bool
     *
     * @ORM\Column(name="promo", type="boolean", nullable=true)
     */
    private $promo;

    /**
     * @ORM\OneToOne(targetEntity="DPC\StoreBundle\Entity\Category")
     */
    private $category;

    /**
     * @ORM\OneToOne(targetEntity="DPC\StoreBundle\Entity\Brand")
     */
    private $brand;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return ProductSearch
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set occasion
     *
     * @param boolean $occasion
     *
     * @return ProductSearch
     */
    public function setOccasion($occasion)
    {
        $this->occasion = $occasion;

        return $this;
    }

    /**
     * Get occasion
     *
     * @return bool
     */
    public function getOccasion()
    {
        return $this->occasion;
    }

    /**
     * Set promo
     *
     * @param boolean $promo
     *
     * @return ProductSearch
     */
    public function setPromo($promo)
    {
        $this->promo = $promo;

        return $this;
    }

    /**
     * Get promo
     *
     * @return bool
     */
    public function getPromo()
    {
        return $this->promo;
    }

    /**
     * Set category
     *
     * @param \DPC\StoreBundle\Entity\Category $category
     *
     * @return ProductSearch
     */
    public function setCategory(\DPC\StoreBundle\Entity\Category $category = null)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \DPC\StoreBundle\Entity\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set brand
     *
     * @param \DPC\StoreBundle\Entity\Brand $brand
     *
     * @return ProductSearch
     */
    public function setBrand(\DPC\StoreBundle\Entity\Brand $brand = null)
    {
        $this->brand = $brand;

        return $this;
    }

    /**
     * Get brand
     *
     * @return \DPC\StoreBundle\Entity\Brand
     */
    public function getBrand()
    {
        return $this->brand;
    }
}
