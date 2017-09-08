<?php

namespace IMIE\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductOrder
 *
 * @ORM\Table(name="product_order", indexes={@ORM\Index(name="FK_product_order_user", columns={"id_user"}), @ORM\Index(name="FK_product_order_product", columns={"id_product"})})
 * @ORM\Entity
 */
class ProductOrder
{    function getDate() {
        return $this->date;
    }

    function getPrice() {
        return $this->price;
    }

    function getIdOrder() {
        return $this->idOrder;
    }

    function getIdProduct(): \IMIE\Entity\Product {
        return $this->idProduct;
    }

    function getIdUser(): \IMIE\Entity\User {
        return $this->idUser;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setPrice($price) {
        $this->price = $price;
    }

    function setIdOrder($idOrder) {
        $this->idOrder = $idOrder;
    }

    function setIdProduct(\IMIE\Entity\Product $idProduct) {
        $this->idProduct = $idProduct;
    }

    function setIdUser(\IMIE\Entity\User $idUser) {
        $this->idUser = $idUser;
    }

        /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=19, nullable=false)
     */
    private $date = '';

    /**
     * @var string
     *
     * @ORM\Column(name="price", type="decimal", precision=10, scale=0, nullable=false)
     */
    private $price = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="id_order", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrder;

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
     * @var \IMIE\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="IMIE\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}

