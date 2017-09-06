<?php

namespace IMIE\CustomerBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductOrder
 *
 * @ORM\Table(name="product_order", indexes={@ORM\Index(name="FK_product_order_user", columns={"id_user"}), @ORM\Index(name="FK_product_order_product", columns={"id_product"})})
 * @ORM\Entity
 */
class ProductOrder
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_order", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idOrder;

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
     * @var \IMIE\CustomerBundle\Entity\Product
     *
     * @ORM\ManyToOne(targetEntity="IMIE\CustomerBundle\Entity\Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_product", referencedColumnName="id_product")
     * })
     */
    private $idProduct;

    /**
     * @var \IMIE\CustomerBundle\Entity\User
     *
     * @ORM\ManyToOne(targetEntity="IMIE\CustomerBundle\Entity\User")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_user", referencedColumnName="id_user")
     * })
     */
    private $idUser;


}

