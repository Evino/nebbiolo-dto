<?php

namespace Evino\Gallywix\DataTransfer\Nfe\TNFe\InfNFe\Cana;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing ForDia
 */
class ForDia extends AbstractJsonSerializable
{

    /**
     * Número do dia
     *
     * @property string $dia
     */
    protected $dia = null;

    /**
     * Quantidade em quilogramas - peso líquido
     *
     * @property string $qtde
     */
    protected $qtde = null;

    /**
     * Gets as dia
     *
     * Número do dia
     *
     * @return string
     */
    public function getDia()
    {
        return $this->dia;
    }

    /**
     * Sets a new dia
     *
     * Número do dia
     *
     * @param string $dia
     * @return self
     */
    public function setDia($dia)
    {
        $this->dia = $dia;
        return $this;
    }

    /**
     * Gets as qtde
     *
     * Quantidade em quilogramas - peso líquido
     *
     * @return string
     */
    public function getQtde()
    {
        return $this->qtde;
    }

    /**
     * Sets a new qtde
     *
     * Quantidade em quilogramas - peso líquido
     *
     * @param string $qtde
     * @return self
     */
    public function setQtde($qtde)
    {
        $this->qtde = $qtde;
        return $this;
    }


}
