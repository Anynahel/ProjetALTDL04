<<<<<<< HEAD
<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chapter
 *
 * @ORM\Table(name="chapter", indexes={@ORM\Index(name="FK_chapter_product", columns={"id_product"})})
 * @ORM\Entity
 */
class Chapter
{    function getContent() {
        return $this->content;
    }

    function getChapterTitle() {
        return $this->chapterTitle;
    }

    function getChapterNumber() {
        return $this->chapterNumber;
    }

    function getIdChapter() {
        return $this->idChapter;
    }

    function getIdProduct(): \IMIE\Entity\Product {
        return $this->idProduct;
    }

    function getDocuments() {
        return $this->documents;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setChapterTitle($chapterTitle) {
        $this->chapterTitle = $chapterTitle;
    }

    function setChapterNumber($chapterNumber) {
        $this->chapterNumber = $chapterNumber;
    }

    function setIdChapter($idChapter) {
        $this->idChapter = $idChapter;
    }

    function setIdProduct(\IMIE\Entity\Product $idProduct) {
        $this->idProduct = $idProduct;
    }

    function setDocuments($documents) {
        $this->documents = $documents;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    /**
     * @var string
     *
     * @ORM\Column(name="chapter_title", type="string", length=255, nullable=false)
     */
    private $chapterTitle;

    /**
     * @var integer
     *
     * @ORM\Column(name="chapter_number", type="integer", nullable=false)
     */
    private $chapterNumber = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapter", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapter;

    /**
     * @var \IMIE\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     * })
     */
    private $idProduct;

    /**
    * @ORM\ManyToMany(targetEntity="Document")
    * @ORM\JoinTable(name="rel_chapter_document",
    *       joinColumns={@ORM\JoinColumn(name="idChapter", referencedColumnName="id_chapter")},
    *       inverseJoinColumns={@ORM\JoinColumn(name="idDocument", referencedColumnName="id_document")})
    */
    private $documents;

    public function __construct() {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
