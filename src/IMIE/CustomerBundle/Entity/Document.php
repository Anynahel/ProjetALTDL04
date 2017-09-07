<?php

namespace IMIE\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Document
 *
 * @ORM\Table(name="document", indexes={@ORM\Index(name="FK_document_document_type", columns={"id_document_type"})})
 * @ORM\Entity
 */
class Document
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_document", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocument;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="string", length=255, nullable=false)
     */
    private $link = '';

    /**
     * @var \IMIE\CustomerBundle\Entity\DocumentType
     *
     * @ORM\ManyToOne(targetEntity="IMIE\CustomerBundle\Entity\DocumentType")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_document_type", referencedColumnName="id_document_type")
     * })
     */
    private $idDocumentType;


}

