<?php

namespace App\Entity;

use App\Repository\ProveedorRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProveedorRepository::class)
 */
class Proveedor
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nombre;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $correoElectronico;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $telefonoContacto;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $tipoProveedor;

    /**
     * @ORM\Column(type="boolean")
     */
    private $estaActivo;

    /**
     * @ORM\Column(type="date")
     */
    private $fechaInsercion;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $fechaUltimaModificacion;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getCorreoElectronico(): ?string
    {
        return $this->correoElectronico;
    }

    public function setCorreoElectronico(string $correoElectronico): self
    {
        $this->correoElectronico = $correoElectronico;

        return $this;
    }

    public function getTelefonoContacto(): ?string
    {
        return $this->telefonoContacto;
    }

    public function setTelefonoContacto(string $telefonoContacto): self
    {
        $this->telefonoContacto = $telefonoContacto;

        return $this;
    }

    public function getTipoProveedor(): ?string
    {
        return $this->tipoProveedor;
    }

    public function setTipoProveedor(string $tipoProveedor): self
    {
        $this->tipoProveedor = $tipoProveedor;

        return $this;
    }

    public function getEstaActivo(): ?bool
    {
        return $this->estaActivo;
    }

    public function setEstaActivo(bool $estaActivo): self
    {
        $this->estaActivo = $estaActivo;

        return $this;
    }

    public function getFechaInsercion(): ?\DateTimeInterface
    {
        return $this->fechaInsercion;
    }

    public function setFechaInsercion(\DateTimeInterface $fechaInsercion): self
    {
        $this->fechaInsercion = $fechaInsercion;

        return $this;
    }

    public function getFechaUltimaModificacion(): ?\DateTimeInterface
    {
        return $this->fechaUltimaModificacion;
    }

    public function setFechaUltimaModificacion(?\DateTimeInterface $fechaUltimaModificacion): self
    {
        $this->fechaUltimaModificacion = $fechaUltimaModificacion;

        return $this;
    }
}
