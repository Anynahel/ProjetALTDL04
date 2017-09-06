<?php

namespace IMIE\GuestBundle\Entity;

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
     * @var \IMIE\GuestBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="IMIE\GuestBundle\Entity\Product")
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

