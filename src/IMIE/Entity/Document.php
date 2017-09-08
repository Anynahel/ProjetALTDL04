
<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="FK_document_document_type", columns={"id_document_type"})})
 * @ORM\Entity
 */
class Document
{    function getLink() {
        return $this->link;
    }

    function getIdDocument() {
        return $this->idDocument;
    }

    function getIdDocumentType(): \IMIE\Entity\DocumentType {
        return $this->idDocumentType;
    }

    function setLink($link) {
        $this->link = $link;
    }

    function setIdDocument($idDocument) {
        $this->idDocument = $idDocument;
    }

    function setIdDocumentType(\IMIE\Entity\DocumentType $idDocumentType) {
        $this->idDocumentType = $idDocumentType;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_document", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocument;

    /**
     * @var \IMIE\Entity\DocumentType
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\DocumentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_document_type", referencedColumnName="id_document_type")
     * })
     */
    private $idDocumentType;


}
