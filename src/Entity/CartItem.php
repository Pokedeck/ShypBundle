<?php

namespace ShypyBundle\Entity;

use ShypyBundle\Repository\CartItemRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class CartItem
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\ManyToOne(targetEntity=App\Entity\Cart::class, inversedBy="cartItems")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $cart;

    /**
     * @ORM\ManyToOne(targetEntity=App\Entity\Product::class, inversedBy="cartItems")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $product;

    /**
     * @ORM\Column(type="integer")
     */
    protected $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCart(): ?Cart
    {
        return $this->cart;
    }

    public function setCart(?Cart $cart): self
    {
        $this->cart = $cart;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
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
