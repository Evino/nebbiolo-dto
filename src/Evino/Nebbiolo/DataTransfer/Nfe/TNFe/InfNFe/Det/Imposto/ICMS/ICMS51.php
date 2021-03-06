<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Imposto\ICMS;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing ICMS51
 */
class ICMS51 extends BaseDataTransfer
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
     * Alíquota do imposto
     *
     * @property string $pICMS
     */
    protected $pICMS = null;

    /**
     * Valor do ICMS da Operação
     *
     * @property string $vICMSOp
     */
    protected $vICMSOp = null;

    /**
     * Percentual do diferemento
     *
     * @property string $pDif
     */
    protected $pDif = null;

    /**
     * Valor do ICMS da diferido
     *
     * @property string $vICMSDif
     */
    protected $vICMSDif = null;

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
     * Alíquota do imposto
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
     * Alíquota do imposto
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
     * Gets as vICMSOp
     *
     * Valor do ICMS da Operação
     *
     * @return string
     */
    public function getVICMSOp()
    {
        return $this->vICMSOp;
    }

    /**
     * Sets a new vICMSOp
     *
     * Valor do ICMS da Operação
     *
     * @param string $vICMSOp
     * @return self
     */
    public function setVICMSOp($vICMSOp)
    {
        $this->vICMSOp = $vICMSOp;
        return $this;
    }

    /**
     * Gets as pDif
     *
     * Percentual do diferemento
     *
     * @return string
     */
    public function getPDif()
    {
        return $this->pDif;
    }

    /**
     * Sets a new pDif
     *
     * Percentual do diferemento
     *
     * @param string $pDif
     * @return self
     */
    public function setPDif($pDif)
    {
        $this->pDif = $pDif;
        return $this;
    }

    /**
     * Gets as vICMSDif
     *
     * Valor do ICMS da diferido
     *
     * @return string
     */
    public function getVICMSDif()
    {
        return $this->vICMSDif;
    }

    /**
     * Sets a new vICMSDif
     *
     * Valor do ICMS da diferido
     *
     * @param string $vICMSDif
     * @return self
     */
    public function setVICMSDif($vICMSDif)
    {
        $this->vICMSDif = $vICMSDif;
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
}
