<?php

namespace Admin\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * �Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_usuario_rol_idx", columns={"rol_idrol"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="nombreComplet", type="string", length=45, nullable=true)
     */
    private $nombrecomplet;

    /**
     * @var string
     *
     * @ORM\Column(name="imagen", type="blob", nullable=true)
     */
    private $imagen;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="user", type="string", length=45, nullable=true)
     */
    private $user;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaReg", type="datetime", nullable=true)
     */
    private $fechareg;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=10, nullable=true)
     */
    private $estado;

    /**
     * @var \Admin\Entity\Rol
     *
     * @ORM\ManyToOne(targetEntity="Admin\Entity\Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_idrol", referencedColumnName="idrol")
     * })
     */
    private $rolrol;

    public function getIdusuario() {
return $this->idusuario;
}

public function getNombrecomplet() {
return $this->nombrecomplet;
}

public function getImagen() {
return $this->imagen;
}

public function getEmail() {
return $this->email;
}

public function getUser() {
return $this->user;
}

public function getPassword() {
return $this->password;
}

public function getFechareg() {
return $this->fechareg;
}

public function getEstado() {
return $this->estado;
}

public function getRolrol() {
return $this->rolrol;
}

public function setIdusuario($idusuario) {
$this->idusuario = $idusuario;
}

public function setNombrecomplet($nombrecomplet) {
$this->nombrecomplet = $nombrecomplet;
}

public function setImagen($imagen) {
$this->imagen = $imagen;
}

public function setEmail($email) {
$this->email = $email;
}

public function setUser($user) {
$this->user = $user;
}

public function setPassword($password) {
$this->password = $password;
}

public function setFechareg(\DateTime $fechareg) {
$this->fechareg = $fechareg;
}

public function setEstado($estado) {
$this->estado = $estado;
}

public function setRolrol(\Admin\Entity\Rol $rolrol) {
$this->rolrol = $rolrol;
}


}
