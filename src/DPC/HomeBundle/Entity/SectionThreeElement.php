<?php

namespace DPC\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectionThreeElement
 *
 * @ORM\Table(name="section_three_element")
 * @ORM\Entity(repositoryClass="DPC\HomeBundle\Repository\SectionThreeElementRepository")
 */
class SectionThreeElement
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
     * @ORM\Column(name="text", type="text")
     */
    private $text;

    /**
     * @var string
     *
     * @ORM\Column(name="icone", type="string", length=255)
     */
    private $icone;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255)
     */
    private $link;



    /**
     * @ORM\ManyToOne(targetEntity="DPC\HomeBundle\Entity\Home", inversedBy="sectionThreeElements")
     */
    private $home;

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
     * @return SectionThreeElement
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
     * Set text
     *
     * @param string $text
     *
     * @return SectionThreeElement
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set icone
     *
     * @param string $icone
     *
     * @return SectionThreeElement
     */
    public function setIcone($icone)
    {
        $this->icone = $icone;

        return $this;
    }

    /**
     * Get icone
     *
     * @return string
     */
    public function getIcone()
    {
        return $this->icone;
    }

    /**
     * Set home
     *
     * @param \DPC\HomeBundle\Entity\Home $home
     *
     * @return SectionThreeElement
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
     * Set link
     *
     * @param string $link
     *
     * @return SectionThreeElement
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}
