<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DocumentType
 *
 * @ORM\Table(name="document_type")
 * @ORM\Entity
 */
class DocumentType
{    function getLabel() {
        return $this->label;
    }

    function getIdDocumentType() {
        return $this->idDocumentType;
    }

    function setLabel($label) {
        $this->label = $label;
    }

    function setIdDocumentType($idDocumentType) {
        $this->idDocumentType = $idDocumentType;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="label", type="string", length=100, nullable=false)
     */
    private $label = '';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_document_type", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idDocumentType;


}

