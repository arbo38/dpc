<?php

namespace DPC\FAQBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FaqTheme
 *
 * @ORM\Table(name="faq_theme")
 * @ORM\Entity(repositoryClass="DPC\FAQBundle\Repository\FaqThemeRepository")
 */
class FaqTheme
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
     * @ORM\Column(name="title", type="string", length=255, unique=true)
     */
    private $title;

    /**
     * @ORM\OneToMany(targetEntity="DPC\FAQBundle\Entity\Faq", mappedBy="theme")
     */
    private $faqs;


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
     * @return FaqTheme
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
     * Constructor
     */
    public function __construct()
    {
        $this->faqs = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add faq
     *
     * @param \DPC\FAQBundle\Entity\Faq $faq
     *
     * @return FaqTheme
     */
    public function addFaq(\DPC\FAQBundle\Entity\Faq $faq)
    {
        $this->faqs[] = $faq;

        return $this;
    }

    /**
     * Remove faq
     *
     * @param \DPC\FAQBundle\Entity\Faq $faq
     */
    public function removeFaq(\DPC\FAQBundle\Entity\Faq $faq)
    {
        $this->faqs->removeElement($faq);
    }

    /**
     * Get faqs
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    public function countFaqs(){
        return count($this->faqs);
    }
}
