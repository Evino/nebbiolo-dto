<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\PIS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing PISQtde
 */
class PISQtde extends BaseDataTransfer
{
    /**
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Quantidade Vendida (NT2011/004)
     *
     * @property string $qBCProd
     */
    protected $qBCProd = null;

    /**
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @property string $vAliqProd
     */
    protected $vAliqProd = null;

    /**
     * Valor do PIS
     *
     * @property string $vPIS
     */
    protected $vPIS = null;

    /**
     * Gets as CST
     *
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @return string
     */
    public function getCST()
    {
        return $this->CST;
    }

    /**
     * Sets a new CST
     *
     * Código de Situação Tributária do PIS.
     * 03 => Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota por Unidade de Produto;
     *
     * @param string $CST
     * @return self
     */
    public function setCST($CST)
    {
        $this->CST = $CST;
        return $this;
    }

    /**
     * Gets as qBCProd
     *
     * Quantidade Vendida (NT2011/004)
     *
     * @return string
     */
    public function getQBCProd()
    {
        return $this->qBCProd;
    }

    /**
     * Sets a new qBCProd
     *
     * Quantidade Vendida (NT2011/004)
     *
     * @param string $qBCProd
     * @return self
     */
    public function setQBCProd($qBCProd)
    {
        $this->qBCProd = $qBCProd;
        return $this;
    }

    /**
     * Gets as vAliqProd
     *
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @return string
     */
    public function getVAliqProd()
    {
        return $this->vAliqProd;
    }

    /**
     * Sets a new vAliqProd
     *
     * Alíquota do PIS (em reais) (NT2011/004)
     *
     * @param string $vAliqProd
     * @return self
     */
    public function setVAliqProd($vAliqProd)
    {
        $this->vAliqProd = $vAliqProd;
        return $this;
    }

    /**
     * Gets as vPIS
     *
     * Valor do PIS
     *
     * @return string
     */
    public function getVPIS()
    {
        return $this->vPIS;
    }

    /**
     * Sets a new vPIS
     *
     * Valor do PIS
     *
     * @param string $vPIS
     * @return self
     */
    public function setVPIS($vPIS)
    {
        $this->vPIS = $vPIS;
        return $this;
    }
}
