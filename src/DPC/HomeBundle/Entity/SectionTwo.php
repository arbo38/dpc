<?php

namespace DPC\HomeBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SectionTwo
 *
 * @ORM\Table(name="section_two")
 * @ORM\Entity(repositoryClass="DPC\HomeBundle\Repository\SectionTwoRepository")
 */
class SectionTwo
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
     * @ORM\Column(name="title_1", type="string", length=255)
     */
    private $title1;

    /**
     * @var string
     *
     * @ORM\Column(name="text_1", type="text")
     */
    private $text1;

    /**
     * @var string
     *
     * @ORM\Column(name="icone_1", type="string", length=255)
     */
    private $icone1;

    /**
     * @var string
     *
     * @ORM\Column(name="title_2", type="string", length=255)
     */
    private $title2;

    /**
     * @var string
     *
     * @ORM\Column(name="text_2", type="text")
     */
    private $text2;

    /**
     * @var string
     *
     * @ORM\Column(name="icone_2", type="string", length=255)
     */
    private $icone2;


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
     * Set title1
     *
     * @param string $title1
     *
     * @return SectionTwo
     */
    public function setTitle1($title1)
    {
        $this->title1 = $title1;

        return $this;
    }

    /**
     * Get title1
     *
     * @return string
     */
    public function getTitle1()
    {
        return $this->title1;
    }

    /**
     * Set text1
     *
     * @param string $text1
     *
     * @return SectionTwo
     */
    public function setText1($text1)
    {
        $this->text1 = $text1;

        return $this;
    }

    /**
     * Get text1
     *
     * @return string
     */
    public function getText1()
    {
        return $this->text1;
    }

    /**
     * Set icone1
     *
     * @param string $icone1
     *
     * @return SectionTwo
     */
    public function setIcone1($icone1)
    {
        $this->icone1 = $icone1;

        return $this;
    }

    /**
     * Get icone1
     *
     * @return string
     */
    public function getIcone1()
    {
        return $this->icone1;
    }

    /**
     * Set title2
     *
     * @param string $title2
     *
     * @return SectionTwo
     */
    public function setTitle2($title2)
    {
        $this->title2 = $title2;

        return $this;
    }

    /**
     * Get title2
     *
     * @return string
     */
    public function getTitle2()
    {
        return $this->title2;
    }

    /**
     * Set text2
     *
     * @param string $text2
     *
     * @return SectionTwo
     */
    public function setText2($text2)
    {
        $this->text2 = $text2;

        return $this;
    }

    /**
     * Get text2
     *
     * @return string
     */
    public function getText2()
    {
        return $this->text2;
    }

    /**
     * Set icone2
     *
     * @param string $icone2
     *
     * @return SectionTwo
     */
    public function setIcone2($icone2)
    {
        $this->icone2 = $icone2;

        return $this;
    }

    /**
     * Get icone2
     *
     * @return string
     */
    public function getIcone2()
    {
        return $this->icone2;
    }
}
