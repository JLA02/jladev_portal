<?php

namespace App\Entity;

use App\Repository\ProjectsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProjectsRepository::class)
 */
class Projects
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="ProjectEnumType")
     */
    private $type;

    /**
     * @ORM\Column(type="string", length=45)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $briefdesc;

    /**
     * @ORM\Column(type="string", length=1024)
     */
    private $description;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasPictures;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasVideos;

    /**
     * @ORM\Column(type="boolean")
     */
    private $hasDownload;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $repository;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $download;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getBriefdesc(): ?string
    {
        return $this->briefdesc;
    }

    public function setBriefdesc(string $briefdesc): self
    {
        $this->briefdesc = $briefdesc;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getHasPictures(): ?bool
    {
        return $this->hasPictures;
    }

    public function setHasPictures(bool $hasPictures): self
    {
        $this->hasPictures = $hasPictures;

        return $this;
    }

    public function getHasVideos(): ?bool
    {
        return $this->hasVideos;
    }

    public function setHasVideos(bool $hasVideos): self
    {
        $this->hasVideos = $hasVideos;

        return $this;
    }

    public function getHasDownload(): ?bool
    {
        return $this->hasDownload;
    }

    public function setHasDownload(bool $hasDownload): self
    {
        $this->hasDownload = $hasDownload;

        return $this;
    }

    public function getRepository(): ?string
    {
        return $this->repository;
    }

    public function setRepository(?string $repository): self
    {
        $this->repository = $repository;

        return $this;
    }

    public function getDownload(): ?string
    {
        return $this->download;
    }

    public function setDownload(?string $download): self
    {
        $this->download = $download;

        return $this;
    }
}
