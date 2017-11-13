<?php

namespace Evino\Gallywix\DataTransfer\Nfe\xmldsig;

/**
 * Class representing Signature
 *
 *
 * XSD Type: Signature
 */
class Signature
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property SignedInfo $signedInfo
     */
    private $signedInfo = null;

    /**
     * @property SignatureValue $signatureValue
     */
    private $signatureValue = null;

    /**
     * @property KeyInfo $keyInfo
     */
    private $keyInfo = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as signedInfo
     *
     * @return SignedInfo
     */
    public function getSignedInfo()
    {
        return $this->signedInfo;
    }

    /**
     * Sets a new signedInfo
     *
     * @param SignedInfo $signedInfo
     * @return self
     */
    public function setSignedInfo(SignedInfo $signedInfo)
    {
        $this->signedInfo = $signedInfo;
        return $this;
    }

    /**
     * Gets as signatureValue
     *
     * @return SignatureValue
     */
    public function getSignatureValue()
    {
        return $this->signatureValue;
    }

    /**
     * Sets a new signatureValue
     *
     * @param SignatureValue $signatureValue
     * @return self
     */
    public function setSignatureValue(SignatureValue $signatureValue)
    {
        $this->signatureValue = $signatureValue;
        return $this;
    }

    /**
     * Gets as keyInfo
     *
     * @return KeyInfo
     */
    public function getKeyInfo()
    {
        return $this->keyInfo;
    }

    /**
     * Sets a new keyInfo
     *
     * @param KeyInfo $keyInfo
     * @return self
     */
    public function setKeyInfo(KeyInfo $keyInfo)
    {
        $this->keyInfo = $keyInfo;
        return $this;
    }


}

