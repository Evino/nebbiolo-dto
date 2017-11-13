<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType;

/**
 * Class representing PISAType
 */
class PISAType
{

    /**
     * Código de Situação Tributária do PIS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISAliqAType
     * $pISAliq
     */
    private $pISAliq = null;

    /**
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISQtdeAType
     * $pISQtde
     */
    private $pISQtde = null;

    /**
     * Código de Situação Tributária do PIS.
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISNTAType
     * $pISNT
     */
    private $pISNT = null;

    /**
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @property
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISOutrAType
     * $pISOutr
     */
    private $pISOutr = null;

    /**
     * Gets as pISAliq
     *
     * Código de Situação Tributária do PIS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISAliqAType
     */
    public function getPISAliq()
    {
        return $this->pISAliq;
    }

    /**
     * Sets a new pISAliq
     *
     * Código de Situação Tributária do PIS.
     *  01 – Operação Tributável - Base de Cálculo = Valor da Operação
     * Alíquota Normal (Cumulativo/Não Cumulativo);
     * 02 - Operação Tributável - Base de Calculo = Valor da Operação (Alíquota
     * Diferenciada);
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISAliqAType
     * $pISAliq
     * @return self
     */
    public function setPISAliq(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISAliqAType $pISAliq)
    {
        $this->pISAliq = $pISAliq;
        return $this;
    }

    /**
     * Gets as pISQtde
     *
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISQtdeAType
     */
    public function getPISQtde()
    {
        return $this->pISQtde;
    }

    /**
     * Sets a new pISQtde
     *
     * Código de Situação Tributária do PIS.
     * 03 - Operação Tributável - Base de Calculo = Quantidade Vendida x Alíquota
     * por Unidade de Produto;
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISQtdeAType
     * $pISQtde
     * @return self
     */
    public function setPISQtde(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISQtdeAType $pISQtde)
    {
        $this->pISQtde = $pISQtde;
        return $this;
    }

    /**
     * Gets as pISNT
     *
     * Código de Situação Tributária do PIS.
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISNTAType
     */
    public function getPISNT()
    {
        return $this->pISNT;
    }

    /**
     * Sets a new pISNT
     *
     * Código de Situação Tributária do PIS.
     * 04 - Operação Tributável - Tributação Monofásica - (Alíquota Zero);
     * 06 - Operação Tributável - Alíquota Zero;
     * 07 - Operação Isenta da contribuição;
     * 08 - Operação Sem Incidência da contribuição;
     * 09 - Operação com suspensão da contribuição;
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISNTAType
     * $pISNT
     * @return self
     */
    public function setPISNT(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISNTAType $pISNT)
    {
        $this->pISNT = $pISNT;
        return $this;
    }

    /**
     * Gets as pISOutr
     *
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @return
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISOutrAType
     */
    public function getPISOutr()
    {
        return $this->pISOutr;
    }

    /**
     * Sets a new pISOutr
     *
     * Código de Situação Tributária do PIS.
     * 99 - Outras Operações.
     *
     * @param
     * \Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISOutrAType
     * $pISOutr
     * @return self
     */
    public function setPISOutr(\Evino\Gallywix\DataTransfer\Nfe\TNFeType\InfNFeAType\DetAType\ImpostoAType\PISAType\PISOutrAType $pISOutr)
    {
        $this->pISOutr = $pISOutr;
        return $this;
    }


}

