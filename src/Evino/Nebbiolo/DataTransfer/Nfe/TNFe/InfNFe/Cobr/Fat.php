<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Cobr;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Fat
 */
class Fat extends BaseDataTransfer
{
    /**
     * Número da fatura
     *
     * @property string $nFat
     */
    protected $nFat = null;

    /**
     * Valor original da fatura
     *
     * @property string $vOrig
     */
    protected $vOrig = null;

    /**
     * Valor do desconto da fatura
     *
     * @property string $vDesc
     */
    protected $vDesc = null;

    /**
     * Valor líquido da fatura
     *
     * @property string $vLiq
     */
    protected $vLiq = null;

    /**
     * Gets as nFat
     *
     * Número da fatura
     *
     * @return string
     */
    public function getNFat()
    {
        return $this->nFat;
    }

    /**
     * Sets a new nFat
     *
     * Número da fatura
     *
     * @param string $nFat
     * @return self
     */
    public function setNFat($nFat)
    {
        $this->nFat = $nFat;
        return $this;
    }

    /**
     * Gets as vOrig
     *
     * Valor original da fatura
     *
     * @return string
     */
    public function getVOrig()
    {
        return $this->vOrig;
    }

    /**
     * Sets a new vOrig
     *
     * Valor original da fatura
     *
     * @param string $vOrig
     * @return self
     */
    public function setVOrig($vOrig)
    {
        $this->vOrig = $vOrig;
        return $this;
    }

    /**
     * Gets as vDesc
     *
     * Valor do desconto da fatura
     *
     * @return string
     */
    public function getVDesc()
    {
        return $this->vDesc;
    }

    /**
     * Sets a new vDesc
     *
     * Valor do desconto da fatura
     *
     * @param string $vDesc
     * @return self
     */
    public function setVDesc($vDesc)
    {
        $this->vDesc = $vDesc;
        return $this;
    }

    /**
     * Gets as vLiq
     *
     * Valor líquido da fatura
     *
     * @return string
     */
    public function getVLiq()
    {
        return $this->vLiq;
    }

    /**
     * Sets a new vLiq
     *
     * Valor líquido da fatura
     *
     * @param string $vLiq
     * @return self
     */
    public function setVLiq($vLiq)
    {
        $this->vLiq = $vLiq;
        return $this;
    }
}
