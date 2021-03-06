<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing TIpi
 *
 * Tipo: Dados do IPI
 * XSD Type: TIpi
 */
class TIpi extends BaseDataTransfer
{
    /**
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @property string $clEnq
     */
    protected $clEnq = null;

    /**
     * CNPJ do produtor da mercadoria, quando diferente do emitente.
     * Somente para os casos de exportação direta ou indireta.
     *
     * @property string $CNPJProd
     */
    protected $CNPJProd = null;

    /**
     * Código do selo de controle do IPI
     *
     * @property string $cSelo
     */
    protected $cSelo = null;

    /**
     * Quantidade de selo de controle do IPI
     *
     * @property string $qSelo
     */
    protected $qSelo = null;

    /**
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @property string $cEnq
     */
    protected $cEnq = null;

    /**
     * @return \stdClass
     */
    public function toNFeTag()
    {
        $tag = parent::toNFeTag();
        $extras = array();

        if (!is_null($this->getIPITrib())) {
            $extras = (array)$this->getIPITrib()->toNFeTag();
        } else if (!is_null($this->getIPINT())) {
            $extras = (array)$this->getIPINT()->toNFeTag();
        }

        foreach ($extras as $key => $value) {
            $tag->$key = $value;
        }

        return $tag;
    }

    /**
     * @property TIpi\IPITrib $IPITrib
     */
    protected $IPITrib = null;

    /**
     * @property TIpi\IPINT $IPINT
     */
    protected $IPINT = null;

    /**
     * Gets as clEnq
     *
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @return string
     */
    public function getClEnq()
    {
        return $this->clEnq;
    }

    /**
     * Sets a new clEnq
     *
     * Classe de Enquadramento do IPI para Cigarros e Bebidas
     *
     * @param string $clEnq
     * @return self
     */
    public function setClEnq($clEnq)
    {
        $this->clEnq = $clEnq;
        return $this;
    }

    /**
     * Gets as CNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente.
     * Somente para os casos de exportação direta ou indireta.
     *
     * @return string
     */
    public function getCNPJProd()
    {
        return $this->CNPJProd;
    }

    /**
     * Sets a new CNPJProd
     *
     * CNPJ do produtor da mercadoria, quando diferente do emitente.
     * Somente para os casos de exportação direta ou indireta.
     *
     * @param string $CNPJProd
     * @return self
     */
    public function setCNPJProd($CNPJProd)
    {
        $this->CNPJProd = $CNPJProd;
        return $this;
    }

    /**
     * Gets as cSelo
     *
     * Código do selo de controle do IPI
     *
     * @return string
     */
    public function getCSelo()
    {
        return $this->cSelo;
    }

    /**
     * Sets a new cSelo
     *
     * Código do selo de controle do IPI
     *
     * @param string $cSelo
     * @return self
     */
    public function setCSelo($cSelo)
    {
        $this->cSelo = $cSelo;
        return $this;
    }

    /**
     * Gets as qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @return string
     */
    public function getQSelo()
    {
        return $this->qSelo;
    }

    /**
     * Sets a new qSelo
     *
     * Quantidade de selo de controle do IPI
     *
     * @param string $qSelo
     * @return self
     */
    public function setQSelo($qSelo)
    {
        $this->qSelo = $qSelo;
        return $this;
    }

    /**
     * Gets as cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @return string
     */
    public function getCEnq()
    {
        return $this->cEnq;
    }

    /**
     * Sets a new cEnq
     *
     * Código de Enquadramento Legal do IPI (tabela a ser criada pela RFB)
     *
     * @param string $cEnq
     * @return self
     */
    public function setCEnq($cEnq)
    {
        $this->cEnq = $cEnq;
        return $this;
    }

    /**
     * Gets as IPITrib
     *
     * @return TIpi\IPITrib
     */
    public function getIPITrib()
    {
        return $this->IPITrib;
    }

    /**
     * Sets a new IPITrib
     *
     * @param TIpi\IPITrib $IPITrib
     * @return self
     */
    public function setIPITrib(TIpi\IPITrib $IPITrib)
    {
        $this->IPITrib = $IPITrib;
        return $this;
    }

    /**
     * Gets as IPINT
     *
     * @return TIpi\IPINT
     */
    public function getIPINT()
    {
        return $this->IPINT;
    }

    /**
     * Sets a new IPINT
     *
     * @param TIpi\IPINT $IPINT
     * @return self
     */
    public function setIPINT(TIpi\IPINT $IPINT)
    {
        $this->IPINT = $IPINT;
        return $this;
    }
}
