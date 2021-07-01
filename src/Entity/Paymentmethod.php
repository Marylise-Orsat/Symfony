<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Paymentmethod
 *
 * @ORM\Table(name="PaymentMethod", indexes={@ORM\Index(name="IDX_paymentmethod", columns={"user"})})
 * @ORM\Entity
 */
class Paymentmethod
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="number", type="string", length=16, nullable=false)
     */
    private $number;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="text", length=255, nullable=false)
     */
    private $name;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="expiration", type="datetime", nullable=false)
     */
    private $expiration;

    /**
     * @var int
     *
     * @ORM\Column(name="user", type="integer", nullable=false)
     */
    private $user;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumber(): ?string
    {
        return $this->number;
    }

    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getExpiration(): ?\DateTimeInterface
    {
        return $this->expiration;
    }

    public function setExpiration(\DateTimeInterface $expiration): self
    {
        $this->expiration = $expiration;

        return $this;
    }

    public function getUser(): ?int
    {
        return $this->user;
    }

    public function setUser(int $user): self
    {
        $this->user = $user;

        return $this;
    }


}
