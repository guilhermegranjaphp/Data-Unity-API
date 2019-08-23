<?php

namespace Dados\V1\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Enderecos
 *
 * @ORM\Table(name="enderecos")
 * @ORM\Entity
 */
class Enderecos
{
    /**
     * @var int
     *
     * @ORM\Column(name="idendereco", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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


    /**
     * @var string
     *
     * @ORM\Column(name="rua", type="string", length=100, nullable=false)
     */
    private $rua;

    /**
     * Getter for Rua
     *
     * @return [type]
     */
    public function getRua()
    {
        return $this->rua;
    }

    /**
     * Setter for Rua
     * @var [type] rua
     *
     * @return self
     */
    public function setRua($rua)
    {
        $this->rua = $rua;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="cidade", type="string", length=45, nullable=false)
     */
    private $cidade;

    /**
     * Getter for Cidade
     *
     * @return [type]
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * Setter for Cidade
     * @var [type] cidade
     *
     * @return self
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=45, nullable=false)
     */
    private $estado;

    /**
     * Getter for Estado
     *
     * @return [type]
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * Setter for Estado
     * @var [type] estado
     *
     * @return self
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
        return $this;
    }


    /**
     * @var string|null
     *
     * @ORM\Column(name="numero", type="string", length=45, nullable=true)
     */
    private $numero;

    /**
     * Getter for Numero
     *
     * @return [type]
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Setter for Numero
     * @var [type] numero
     *
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }


    /**
     * @var string
     *
     * @ORM\Column(name="bairro", type="string", length=100, nullable=false)
     */
    private $bairro;

    /**
     * Getter for Bairro
     *
     * @return [type]
     */
    public function getBairro()
    {
        return $this->bairro;
    }

    /**
     * Setter for Bairro
     * @var [type] bairro
     *
     * @return self
     */
    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
        return $this;
    }


    /**
     * @var string|null
     *
     * @ORM\Column(name="complemento", type="string", length=45, nullable=true)
     */
    private $complemento;

    /**
     * Getter for Complemento
     *
     * @return [type]
     */
    public function getComplemento()
    {
        return $this->complemento;
    }

    /**
     * Setter for Complemento
     * @var [type] complemento
     *
     * @return self
     */
    public function setComplemento($complemento)
    {
        $this->complemento = $complemento;
        return $this;
    }

}
