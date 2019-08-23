<?php

namespace Dados\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Usuarios
 *
 * @ORM\Table(name="usuarios", indexes={@ORM\Index(name="fk_endereco_usuario", columns={"idendereco"})})
 * @ORM\Entity
 */
class Usuarios
{
    /**
     * @var int
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * Getter for Idusuario
     *
     * @return [type]
     */
    public function getIdusuario()
    {
        return $this->idusuario;
    }

    /**
     * Setter for Idusuario
     * @var [type] idusuario
     *
     * @return self
     */
    public function setIdusuario($idusuario)
    {
        $this->idusuario = $idusuario;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=100, nullable=false)
     */
    private $nome;

    /**
     * Getter for Nome
     *
     * @return [type]
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Setter for Nome
     * @var [type] nome
     *
     * @return self
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="cpf", type="string", length=45, nullable=false)
     */
    private $cpf;

    /**
     * Getter for Cpf
     *
     * @return [type]
     */
    public function getCpf()
    {
        return $this->cpf;
    }

    /**
     * Setter for Cpf
     * @var [type] cpf
     *
     * @return self
     */
    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="n_celular", type="string", length=45, nullable=false)
     */
    private $nCelular;

    /**
     * Getter for NCelular
     *
     * @return [type]
     */
    public function getNCelular()
    {
        return $this->nCelular;
    }

    /**
     * Setter for NCelular
     * @var [type] nCelular
     *
     * @return self
     */
    public function setNCelular($nCelular)
    {
        $this->nCelular = $nCelular;
        return $this;
    }


    /**
     * @var string|null
     *
     * @ORM\Column(name="n_residencial", type="string", length=45, nullable=true)
     */
    private $nResidencial;

    /**
     * Getter for NResidencial
     *
     * @return [type]
     */
    public function getNResidencial()
    {
        return $this->nResidencial;
    }

    /**
     * Setter for NResidencial
     * @var [type] nResidencial
     *
     * @return self
     */
    public function setNResidencial($nResidencial)
    {
        $this->nResidencial = $nResidencial;
        return $this;
    }


    /**
     * @var string|null
     *
     * @ORM\Column(name="n_comercial", type="string", length=45, nullable=true)
     */
    private $nComercial;

    /**
     * Getter for NComercial
     *
     * @return [type]
     */
    public function getNComercial()
    {
        return $this->nComercial;
    }

    /**
     * Setter for NComercial
     * @var [type] nComercial
     *
     * @return self
     */
    public function setNComercial($nComercial)
    {
        $this->nComercial = $nComercial;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=45, nullable=false)
     */
    private $email;

    /**
     * Getter for Email
     *
     * @return [type]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Setter for Email
     * @var [type] email
     *
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="dt_nascimento", type="string", length=45, nullable=false)
     */
    private $dtNascimento;

    /**
     * Getter for DtNascimento
     *
     * @return [type]
     */
    public function getDtNascimento()
    {
        return $this->dtNascimento;
    }

    /**
     * Setter for DtNascimento
     * @var [type] dtNascimento
     *
     * @return self
     */
    public function setDtNascimento($dtNascimento)
    {
        $this->dtNascimento = $dtNascimento;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="senha", type="string", length=256, nullable=false)
     */
    private $senha;

    /**
     * Getter for Senha
     *
     * @return [type]
     */
    public function getSenha()
    {
        return $this->senha;
    }

    /**
     * Setter for Senha
     * @var [type] senha
     *
     * @return self
     */
    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }


    /**
     * @var \Dados\V1\Entity\Enderecos
     *
     * @ORM\ManyToOne(targetEntity="Dados\V1\Entity\Enderecos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idendereco", referencedColumnName="idendereco")
     * })
     */
    private $idendereco;

    /**
     * Getter for Idendereco
     *
     * @return [type]
     */
    public function getIdendereco()
    {
        return $this->idendereco;
    }

    /**
     * Setter for Idendereco
     * @var [type] idendereco
     *
     * @return self
     */
    public function setIdendereco($idendereco)
    {
        $this->idendereco = $idendereco;
        return $this;
    }

}
