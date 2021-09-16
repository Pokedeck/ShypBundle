<?php

namespace ShypyBundle\Entity;

use ShypyBundle\Repository\FeatureValueRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\MappedSuperclass
 */
abstract class FeatureValue
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $value;

    /**
     * @ORM\ManyToOne(targetEntity=Feature::class, inversedBy="featureValues")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $feature;

    /**
     * @ORM\ManyToOne(targetEntity=Product::class, inversedBy="featureValues")
     * @ORM\JoinColumn(nullable=false)
     */
    protected $product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getFeature(): ?Feature
    {
        return $this->feature;
    }

    public function setFeature(?Feature $feature): self
    {
        $this->feature = $feature;

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
}
