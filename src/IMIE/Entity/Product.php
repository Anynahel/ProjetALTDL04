
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
{    function getImage() {
        return $this->image;
    }

    function getTitle() {
        return $this->title;
    }

    function getSummary() {
        return $this->summary;
    }

    function getKeywords() {
        return $this->keywords;
    }

    function getIdProduct() {
        return $this->idProduct;
    }

    function getIdUser(): \IMIE\Entity\User {
        return $this->idUser;
    }

    function getIsTutorial() {
        return $this->isTutorial;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setSummary($summary) {
        $this->summary = $summary;
    }

    function setKeywords($keywords) {
        $this->keywords = $keywords;
    }

    function setIdProduct($idProduct) {
        $this->idProduct = $idProduct;
    }

    function setIdUser(\IMIE\Entity\User $idUser) {
        $this->idUser = $idUser;
    }

    function setIsTutorial($isTutorial) {
        $this->isTutorial = $isTutorial;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255, nullable=true)
     */
    private $image = '';

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=255, nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="summary", type="text", length=65535, nullable=true)
     */
    private $summary;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="string", length=255, nullable=true)
     */
    private $keywords = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_product", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProduct;

    /**
     * @var \IMIE\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;

    /**
     * @var boolean
     *
     * @ORM\Column(name="istutorial", type="boolean", nullable=true, options={"default"=0})
     */
    private $isTutorial;

}
