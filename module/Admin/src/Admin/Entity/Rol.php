<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * �Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idrol", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrol;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=true)
     */
    private $nombre;

    public function getIdrol() {
        return $this->idrol;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setIdrol($idrol) {
        $this->idrol = $idrol;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }


}
