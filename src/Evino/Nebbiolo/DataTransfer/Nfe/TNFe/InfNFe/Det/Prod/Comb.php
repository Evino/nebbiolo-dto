<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;
use Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe\Det\Prod\Comb\Encerrante;

/**
 * Class representing Comb
 */
class Comb extends BaseDataTransfer
{
    /**
     * Código de produto da ANP. codificação de produtos do SIMP
     * (http://www.anp.gov.br)
     *
     * @property string $cProdANP
     */
    protected $cProdANP = null;

    /**
     * Descrição do Produto conforme ANP. Utilizar a descrição de produtos do
     * Sistema de Informações de Movimentação de Produtos - SIMP
     * (http://www.anp.gov.br/simp/).
     *
     * @property string $descANP
     */
    protected $descANP = null;

    /**
     * Percentual do GLP derivado do petróleo no produto GLP (cProdANP=210203001).
     * Informar em número decimal o percentual do GLP derivado de petróleo no produto
     * GLP. Valores 0 a 100.
     *
     * @property string $pGLP
     */
    protected $pGLP = null;

    /**
     * Percentual de gás natural nacional - GLGNn para o produto GLP
     * (cProdANP=210203001). Informar em número decimal o percentual do Gás Natural
     * Nacional - GLGNn para o produto GLP. Valores de 0 a 100.
     *
     * @property string $pGNn
     */
    protected $pGNn = null;

    /**
     * Percentual de gás natural importado GLGNi para o produto GLP
     * (cProdANP=210203001). Informar em número deciaml o percentual do Gás Natural
     * Importado - GLGNi para o produto GLP. Valores de 0 a 100.
     *
     * @property string $pGNi
     */
    protected $pGNi = null;

    /**
     * Percentual de gas natural para o produto GLP
     *
     * @property string $pMixGN
     */
    protected $pMixGN = null;

    /**
     * Valor de partida (cProdANP=210203001). Deve ser informado neste campo o valor
     * por quilograma sem ICMS.
     *
     * @property string $vPart
     */
    protected $vPart = null;

    /**
     * Código de autorização / registro do CODIF. Informar apenas quando a UF
     * utilizar o CODIF (Sistema de Controle do Diferimento do Imposto nas Operações
     * com AEAC - Álcool Etílico Anidro Combustível).
     *
     * @property string $CODIF
     */
    protected $CODIF = null;

    /**
     * Quantidade de combustível
     * faturada à temperatura ambiente.
     * Informar quando a quantidade
     * faturada informada no campo
     * qCom (I10) tiver sido ajustada para
     * uma temperatura diferente da
     * ambiente.
     *
     * @property string $qTemp
     */
    protected $qTemp = null;

    /**
     * Sigla da UF de Consumo
     *
     * @property string $UFCons
     */
    protected $UFCons = null;

    /**
     * CIDE Combustíveis
     *
     * @property Comb\CIDE $CIDE
     */
    protected $CIDE = null;

    /**
     * Informações do grupo de "encerrante"
     *
     * @property Comb\Encerrante $encerrante
     */
    protected $encerrante = null;

    /**
     * @return \stdClass
     *
     */
    public function toNFeTag()
    {
        $tag = parent::toNFeTag();

        if (!is_null($this->getCIDE())) {
            $tag->qBCProd = $this->getCIDE()->getQBCProd();
            $tag->vAliqProd = $this->getCIDE()->getVAliqProd();
            $tag->vCIDE = $this->getCIDE()->getVCIDE();
        }

        return $tag;
    }

    /**
     * Gets as cProdANP
     *
     * Código de produto da ANP. codificação de produtos do SIMP
     * (http://www.anp.gov.br)
     *
     * @return string
     */
    public function getCProdANP()
    {
        return $this->cProdANP;
    }

    /**
     * Sets a new cProdANP
     *
     * Código de produto da ANP. codificação de produtos do SIMP
     * (http://www.anp.gov.br)
     *
     * @param string $cProdANP
     * @return self
     */
    public function setCProdANP($cProdANP)
    {
        $this->cProdANP = $cProdANP;
        return $this;
    }

    /**
     * Gets as descANP
     *
     * Descrição do Produto conforme ANP. Utilizar a descrição de produtos do
     * Sistema de Informações de Movimentação de Produtos - SIMP
     * (http://www.anp.gov.br/simp/).
     *
     * @return string
     */
    public function getDescANP()
    {
        return $this->descANP;
    }

    /**
     * Sets a new descANP
     *
     * Descrição do Produto conforme ANP. Utilizar a descrição de produtos do
     * Sistema de Informações de Movimentação de Produtos - SIMP
     * (http://www.anp.gov.br/simp/).
     *
     * @param string $descANP
     * @return self
     */
    public function setDescANP($descANP)
    {
        $this->descANP = $descANP;
        return $this;
    }

    /**
     * Gets as pGLP
     *
     * Percentual do GLP derivado do petróleo no produto GLP (cProdANP=210203001).
     * Informar em número decimal o percentual do GLP derivado de petróleo no produto
     * GLP. Valores 0 a 100.
     *
     * @return string
     */
    public function getPGLP()
    {
        return $this->pGLP;
    }

    /**
     * Sets a new pGLP
     *
     * Percentual do GLP derivado do petróleo no produto GLP (cProdANP=210203001).
     * Informar em número decimal o percentual do GLP derivado de petróleo no produto
     * GLP. Valores 0 a 100.
     *
     * @param string $pGLP
     * @return self
     */
    public function setPGLP($pGLP)
    {
        $this->pGLP = $pGLP;
        return $this;
    }

    /**
     * Gets as pGNn
     *
     * Percentual de gás natural nacional - GLGNn para o produto GLP
     * (cProdANP=210203001). Informar em número decimal o percentual do Gás Natural
     * Nacional - GLGNn para o produto GLP. Valores de 0 a 100.
     *
     * @return string
     */
    public function getPGNn()
    {
        return $this->pGNn;
    }

    /**
     * Sets a new pGNn
     *
     * Percentual de gás natural nacional - GLGNn para o produto GLP
     * (cProdANP=210203001). Informar em número decimal o percentual do Gás Natural
     * Nacional - GLGNn para o produto GLP. Valores de 0 a 100.
     *
     * @param string $pGNn
     * @return self
     */
    public function setPGNn($pGNn)
    {
        $this->pGNn = $pGNn;
        return $this;
    }

    /**
     * Gets as pGNi
     *
     * Percentual de gás natural importado GLGNi para o produto GLP
     * (cProdANP=210203001). Informar em número deciaml o percentual do Gás Natural
     * Importado - GLGNi para o produto GLP. Valores de 0 a 100.
     *
     * @return string
     */
    public function getPGNi()
    {
        return $this->pGNi;
    }

    /**
     * Sets a new pGNi
     *
     * Percentual de gás natural importado GLGNi para o produto GLP
     * (cProdANP=210203001). Informar em número deciaml o percentual do Gás Natural
     * Importado - GLGNi para o produto GLP. Valores de 0 a 100.
     *
     * @param string $pGNi
     * @return self
     */
    public function setPGNi($pGNi)
    {
        $this->pGNi = $pGNi;
        return $this;
    }

    /**
     * Gets as pMixGN
     *
     * Percentual de gas natural para o produto GLP
     *
     * @return string
     */
    public function getPMixGN()
    {
        return $this->pMixGN;
    }

    /**
     * Sets a new pMixGN
     *
     * Percentual de gas natural para o produto GLP
     *
     * @param $pMixGN
     * @return self
     */
    public function setPMixGN($pMixGN)
    {
        $this->pMixGN = $pMixGN;
        return $this;
    }

    /**
     * Gets as vPart
     *
     * Valor de partida (cProdANP=210203001). Deve ser informado neste campo o valor
     * por quilograma sem ICMS.
     *
     * @return string
     */
    public function getVPart()
    {
        return $this->vPart;
    }

    /**
     * Sets a new vPart
     *
     * Valor de partida (cProdANP=210203001). Deve ser informado neste campo o valor
     * por quilograma sem ICMS.
     *
     * @param string $vPart
     * @return self
     */
    public function setVPart($vPart)
    {
        $this->vPart = $vPart;
        return $this;
    }

    /**
     * Gets as CODIF
     *
     * Código de autorização / registro do CODIF. Informar apenas quando a UF
     * utilizar o CODIF (Sistema de Controle do Diferimento do Imposto nas Operações
     * com AEAC - Álcool Etílico Anidro Combustível).
     *
     * @return string
     */
    public function getCODIF()
    {
        return $this->CODIF;
    }

    /**
     * Sets a new CODIF
     *
     * Código de autorização / registro do CODIF. Informar apenas quando a UF
     * utilizar o CODIF (Sistema de Controle do Diferimento do Imposto nas Operações
     * com AEAC - Álcool Etílico Anidro Combustível).
     *
     * @param string $CODIF
     * @return self
     */
    public function setCODIF($CODIF)
    {
        $this->CODIF = $CODIF;
        return $this;
    }

    /**
     * Gets as qTemp
     *
     * Quantidade de combustível
     * faturada à temperatura ambiente.
     * Informar quando a quantidade
     * faturada informada no campo
     * qCom (I10) tiver sido ajustada para
     * uma temperatura diferente da
     * ambiente.
     *
     * @return string
     */
    public function getQTemp()
    {
        return $this->qTemp;
    }

    /**
     * Sets a new qTemp
     *
     * Quantidade de combustível
     * faturada à temperatura ambiente.
     * Informar quando a quantidade
     * faturada informada no campo
     * qCom (I10) tiver sido ajustada para
     * uma temperatura diferente da
     * ambiente.
     *
     * @param string $qTemp
     * @return self
     */
    public function setQTemp($qTemp)
    {
        $this->qTemp = $qTemp;
        return $this;
    }

    /**
     * Gets as UFCons
     *
     * Sigla da UF de Consumo
     *
     * @return string
     */
    public function getUFCons()
    {
        return $this->UFCons;
    }

    /**
     * Sets a new UFCons
     *
     * Sigla da UF de Consumo
     *
     * @param string $UFCons
     * @return self
     */
    public function setUFCons($UFCons)
    {
        $this->UFCons = $UFCons;
        return $this;
    }

    /**
     * Gets as CIDE
     *
     * CIDE Combustíveis
     *
     * @return Comb\CIDE
     */
    public function getCIDE()
    {
        return $this->CIDE;
    }

    /**
     * Sets a new CIDE
     *
     * CIDE Combustíveis
     *
     * @param Comb\CIDE $CIDE
     * @return Comb
     * @internal param $ Comb\CIDE* Comb\CIDE$CIDE
     */
    public function setCIDE(Comb\CIDE $CIDE)
    {
        $this->CIDE = $CIDE;
        return $this;
    }

    /**
     * Gets as encerrante
     *
     * Informações do grupo de "encerrante"
     *
     * @return Encerrante
     */
    public function getEncerrante()
    {
        return $this->encerrante;
    }

    /**
     * Sets a new encerrante
     *
     * Informações do grupo de "encerrante"
     *
     * @param Comb\Encerrante $encerrante
     * @return Comb
     * @internal param $ Comb\Encerrante* Comb\Encerrante $encerrante
     */
    public function setEncerrante(Comb\Encerrante $encerrante)
    {
        $this->encerrante = $encerrante;
        return $this;
    }
}
