<?php

namespace DPC\ServiceBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * ServiceCategory
 *
 * @ORM\Table(name="service_category")
 * @ORM\Entity(repositoryClass="DPC\ServiceBundle\Repository\ServiceCategoryRepository")
 */
class ServiceCategory
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
     * @ORM\Column(name="description", type="text")
     */
    private $description;

    /**
     * @ORM\OneToMany(targetEntity="DPC\ServiceBundle\Entity\Service", mappedBy="category")
     * 
     */
    private $services;

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
     * @return ServiceCategory
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
     * Set description
     *
     * @param string $description
     *
     * @return ServiceCategory
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
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add service
     *
     * @param \DPC\ServiceBundle\Entity\Service $service
     *
     * @return ServiceCategory
     */
    public function addService(\DPC\ServiceBundle\Entity\Service $service)
    {
        $this->services[] = $service;

        return $this;
    }

    /**
     * Remove service
     *
     * @param \DPC\ServiceBundle\Entity\Service $service
     */
    public function removeService(\DPC\ServiceBundle\Entity\Service $service)
    {
        $this->services->removeElement($service);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Set image
     *
     * @param \DPC\StoreBundle\Entity\Image $image
     *
     * @return ServiceCategory
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

    public function countServices()
    {
        return count($this->services);
    }
}
