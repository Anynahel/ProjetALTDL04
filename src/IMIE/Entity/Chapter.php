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
{    
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", length=65535, nullable=false)
     */
    private $content;

    function getContent() {
        return $this->content;
    }

    function setContent($content) {
        $this->content = $content;
    }
    
    /**
     * @var string
     *
     * @ORM\Column(name="chapter_title", type="string", length=255, nullable=false)
     */
    private $chapterTitle;

    function getChapterTitle() {
        return $this->chapterTitle;
    }

    function setChapterTitle($chapterTitle) {
        $this->chapterTitle = $chapterTitle;
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="chapter_number", type="integer", nullable=false)
     */
    private $chapterNumber = '0';

    function getChapterNumber() {
        return $this->chapterNumber;
    }

    function setChapterNumber($chapterNumber) {
        $this->chapterNumber = $chapterNumber;
    }
    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_chapter", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idChapter;

    function getIdChapter() {
        return $this->idChapter;
    }

    function setIdChapter($idChapter) {
        $this->idChapter = $idChapter;
    }

    /**
     * @var \IMIE\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     * })
     */
    private $Product;

    function getProduct(): \IMIE\Entity\Product {
        return $this->Product;
    }

    function setProduct(\IMIE\Entity\Product $Product) {
        $this->Product = $Product;
    }

    /**
    * @ORM\ManyToMany(targetEntity="Document")
    * @ORM\JoinTable(name="rel_chapter_document",
    *       joinColumns={@ORM\JoinColumn(name="idChapter", referencedColumnName="id_chapter")},
    *       inverseJoinColumns={@ORM\JoinColumn(name="idDocument", referencedColumnName="id_document")})
    */
    private $documents;

    function getDocuments() {
        return $this->documents;
    }

    function setDocuments($documents) {
        $this->documents = $documents;
    }

    public function __construct() {
        $this->documents = new \Doctrine\Common\Collections\ArrayCollection();
    }
}
