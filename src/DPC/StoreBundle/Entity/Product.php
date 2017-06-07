<?php

namespace DPC\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity(repositoryClass="DPC\StoreBundle\Repository\ProductRepository")
 * @ORM\HasLifecycleCallbacks()
 */

class Product
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
     * @ORM\Column(name="title", type="string", length=255)
     */
    private $title;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="datetimetz")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updateDate", type="datetimetz", nullable=true)
     */
    private $updateDate;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=2)
     */
    private $price;

    /**
     * @var int
     * La réduction exprimé en pourcentage
     * @ORM\Column(name="discount", type="integer", nullable=true)
     */
    private $discount = null;

    /**
     * @var bool
     *
     * @ORM\Column(name="occasion", type="boolean")
     */
    private $occasion = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="promo", type="boolean")
     */
    private $promo = false;

    /**
     * @var bool
     *
     * @ORM\Column(name="warranty", type="integer")
     */
    private $warranty = 3;

    /**
     * @ORM\ManyToOne(targetEntity="DPC\StoreBundle\Entity\Brand", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $brand;

    /**
     * @ORM\ManyToMany(targetEntity="DPC\StoreBundle\Entity\Image", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Assert\Valid()
     */
    private $images;

    /**
     * @ORM\ManyToMany(targetEntity="DPC\StoreBundle\Entity\Category", inversedBy="products")
     * @ORM\JoinColumn(nullable=false)
     */
    private $categories;

    public function __construct(){
        $this->date = new \DateTime();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
        $this->images = new \Doctrine\Common\Collections\ArrayCollection();
    }

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
     * @return Product
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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Product
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set updateDate
     *
     * @param \DateTime $updateDate
     *
     * @return Product
     */
    public function setUpdateDate($updateDate)
    {
        $this->updateDate = $updateDate;

        return $this;
    }

    /**
     * Get updateDate
     *
     * @return \DateTime
     */
    public function getUpdateDate()
    {
        return $this->updateDate;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescriptionExcerpt()
    {
        return (substr($this->description, 0, 200) . '...'); 
    }

    /**
     * Set price
     *
     * @param string $price
     *
     * @return Product
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    public function getPriceBeforeDiscount(){
        return $this->price * (float) ('1.' . $this->discount);
    }

    /**
     * Set discount
     *
     * @param integer $discount
     *
     * @return Product
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return int
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set occasion
     *
     * @param boolean $occasion
     *
     * @return Product
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
     * @return Product
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
     * Set brand
     *
     * @param \DPC\StoreBundle\Entity\Brand $brand
     *
     * @return Product
     */
    public function setBrand(\DPC\StoreBundle\Entity\Brand $brand)
    {
        $this->brand = $brand;
        $brand->addProduct($this);

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

    /**
     * Add image
     *
     * @param \DPC\StoreBundle\Entity\Image $image
     *
     * @return Product
     */
    public function addImage(\DPC\StoreBundle\Entity\Image $image = null)
    {
        if(!is_null($image)){
            $this->images[] = $image;
        }
        

        return $this;
    }

    /**
     * Remove image
     *
     * @param \DPC\StoreBundle\Entity\Image $image
     */
    public function removeImage(\DPC\StoreBundle\Entity\Image $image)
    {
        $this->images->removeElement($image);
    }

    /**
     * Get images
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * Set warranty
     *
     * @param integer $warranty
     *
     * @return Product
     */
    public function setWarranty($warranty)
    {
        $this->warranty = $warranty;

        return $this;
    }

    /**
     * Get warranty
     *
     * @return integer
     */
    public function getWarranty()
    {
        return $this->warranty;
    }

    /**
     * Add category
     *
     * @param \DPC\StoreBundle\Entity\Category $category
     *
     * @return Product
     */
    public function addCategory(\DPC\StoreBundle\Entity\Category $category)
    {
        $this->categories[] = $category;
        $category->addProduct($this);
        return $this;
    }

    /**
     * Remove category
     *
     * @param \DPC\StoreBundle\Entity\Category $category
     */
    public function removeCategory(\DPC\StoreBundle\Entity\Category $category)
    {
        $this->categories->removeElement($category);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getCategories()
    {
        return $this->categories;
    }

    public function getFirstCategory(){
        return reset($this->categories);
    }

}
