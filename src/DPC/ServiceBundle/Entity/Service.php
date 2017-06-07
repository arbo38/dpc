<?php

namespace DPC\ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Service
 *
 * @ORM\Table(name="service")
 * @ORM\Entity(repositoryClass="DPC\ServiceBundle\Repository\ServiceRepository")
 */
class Service
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
     * @var string
     *
     * @ORM\Column(name="short_description", type="text")
     */
    private $shortDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="long_description", type="text")
     */
    private $longDescription;

    /**
     * @var float
     *
     * @ORM\Column(name="price_min", type="float")
     */
    private $priceMin;

    /**
     * @ORM\ManyToOne(targetEntity="DPC\ServiceBundle\Entity\ServiceCategory", inversedBy="services")
     * @ORM\JoinColumn(nullable=false)
     */
    private $category;

    /**
     * @ORM\OneToOne(targetEntity="DPC\StoreBundle\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $image;


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
     * @return Service
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
     * Set shortDescription
     *
     * @param string $shortDescription
     *
     * @return Service
     */
    public function setShortDescription($shortDescription)
    {
        $this->shortDescription = $shortDescription;

        return $this;
    }

    /**
     * Get shortDescription
     *
     * @return string
     */
    public function getShortDescription()
    {
        return $this->shortDescription;
    }

    /**
     * Set longDescription
     *
     * @param string $longDescription
     *
     * @return Service
     */
    public function setLongDescription($longDescription)
    {
        $this->longDescription = $longDescription;

        return $this;
    }

    /**
     * Get longDescription
     *
     * @return string
     */
    public function getLongDescription()
    {
        return $this->longDescription;
    }

    /**
     * Set priceMin
     *
     * @param float $priceMin
     *
     * @return Service
     */
    public function setPriceMin($priceMin)
    {
        $this->priceMin = $priceMin;

        return $this;
    }

    /**
     * Get priceMin
     *
     * @return float
     */
    public function getPriceMin()
    {
        return $this->priceMin;
    }

    /**
     * Set category
     *
     * @param \DPC\ServiceBundle\Entity\ServiceCategory $category
     *
     * @return Service
     */
    public function setCategory(\DPC\ServiceBundle\Entity\ServiceCategory $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \DPC\ServiceBundle\Entity\ServiceCategory
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set image
     *
     * @param \DPC\StoreBundle\Entity\Image $image
     *
     * @return Service
     */
    public function setImage(\DPC\StoreBundle\Entity\Image $image = null)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return \DPC\StoreBundle\Entity\Image
     */
    public function getImage()
    {
        return $this->image;
    }
}
