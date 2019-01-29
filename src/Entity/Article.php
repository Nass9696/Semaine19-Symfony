<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Titre;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Contenu;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $Date_de_creation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom_auteur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $Nom_category;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $Nombre_vue;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitre(): ?string
    {
        return $this->Titre;
    }

    public function setTitre(string $Titre): self
    {
        $this->Titre = $Titre;

        return $this;
    }

    public function getContenu(): ?string
    {
        return $this->Contenu;
    }

    public function setContenu(?string $Contenu): self
    {
        $this->Contenu = $Contenu;

        return $this;
    }

    public function getDateDeCreation(): ?\DateTimeInterface
    {
        return $this->Date_de_creation;
    }

    public function setDateDeCreation(?\DateTimeInterface $Date_de_creation): self
    {
        $this->Date_de_creation = $Date_de_creation;

        return $this;
    }

    public function getNomAuteur(): ?string
    {
        return $this->Nom_auteur;
    }

    public function setNomAuteur(?string $Nom_auteur): self
    {
        $this->Nom_auteur = $Nom_auteur;

        return $this;
    }

    public function getNomCategory(): ?string
    {
        return $this->Nom_category;
    }

    public function setNomCategory(?string $Nom_category): self
    {
        $this->Nom_category = $Nom_category;

        return $this;
    }

    public function getNombreVue(): ?int
    {
        return $this->Nombre_vue;
    }

    public function setNombreVue(?int $Nombre_vue): self
    {
        $this->Nombre_vue = $Nombre_vue;

        return $this;
    }

    public function returnCaractere($contenue)
    {      
      substr($contenue, 50);
    }
}
