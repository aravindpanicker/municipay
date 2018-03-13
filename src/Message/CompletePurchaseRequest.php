<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Exception\InvalidResponseException;

/**
 * Omnipay Complete Purchase Request
 */
class CompletePurchaseRequest extends PurchaseRequest
{
    public function getData()
    {
        return $this->httpRequest->query->all();
    }

    public function sendData($data)
    {
        return $this->response = new CompletePurchaseResponse($this, $data);
    }
}
