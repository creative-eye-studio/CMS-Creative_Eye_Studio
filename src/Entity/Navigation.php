<?php

namespace App\Entity;

use App\Repository\NavigationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NavigationRepository::class)
 */
class Navigation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=Pages::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=Pages::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $link;

    /**
     * @ORM\Column(type="integer")
     */
    private $parent_level;

    /**
     * @ORM\Column(type="integer")
     */
    private $location_nav;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?Pages
    {
        return $this->name;
    }

    public function setName(Pages $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLink(): ?Pages
    {
        return $this->link;
    }

    public function setLink(Pages $link): self
    {
        $this->link = $link;

        return $this;
    }

    public function getParentLevel(): ?int
    {
        return $this->parent_level;
    }

    public function setParentLevel(int $parent_level): self
    {
        $this->parent_level = $parent_level;

        return $this;
    }

    public function getLocationNav(): ?int
    {
        return $this->location_nav;
    }

    public function setLocationNav(int $location_nav): self
    {
        $this->location_nav = $location_nav;

        return $this;
    }
}
