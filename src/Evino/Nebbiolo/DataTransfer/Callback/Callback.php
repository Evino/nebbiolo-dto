<?php

namespace Evino\Nebbiolo\DataTransfer\Callback;

use Evino\Nebbiolo\DataTransfer\Base\BaseDataTransfer;

class Callback extends BaseDataTransfer
{
    /** @var string */
    protected $nfeNumber;

    /** @var string */
    protected $orderReference;

    /** @var string */
    protected $nfeKey;

    /** @var string */
    protected $nfeXml;

    /** @var string */
    protected $sefazStatusCode;

    /** @var string */
    protected $sefazLastResponse;

    /** @var string */
    protected $nebbioloStatusCode;

    /** @var string */
    protected $nebbioloStatusDescription;

    /**
     * @return string
     */
    public function getNfeNumber()
    {
        return $this->nfeNumber;
    }

    /**
     * @param string $nfeNumber
     * @return Callback
     */
    public function setNfeNumber($nfeNumber)
    {
        $this->nfeNumber = $nfeNumber;
        return $this;
    }

    /**
     * @return string
     */
    public function getOrderReference()
    {
        return $this->orderReference;
    }

    /**
     * @param string $orderReference
     * @return Callback
     */
    public function setOrderReference($orderReference)
    {
        $this->orderReference = $orderReference;
        return $this;
    }

    /**
     * @return string
     */
    public function getNfeKey()
    {
        return $this->nfeKey;
    }

    /**
     * @param string $nfeKey
     * @return Callback
     */
    public function setNfeKey($nfeKey)
    {
        $this->nfeKey = $nfeKey;
        return $this;
    }

    /**
     * @return string
     */
    public function getNfeXml()
    {
        return $this->nfeXml;
    }

    /**
     * @param string $nfeXml
     * @return Callback
     */
    public function setNfeXml($nfeXml)
    {
        $this->nfeXml = $nfeXml;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazStatusCode()
    {
        return $this->sefazStatusCode;
    }

    /**
     * @param string $sefazStatusCode
     * @return Callback
     */
    public function setSefazStatusCode($sefazStatusCode)
    {
        $this->sefazStatusCode = $sefazStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getSefazLastResponse()
    {
        return $this->sefazLastResponse;
    }

    /**
     * @param string $sefazLastResponse
     * @return Callback
     */
    public function setSefazLastResponse($sefazLastResponse)
    {
        $this->sefazLastResponse = $sefazLastResponse;
        return $this;
    }

    /**
     * @return string
     */
    public function getNebbioloStatusCode()
    {
        return $this->nebbioloStatusCode;
    }

    /**
     * @param string $nebbioloStatusCode
     * @return Callback
     */
    public function setNebbioloStatusCode($nebbioloStatusCode)
    {
        $this->nebbioloStatusCode = $nebbioloStatusCode;
        return $this;
    }

    /**
     * @return string
     */
    public function getNebbioloStatusDescription()
    {
        return $this->nebbioloStatusDescription;
    }

    /**
     * @param string $nebbioloStatusDescription
     * @return Callback
     */
    public function setNebbioloStatusDescription($nebbioloStatusDescription)
    {
        $this->nebbioloStatusDescription = $nebbioloStatusDescription;
        return $this;
    }

}