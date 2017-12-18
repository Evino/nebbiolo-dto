<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Comb;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Encerrante
 */
class Encerrante extends BaseDataTransfer
{

    /**
     * Numero de identificação do Bico utilizado no abastecimento
     *
     * @property string $nBico
     */
    protected $nBico = null;

    /**
     * Numero de identificação da bomba ao qual o bico está interligado
     *
     * @property string $nBomba
     */
    protected $nBomba = null;

    /**
     * Numero de identificação do tanque ao qual o bico está interligado
     *
     * @property string $nTanque
     */
    protected $nTanque = null;

    /**
     * Valor do Encerrante no ínicio do abastecimento
     *
     * @property string $vEncIni
     */
    protected $vEncIni = null;

    /**
     * Valor do Encerrante no final do abastecimento
     *
     * @property string $vEncFin
     */
    protected $vEncFin = null;

    /**
     * Gets as nBico
     *
     * Numero de identificação do Bico utilizado no abastecimento
     *
     * @return string
     */
    public function getNBico()
    {
        return $this->nBico;
    }

    /**
     * Sets a new nBico
     *
     * Numero de identificação do Bico utilizado no abastecimento
     *
     * @param string $nBico
     * @return self
     */
    public function setNBico($nBico)
    {
        $this->nBico = $nBico;
        return $this;
    }

    /**
     * Gets as nBomba
     *
     * Numero de identificação da bomba ao qual o bico está interligado
     *
     * @return string
     */
    public function getNBomba()
    {
        return $this->nBomba;
    }

    /**
     * Sets a new nBomba
     *
     * Numero de identificação da bomba ao qual o bico está interligado
     *
     * @param string $nBomba
     * @return self
     */
    public function setNBomba($nBomba)
    {
        $this->nBomba = $nBomba;
        return $this;
    }

    /**
     * Gets as nTanque
     *
     * Numero de identificação do tanque ao qual o bico está interligado
     *
     * @return string
     */
    public function getNTanque()
    {
        return $this->nTanque;
    }

    /**
     * Sets a new nTanque
     *
     * Numero de identificação do tanque ao qual o bico está interligado
     *
     * @param string $nTanque
     * @return self
     */
    public function setNTanque($nTanque)
    {
        $this->nTanque = $nTanque;
        return $this;
    }

    /**
     * Gets as vEncIni
     *
     * Valor do Encerrante no ínicio do abastecimento
     *
     * @return string
     */
    public function getVEncIni()
    {
        return $this->vEncIni;
    }

    /**
     * Sets a new vEncIni
     *
     * Valor do Encerrante no ínicio do abastecimento
     *
     * @param string $vEncIni
     * @return self
     */
    public function setVEncIni($vEncIni)
    {
        $this->vEncIni = $vEncIni;
        return $this;
    }

    /**
     * Gets as vEncFin
     *
     * Valor do Encerrante no final do abastecimento
     *
     * @return string
     */
    public function getVEncFin()
    {
        return $this->vEncFin;
    }

    /**
     * Sets a new vEncFin
     *
     * Valor do Encerrante no final do abastecimento
     *
     * @param string $vEncFin
     * @return self
     */
    public function setVEncFin($vEncFin)
    {
        $this->vEncFin = $vEncFin;
        return $this;
    }


}

