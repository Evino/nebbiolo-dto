<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Med
 */
class Med extends BaseDataTransfer
{

    /**
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @property string $cProdANVISA
     */
    protected $cProdANVISA = null;

    /**
     * Preço Máximo ao Consumidor.
     *
     * @property string $vPMC
     */
    protected $vPMC = null;

    /**
     * Gets as cProdANVISA
     *
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @return string
     */
    public function getCProdANVISA()
    {
        return $this->cProdANVISA;
    }

    /**
     * Sets a new cProdANVISA
     *
     * Código de Produto da ANVISA. Utilizar o número do registro do produto da
     * Câmara de Regulação do Mercado de Medicamento – CMED.
     *
     * @param string $cProdANVISA
     * @return self
     */
    public function setCProdANVISA($cProdANVISA)
    {
        $this->cProdANVISA = $cProdANVISA;
        return $this;
    }

    /**
     * Gets as vPMC
     *
     * Preço Máximo ao Consumidor.
     *
     * @return string
     */
    public function getVPMC()
    {
        return $this->vPMC;
    }

    /**
     * Sets a new vPMC
     *
     * Preço Máximo ao Consumidor.
     *
     * @param string $vPMC
     * @return self
     */
    public function setVPMC($vPMC)
    {
        $this->vPMC = $vPMC;
        return $this;
    }

}