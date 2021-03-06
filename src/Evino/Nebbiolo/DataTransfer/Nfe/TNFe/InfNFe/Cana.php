<?php

namespace Evino\Nebbiolo\DataTransfer\Nfe\TNFe\InfNFe;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

/**
 * Class representing Cana
 */
class Cana extends BaseDataTransfer
{
    /**
     * Identificação da safra
     *
     * @property string $safra
     */
    protected $safra = null;

    /**
     * Mês e Ano de Referência, formato: MM/AAAA
     *
     * @property string $ref
     */
    protected $ref = null;

    /**
     * Fornecimentos diários
     *
     * @property Cana\ForDia[] $forDia
     */
    protected $forDia = array();

    /**
     * Total do mês
     *
     * @property string $qTotMes
     */
    protected $qTotMes = null;

    /**
     * Total Anterior
     *
     * @property string $qTotAnt
     */
    protected $qTotAnt = null;

    /**
     * Total Geral
     *
     * @property string $qTotGer
     */
    protected $qTotGer = null;

    /**
     * Deduções - Taxas e Contribuições
     *
     * @property Cana\Deduc[] $deduc
     */
    protected $deduc = array();

    /**
     * Valor dos fornecimentos
     *
     * @property string $vFor
     */
    protected $vFor = null;

    /**
     * Valor Total das Deduções
     *
     * @property string $vTotDed
     */
    protected $vTotDed = null;

    /**
     * Valor Líquido dos fornecimentos
     *
     * @property string $vLiqFor
     */
    protected $vLiqFor = null;

    /**
     * @return array|null
     */
    public function getTagsForDia()
    {
        if (count($this->getForDia()) == 0) {
            return null;
        }

        $tagsArray = array();
        foreach ($this->getForDia() as $dia) {
            $tagsArray[] = $dia->toNFeTag();
        }

        return $tagsArray;
    }

    /**
     * @return array|null
     */
    public function getTagsDeduc()
    {
        if (count($this->getDeduc()) == 0) {
            return null;
        }

        $tagsArray = array();
        foreach ($this->getDeduc() as $dia) {
            $tagsArray[] = $dia->toNFeTag();
        }

        return $tagsArray;
    }

    /**
     * Gets as safra
     *
     * Identificação da safra
     *
     * @return string
     */
    public function getSafra()
    {
        return $this->safra;
    }

    /**
     * Sets a new safra
     *
     * Identificação da safra
     *
     * @param string $safra
     * @return self
     */
    public function setSafra($safra)
    {
        $this->safra = $safra;
        return $this;
    }

    /**
     * Gets as ref
     *
     * Mês e Ano de Referência, formato: MM/AAAA
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * Mês e Ano de Referência, formato: MM/AAAA
     *
     * @param string $ref
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * Adds as forDia
     *
     * Fornecimentos diários
     *
     * @return self
     * @param Cana\ForDia $forDia
     */
    public function addToForDia(Cana\ForDia $forDia)
    {
        $this->forDia[] = $forDia;
        return $this;
    }

    /**
     * isset forDia
     *
     * Fornecimentos diários
     *
     * @param int $index
     * @return boolean
     */
    public function issetForDia($index)
    {
        return isset($this->forDia[$index]);
    }

    /**
     * unset forDia
     *
     * Fornecimentos diários
     *
     * @param int $index
     * @return void
     */
    public function unsetForDia($index)
    {
        unset($this->forDia[$index]);
    }

    /**
     * Gets as forDia
     *
     * Fornecimentos diários
     *
     * @return Cana\ForDia[]
     */
    public function getForDia()
    {
        return $this->forDia;
    }

    /**
     * Sets a new forDia
     *
     * Fornecimentos diários
     *
     * @param Cana\ForDia[] $forDia
     * @return self
     */
    public function setForDia(array $forDia)
    {
        $this->forDia = $forDia;
        return $this;
    }

    /**
     * Gets as qTotMes
     *
     * Total do mês
     *
     * @return string
     */
    public function getQTotMes()
    {
        return $this->qTotMes;
    }

    /**
     * Sets a new qTotMes
     *
     * Total do mês
     *
     * @param string $qTotMes
     * @return self
     */
    public function setQTotMes($qTotMes)
    {
        $this->qTotMes = $qTotMes;
        return $this;
    }

    /**
     * Gets as qTotAnt
     *
     * Total Anterior
     *
     * @return string
     */
    public function getQTotAnt()
    {
        return $this->qTotAnt;
    }

    /**
     * Sets a new qTotAnt
     *
     * Total Anterior
     *
     * @param string $qTotAnt
     * @return self
     */
    public function setQTotAnt($qTotAnt)
    {
        $this->qTotAnt = $qTotAnt;
        return $this;
    }

    /**
     * Gets as qTotGer
     *
     * Total Geral
     *
     * @return string
     */
    public function getQTotGer()
    {
        return $this->qTotGer;
    }

    /**
     * Sets a new qTotGer
     *
     * Total Geral
     *
     * @param string $qTotGer
     * @return self
     */
    public function setQTotGer($qTotGer)
    {
        $this->qTotGer = $qTotGer;
        return $this;
    }

    /**
     * Adds as deduc
     *
     * Deduções - Taxas e Contribuições
     *
     * @return self
     * @param Cana\Deduc $deduc
     */
    public function addToDeduc(Cana\Deduc $deduc)
    {
        $this->deduc[] = $deduc;
        return $this;
    }

    /**
     * isset deduc
     *
     * Deduções - Taxas e Contribuições
     *
     * @param int $index
     * @return boolean
     */
    public function issetDeduc($index)
    {
        return isset($this->deduc[$index]);
    }

    /**
     * unset deduc
     *
     * Deduções - Taxas e Contribuições
     *
     * @param int $index
     * @return void
     */
    public function unsetDeduc($index)
    {
        unset($this->deduc[$index]);
    }

    /**
     * Gets as deduc
     *
     * Deduções - Taxas e Contribuições
     *
     * @return Cana\Deduc[]
     */
    public function getDeduc()
    {
        return $this->deduc;
    }

    /**
     * Sets a new deduc
     *
     * Deduções - Taxas e Contribuições
     *
     * @param Cana\Deduc[] $deduc
     * @return self
     */
    public function setDeduc(array $deduc)
    {
        $this->deduc = $deduc;
        return $this;
    }

    /**
     * Gets as vFor
     *
     * Valor dos fornecimentos
     *
     * @return string
     */
    public function getVFor()
    {
        return $this->vFor;
    }

    /**
     * Sets a new vFor
     *
     * Valor dos fornecimentos
     *
     * @param string $vFor
     * @return self
     */
    public function setVFor($vFor)
    {
        $this->vFor = $vFor;
        return $this;
    }

    /**
     * Gets as vTotDed
     *
     * Valor Total das Deduções
     *
     * @return string
     */
    public function getVTotDed()
    {
        return $this->vTotDed;
    }

    /**
     * Sets a new vTotDed
     *
     * Valor Total das Deduções
     *
     * @param string $vTotDed
     * @return self
     */
    public function setVTotDed($vTotDed)
    {
        $this->vTotDed = $vTotDed;
        return $this;
    }

    /**
     * Gets as vLiqFor
     *
     * Valor Líquido dos fornecimentos
     *
     * @return string
     */
    public function getVLiqFor()
    {
        return $this->vLiqFor;
    }

    /**
     * Sets a new vLiqFor
     *
     * Valor Líquido dos fornecimentos
     *
     * @param string $vLiqFor
     * @return self
     */
    public function setVLiqFor($vLiqFor)
    {
        $this->vLiqFor = $vLiqFor;
        return $this;
    }
}
