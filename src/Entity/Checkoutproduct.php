<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Checkoutproduct
 *
 * @ORM\Table(name="CheckoutProduct", indexes={@ORM\Index(name="IDX_checkoutproduct", columns={"product"})})
 * @ORM\Entity
 */
class Checkoutproduct
{
    /**
     * @var int
     *
     * @ORM\Column(name="checkout", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $checkout;

    /**
     * @var int
     *
     * @ORM\Column(name="product", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $product;

    /**
     * @var int
     *
     * @ORM\Column(name="quantity", type="integer", nullable=false)
     */
    private $quantity;

    public function getCheckout(): ?int
    {
        return $this->checkout;
    }

    public function getProduct(): ?int
    {
        return $this->product;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }


}
