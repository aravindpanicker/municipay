<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Message\AbstractResponse;

/**
 * Municipay Complete Purchase Response
 */
class CompletePurchaseResponse extends AbstractResponse
{
    public function isSuccessful()
    {
        return isset($this->data['success']) ? $this->data['success'] : null;
    }

    public function getTransactionReference()
    {
        return isset($this->data['npsTransactionId']) ? $this->data['npsTransactionId'] : null;
    }
}
