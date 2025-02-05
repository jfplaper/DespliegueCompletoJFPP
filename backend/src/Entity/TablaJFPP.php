<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity]
#[ORM\Table(name: "secretosJFPP")]
class TablaJFPP
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $fraseJFPP;

    public function getId(): int
    {
        return $this->id;
    }

    public function getFraseJFPP(): string
    {
        return $this->fraseJFPP;
    }

    public function setFraseJFPP(string $fraseJFPP): self
    {
        $this->fraseJFPP = $fraseJFPP;
        return $this;
    }
}
