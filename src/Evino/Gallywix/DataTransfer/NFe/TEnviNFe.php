<?php

namespace Evino\Gallywix\DataTransfer\Nfe;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing TEnviNFe
 *
 * Tipo Pedido de Concessão de Autorização da Nota Fiscal Eletrônica
 * XSD Type: TEnviNFe
 */
class TEnviNFe extends AbstractJsonSerializable
{

    /**
     * @property string $versao
     */
    protected $versao = null;

    /**
     * @property string $idLote
     */
    protected $idLote = null;

    /**
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @property string $indSinc
     */
    protected $indSinc = null;

    /**
     * @property TNFe[] $nFe
     */
    protected $nFe = array(

    );

    /**
     * Gets as versao
     *
     * @return string
     */
    public function getVersao()
    {
        return $this->versao;
    }

    /**
     * Sets a new versao
     *
     * @param string $versao
     * @return self
     */
    public function setVersao($versao)
    {
        $this->versao = $versao;
        return $this;
    }

    /**
     * Gets as idLote
     *
     * @return string
     */
    public function getIdLote()
    {
        return $this->idLote;
    }

    /**
     * Sets a new idLote
     *
     * @param string $idLote
     * @return self
     */
    public function setIdLote($idLote)
    {
        $this->idLote = $idLote;
        return $this;
    }

    /**
     * Gets as indSinc
     *
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @return string
     */
    public function getIndSinc()
    {
        return $this->indSinc;
    }

    /**
     * Sets a new indSinc
     *
     * Indicador de processamento síncrono. 0=NÃO; 1=SIM=Síncrono
     *
     * @param string $indSinc
     * @return self
     */
    public function setIndSinc($indSinc)
    {
        $this->indSinc = $indSinc;
        return $this;
    }

    /**
     * Adds as nFe
     *
     * @return self
     * @param TNFe $nFe
     */
    public function addToNFe(TNFe $nFe)
    {
        $this->nFe[] = $nFe;
        return $this;
    }

    /**
     * isset nFe
     *
     * @param int $index
     * @return boolean
     */
    public function issetNFe($index)
    {
        return isset($this->nFe[$index]);
    }

    /**
     * unset nFe
     *
     * @param int $index
     * @return void
     */
    public function unsetNFe($index)
    {
        unset($this->nFe[$index]);
    }

    /**
     * Gets as nFe
     *
     * @return TNFe[]
     */
    public function getNFe()
    {
        return $this->nFe;
    }

    /**
     * Sets a new nFe
     *
     * @param TNFe[] $nFe
     * @return self
     */
    public function setNFe(array $nFe)
    {
        $this->nFe = $nFe;
        return $this;
    }


}

