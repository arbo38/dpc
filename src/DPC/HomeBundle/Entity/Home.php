<?php

namespace DPC\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Home
 *
 * @ORM\Table(name="home")
 * @ORM\Entity(repositoryClass="DPC\HomeBundle\Repository\HomeRepository")
 */
class Home
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
     * @ORM\OneToOne(targetEntity="DPC\HomeBundle\Entity\SectionOne", cascade={"persist"})
     * @Assert\Valid()
     * @ORM\JoinColumn(nullable=false)
     */
    private $sectionOne;

    /**
     * @ORM\OneToOne(targetEntity="DPC\HomeBundle\Entity\SectionTwo", cascade={"persist"})
     * @Assert\Valid()
     */
    private $sectionTwo;

    /**
     * @var string
     *
     * @ORM\Column(name="title_section_3", type="string", length=255)
     */
    private $titleSectionThree;

    /**
     * @var string
     *
     * @ORM\Column(name="title_section_4", type="string", length=255)
     */
    private $titleSectionFour;

    /**
     * @ORM\OneToMany(targetEntity="DPC\HomeBundle\Entity\SectionThreeElement", mappedBy="home", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Assert\Valid()
     */
    private $sectionThreeElements;

    /**
     * @ORM\OneToMany(targetEntity="DPC\HomeBundle\Entity\SectionFourElement", mappedBy="home", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Assert\Valid()
     */
    private $sectionFourElements;

    /**
     * @ORM\OneToMany(targetEntity="DPC\StoreBundle\Entity\Image", mappedBy="home", cascade={"persist", "remove"}, orphanRemoval=true)
     * @Assert\Valid()
     */
    private $slides;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->sectionThreeElements = new ArrayCollection();
        $this->sectionFourElements = new ArrayCollection();
        $this->slides = new ArrayCollection();
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
     * @return Home
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
     * Set sectionOne
     *
     * @param \DPC\HomeBundle\Entity\SectionOne $sectionOne
     *
     * @return Home
     */
    public function setSectionOne(\DPC\HomeBundle\Entity\SectionOne $sectionOne)
    {
        $this->sectionOne = $sectionOne;

        return $this;
    }

    /**
     * Get sectionOne
     *
     * @return \DPC\HomeBundle\Entity\SectionOne
     */
    public function getSectionOne()
    {
        return $this->sectionOne;
    }

    /**
     * Set sectionTwo
     *
     * @param \DPC\HomeBundle\Entity\SectionTwo $sectionTwo
     *
     * @return Home
     */
    public function setSectionTwo(\DPC\HomeBundle\Entity\SectionTwo $sectionTwo = null)
    {
        $this->sectionTwo = $sectionTwo;

        return $this;
    }

    /**
     * Get sectionTwo
     *
     * @return \DPC\HomeBundle\Entity\SectionTwo
     */
    public function getSectionTwo()
    {
        return $this->sectionTwo;
    }
    

    /**
     * Set titleSectionThree
     *
     * @param string $titleSectionThree
     *
     * @return Home
     */
    public function setTitleSectionThree($titleSectionThree)
    {
        $this->titleSectionThree = $titleSectionThree;

        return $this;
    }

    /**
     * Get titleSectionThree
     *
     * @return string
     */
    public function getTitleSectionThree()
    {
        return $this->titleSectionThree;
    }

    /**
     * Add sectionFourElement
     *
     * @param \DPC\HomeBundle\Entity\SectionFourElement $sectionFourElement
     *
     * @return Home
     */
    public function addSectionFourElement(\DPC\HomeBundle\Entity\SectionFourElement $sectionFourElement)
    {
        $this->sectionFourElements[] = $sectionFourElement;
        $sectionFourElement->setHome($this);

        return $this;
    }

    /**
     * Remove sectionFourElement
     *
     * @param \DPC\HomeBundle\Entity\SectionFourElement $sectionFourElement
     */
    public function removeSectionFourElement(\DPC\HomeBundle\Entity\SectionFourElement $sectionFourElement)
    {
        $this->sectionFourElements->removeElement($sectionFourElement);
    }

    /**
     * Get sectionFourElements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectionFourElements()
    {
        return $this->sectionFourElements;
    }

    /**
     * Set titleSectionFour
     *
     * @param string $titleSectionFour
     *
     * @return Home
     */
    public function setTitleSectionFour($titleSectionFour)
    {
        $this->titleSectionFour = $titleSectionFour;

        return $this;
    }

    /**
     * Get titleSectionFour
     *
     * @return string
     */
    public function getTitleSectionFour()
    {
        return $this->titleSectionFour;
    }

    /**
     * Add sectionThreeElement
     *
     * @param \DPC\HomeBundle\Entity\SectionThreeElement $sectionThreeElement
     *
     * @return Home
     */
    public function addSectionThreeElement(\DPC\HomeBundle\Entity\SectionThreeElement $sectionThreeElement)
    {
        $this->sectionThreeElements[] = $sectionThreeElement;
        $sectionThreeElement->setHome($this);

        return $this;
    }

    /**
     * Remove sectionThreeElement
     *
     * @param \DPC\HomeBundle\Entity\SectionThreeElement $sectionThreeElement
     */
    public function removeSectionThreeElement(\DPC\HomeBundle\Entity\SectionThreeElement $sectionThreeElement)
    {
        $this->sectionThreeElements->removeElement($sectionThreeElement);
    }

    /**
     * Get sectionThreeElements
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSectionThreeElements()
    {
        return $this->sectionThreeElements;
    }

    /**
     * Add slide
     *
     * @param \DPC\StoreBundle\Entity\Image $slide
     *
     * @return Home
     */
    public function addSlide(\DPC\StoreBundle\Entity\Image $slide)
    {
        $this->slides[] = $slide;
        $slide->setHome($this);

        return $this;
    }

    /**
     * Remove slide
     *
     * @param \DPC\StoreBundle\Entity\Image $slide
     */
    public function removeSlide(\DPC\StoreBundle\Entity\Image $slide)
    {
        $this->slides->removeElement($slide);
    }

    /**
     * Get slides
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSlides()
    {
        return $this->slides;
    }
}
