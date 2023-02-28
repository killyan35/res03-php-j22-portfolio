<?php

namespace App\Entity;

use App\Repository\ProjectRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectRepository::class)
 */
class Project
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $FirstTechnology;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $SecondTechnology;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Description;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->Name;
    }

    public function setName(string $Name): self
    {
        $this->Name = $Name;

        return $this;
    }

    public function getFirstTechnology(): ?string
    {
        return $this->FirstTechnology;
    }

    public function setFirstTechnology(string $FirstTechnology): self
    {
        $this->FirstTechnology = $FirstTechnology;

        return $this;
    }

    public function getSecondTechnology(): ?string
    {
        return $this->SecondTechnology;
    }

    public function setSecondTechnology(?string $SecondTechnology): self
    {
        $this->SecondTechnology = $SecondTechnology;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }
}
