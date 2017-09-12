<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product", indexes={@ORM\Index(name="FK_product_user", columns={"id_user"})})
 * @ORM\Entity
 */
class Product
{   
    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = '';

    function getImage() {
        return $this->image;
    }

    function setImage($image) {
        $this->image = $image;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    function getTitle() {
        return $this->title;
    }

    function setTitle($title) {
        $this->title = $title;
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    function getSummary() {
        return $this->summary;
    }

    function setSummary($summary) {
        $this->summary = $summary;
    }

    
    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords = '';

    function getKeywords() {
        return $this->keywords;
    }

    function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    function getIdProduct() {
        return $this->idProduct;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    
    /**
     * @var \IMIE\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    function getIdUser(): \IMIE\Entity\User {
        return $this->idUser;
    }

    function setIdUser(\IMIE\Entity\User $idUser) {
        $this->idUser = $idUser;
    }

    /**
     * @var boolean
     *
     * @ORM\Column(name="istutorial", type="boolean", nullable=true, options={"default"=0})
     */
    private $isTutorial;

    function getIsTutorial() {
        return $this->isTutorial;
    }

    function setIsTutorial($isTutorial) {
        $this->isTutorial = $isTutorial;
    }
}
