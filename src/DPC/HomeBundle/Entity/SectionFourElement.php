<?php

namespace DPC\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * SectionFourElement
 *
 * @ORM\Table(name="section_four_element")
 * @ORM\Entity(repositoryClass="DPC\HomeBundle\Repository\SectionFourElementRepository")
 */
class SectionFourElement
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
     * @ORM\Column(name="firstName", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="status", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity="DPC\HomeBundle\Entity\Home", inversedBy="sectionFourElements")
     * 
     */
    private $home;

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
     * Set firstName
     *
     * @param string $firstName
     *
     * @return SectionFourElement
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return SectionFourElement
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set home
     *
     * @param \DPC\HomeBundle\Entity\Home $home
     *
     * @return SectionFourElement
     */
    public function setHome(\DPC\HomeBundle\Entity\Home $home)
    {
        $this->home = $home;

        return $this;
    }

    /**
     * Get home
     *
     * @return \DPC\HomeBundle\Entity\Home
     */
    public function getHome()
    {
        return $this->home;
    }

    /**
     * Set image
     *
     * @param \DPC\StoreBundle\Entity\Image $image
     *
     * @return SectionFourElement
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
