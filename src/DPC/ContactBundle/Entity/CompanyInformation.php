<?php

namespace DPC\ContactBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * CompanyInformation
 *
 * @ORM\Table(name="company_information")
 * @ORM\Entity(repositoryClass="DPC\ContactBundle\Repository\CompanyInformationRepository")
 */
class CompanyInformation
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
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text")
     * @Assert\NotBlank()
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="address", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $address;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="tel", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $tel;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="siret", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $siret;

    /**
     * @var string
     *
     * @ORM\Column(name="title_contact_form_intro", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $titleContactFormIntro = "Un titre d'introduction avant le formulaire de contact";

    /**
     * @var string
     *
     * @ORM\Column(name="content_contact_form_intro", type="text")
     * @Assert\NotBlank()
     */
    private $contentContactFormIntro = "Une introduction avant le formulaire de contact";

    /**
     * @ORM\OneToOne(targetEntity="DPC\StoreBundle\Entity\Image", cascade={"persist", "remove"})
     * @Assert\Valid()
     */
    private $logo;


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
     * Set name
     *
     * @param string $name
     *
     * @return CompanyInformation
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return CompanyInformation
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
     * Set address
     *
     * @param string $address
     *
     * @return CompanyInformation
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return CompanyInformation
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set tel
     *
     * @param string $tel
     *
     * @return CompanyInformation
     */
    public function setTel($tel)
    {
        $this->tel = $tel;

        return $this;
    }

    /**
     * Get tel
     *
     * @return string
     */
    public function getTel()
    {
        return $this->tel;
    }

    /**
     * Set fax
     *
     * @param string $fax
     *
     * @return CompanyInformation
     */
    public function setFax($fax)
    {
        $this->fax = $fax;

        return $this;
    }

    /**
     * Get fax
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Set siret
     *
     * @param string $siret
     *
     * @return CompanyInformation
     */
    public function setSiret($siret)
    {
        $this->siret = $siret;

        return $this;
    }

    /**
     * Get siret
     *
     * @return string
     */
    public function getSiret()
    {
        return $this->siret;
    }

    /**
     * Set logo
     *
     * @param \DPC\StoreBundle\Entity\Image $logo
     *
     * @return CompanyInformation
     */
    public function setLogo(\DPC\StoreBundle\Entity\Image $logo = null)
    {
        $this->logo = $logo;

        return $this;
    }

    /**
     * Get logo
     *
     * @return \DPC\StoreBundle\Entity\Image
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * Set titleContactFormIntro
     *
     * @param string $titleContactFormIntro
     *
     * @return CompanyInformation
     */
    public function setTitleContactFormIntro($titleContactFormIntro)
    {
        $this->titleContactFormIntro = $titleContactFormIntro;

        return $this;
    }

    /**
     * Get titleContactFormIntro
     *
     * @return string
     */
    public function getTitleContactFormIntro()
    {
        return $this->titleContactFormIntro;
    }

    /**
     * Set contentContactFormIntro
     *
     * @param string $contentContactFormIntro
     *
     * @return CompanyInformation
     */
    public function setContentContactFormIntro($contentContactFormIntro)
    {
        $this->contentContactFormIntro = $contentContactFormIntro;

        return $this;
    }

    /**
     * Get contentContactFormIntro
     *
     * @return string
     */
    public function getContentContactFormIntro()
    {
        return $this->contentContactFormIntro;
    }
}
