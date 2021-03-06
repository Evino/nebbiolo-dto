<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMS20
 */
class ICMS20 extends BaseDataTransfer
{
    /**
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @property string $orig
     */
    protected $orig = null;

    /**
     * Tributção pelo ICMS
     * 20 => Com redução de base de cálculo
     *
     * @property string $CST
     */
    protected $CST = null;

    /**
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @property string $modBC
     */
    protected $modBC = null;

    /**
     * Percentual de redução da BC
     *
     * @property string $pRedBC
     */
    protected $pRedBC = null;

    /**
     * Valor da BC do ICMS
     *
     * @property string $vBC
     */
    protected $vBC = null;

    /**
     * Alíquota do ICMS
     *
     * @property string $pICMS
     */
    protected $pICMS = null;

    /**
     * Valor do ICMS
     *
     * @property string $vICMS
     */
    protected $vICMS = null;

    /**
     * Valor da Base de cálculo do FCP.
     *
     * @property string $vBCFCP
     */
    protected $vBCFCP = null;

    /**
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @property string $pFCP
     */
    protected $pFCP = null;

    /**
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @property string $vFCP
     */
    protected $vFCP = null;

    /**
     * Valor do ICMS de desoneração
     *
     * @property string $vICMSDeson
     */
    protected $vICMSDeson = null;

    /**
     * Motivo da desoneração do ICMS:
     * 3  => Uso na agropecuária
     * 9  => Outros
     * 12 => Fomento agropecuário
     *
     * @property string $motDesICMS
     */
    protected $motDesICMS = null;

    /**
     * Gets as orig
     *
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @return string
     */
    public function getOrig()
    {
        return $this->orig;
    }

    /**
     * Sets a new orig
     *
     * Origem da mercadoria:
     * 0 => Nacional
     * 1 => Estrangeira - Importação direta
     * 2 => Estrangeira - Adquirida no mercado interno
     *
     * @param string $orig
     * @return self
     */
    public function setOrig($orig)
    {
        $this->orig = $orig;
        return $this;
    }

    /**
     * Gets as CST
     *
     * Tributção pelo ICMS
     * 20 => Com redução de base de cálculo
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
     * Tributção pelo ICMS
     * 20 => Com redução de base de cálculo
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
     * Gets as modBC
     *
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @return string
     */
    public function getModBC()
    {
        return $this->modBC;
    }

    /**
     * Sets a new modBC
     *
     * Modalidade de determinação da BC do ICMS:
     * 0 => Margem Valor Agregado (%);
     * 1 => Pauta (valor);
     * 2 => Preço Tabelado Máximo (valor);
     * 3 => Valor da Operação.
     *
     * @param string $modBC
     * @return self
     */
    public function setModBC($modBC)
    {
        $this->modBC = $modBC;
        return $this;
    }

    /**
     * Gets as pRedBC
     *
     * Percentual de redução da BC
     *
     * @return string
     */
    public function getPRedBC()
    {
        return $this->pRedBC;
    }

    /**
     * Sets a new pRedBC
     *
     * Percentual de redução da BC
     *
     * @param string $pRedBC
     * @return self
     */
    public function setPRedBC($pRedBC)
    {
        $this->pRedBC = $pRedBC;
        return $this;
    }

    /**
     * Gets as vBC
     *
     * Valor da BC do ICMS
     *
     * @return string
     */
    public function getVBC()
    {
        return $this->vBC;
    }

    /**
     * Sets a new vBC
     *
     * Valor da BC do ICMS
     *
     * @param string $vBC
     * @return self
     */
    public function setVBC($vBC)
    {
        $this->vBC = $vBC;
        return $this;
    }

    /**
     * Gets as pICMS
     *
     * Alíquota do ICMS
     *
     * @return string
     */
    public function getPICMS()
    {
        return $this->pICMS;
    }

    /**
     * Sets a new pICMS
     *
     * Alíquota do ICMS
     *
     * @param string $pICMS
     * @return self
     */
    public function setPICMS($pICMS)
    {
        $this->pICMS = $pICMS;
        return $this;
    }

    /**
     * Gets as vICMS
     *
     * Valor do ICMS
     *
     * @return string
     */
    public function getVICMS()
    {
        return $this->vICMS;
    }

    /**
     * Sets a new vICMS
     *
     * Valor do ICMS
     *
     * @param string $vICMS
     * @return self
     */
    public function setVICMS($vICMS)
    {
        $this->vICMS = $vICMS;
        return $this;
    }

    /**
     * Gets as vBCFCP
     *
     * Valor da Base de cálculo do FCP.
     *
     * @return string
     */
    public function getVBCFCP()
    {
        return $this->vBCFCP;
    }

    /**
     * Sets a new vBCFCP
     *
     * Valor da Base de cálculo do FCP.
     *
     * @param string $vBCFCP
     * @return self
     */
    public function setVBCFCP($vBCFCP)
    {
        $this->vBCFCP = $vBCFCP;
        return $this;
    }

    /**
     * Gets as pFCP
     *
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return string
     */
    public function getPFCP()
    {
        return $this->pFCP;
    }

    /**
     * Sets a new pFCP
     *
     * Percentual de ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @param string $pFCP
     * @return self
     */
    public function setPFCP($pFCP)
    {
        $this->pFCP = $pFCP;
        return $this;
    }

    /**
     * Gets as vFCP
     *
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @return string
     */
    public function getVFCP()
    {
        return $this->vFCP;
    }

    /**
     * Sets a new vFCP
     *
     * Valor do ICMS relativo ao Fundo de Combate à Pobreza (FCP).
     *
     * @param string $vFCP
     * @return self
     */
    public function setVFCP($vFCP)
    {
        $this->vFCP = $vFCP;
        return $this;
    }

    /**
     * Gets as vICMSDeson
     *
     * Valor do ICMS de desoneração
     *
     * @return string
     */
    public function getVICMSDeson()
    {
        return $this->vICMSDeson;
    }

    /**
     * Sets a new vICMSDeson
     *
     * Valor do ICMS de desoneração
     *
     * @param string $vICMSDeson
     * @return self
     */
    public function setVICMSDeson($vICMSDeson)
    {
        $this->vICMSDeson = $vICMSDeson;
        return $this;
    }

    /**
     * Gets as motDesICMS
     *
     * Motivo da desoneração do ICMS:
     * 3  => Uso na agropecuária
     * 9  => Outros
     * 12 => Fomento agropecuário
     *
     * @return string
     */
    public function getMotDesICMS()
    {
        return $this->motDesICMS;
    }

    /**
     * Sets a new motDesICMS
     *
     * Motivo da desoneração do ICMS:
     * 3  => Uso na agropecuária
     * 9  => Outros
     * 12 => Fomento agropecuário
     *
     * @param string $motDesICMS
     * @return self
     */
    public function setMotDesICMS($motDesICMS)
    {
        $this->motDesICMS = $motDesICMS;
        return $this;
    }
}
