<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig\Reference;

use Evino\Gallywix\DataTransfer\Base\AbstractJsonSerializable;

/**
 * Class representing DigestMethod
 */
class DigestMethod extends AbstractJsonSerializable
{

    /**
     * @property string $algorithm
     */
    protected $algorithm = null;

    /**
     * Gets as algorithm
     *
     * @return string
     */
    public function getAlgorithm()
    {
        return $this->algorithm;
    }

    /**
     * Sets a new algorithm
     *
     * @param string $algorithm
     * @return self
     */
    public function setAlgorithm($algorithm)
    {
        $this->algorithm = $algorithm;
        return $this;
    }


}

