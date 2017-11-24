<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\InfAdic;

use Evino\Gallywix\DataTransfer\Base\BaseGallywixDataTransfer;

/**
 * Class representing ProcRef
 */
class ProcRef extends BaseGallywixDataTransfer
{

    /**
     * Indentificador do processo ou ato
     * concessório
     *
     * @property string $nProc
     */
    protected $nProc = null;

    /**
     * Origem do processo, informar com:
     * 0 - SEFAZ;
     * 1 - Justiça Federal;
     * 2 - Justiça Estadual;
     * 3 - Secex/RFB;
     * 9 - Outros
     *
     * @property string $indProc
     */
    protected $indProc = null;

    /**
     * Gets as nProc
     *
     * Indentificador do processo ou ato
     * concessório
     *
     * @return string
     */
    public function getNProc()
    {
        return $this->nProc;
    }

    /**
     * Sets a new nProc
     *
     * Indentificador do processo ou ato
     * concessório
     *
     * @param string $nProc
     * @return self
     */
    public function setNProc($nProc)
    {
        $this->nProc = $nProc;
        return $this;
    }

    /**
     * Gets as indProc
     *
     * Origem do processo, informar com:
     * 0 - SEFAZ;
     * 1 - Justiça Federal;
     * 2 - Justiça Estadual;
     * 3 - Secex/RFB;
     * 9 - Outros
     *
     * @return string
     */
    public function getIndProc()
    {
        return $this->indProc;
    }

    /**
     * Sets a new indProc
     *
     * Origem do processo, informar com:
     * 0 - SEFAZ;
     * 1 - Justiça Federal;
     * 2 - Justiça Estadual;
     * 3 - Secex/RFB;
     * 9 - Outros
     *
     * @param string $indProc
     * @return self
     */
    public function setIndProc($indProc)
    {
        $this->indProc = $indProc;
        return $this;
    }


}

