<?php

namespace Omnipay\Municipay\Message;

use Omnipay\Common\Message\AbstractRequest;

/**
 * Omnipay Purchase Request
 */
class PurchaseRequest extends AbstractRequest
{
    public function getSiteId()
    {
        return $this->getParameter('siteId');
    }

    public function setSiteid($value)
    {
        return $this->setParameter('siteId', $value);
    }

    public function getProdId()
    {
        return $this->getParameter('prodId');
    }

    public function setProdId($value)
    {
        return $this->setParameter('prodId', $value);
    }

    public function getUrlKey()
    {
        return $this->getParameter('urlKey');
    }

    public function setUrlKey($value)
    {
        return $this->setParameter('urlKey', $value);
    }

    public function getDemoMode()
    {
        return $this->getParameter('demo_mode');
    }

    public function setDemoMode($value)
    {
        return $this->setParameter('demo_mode', $value);
    }

    public function getRefNum()
    {
        return $this->getParameter('refNum');
    }

    public function setRefNum($value)
    {
        return $this->setParameter('refNum', $value);
    }

    public function getAmount()
    {
        return $this->getParameter('amount');
    }

    public function setAmount($value)
    {
        return $this->setParameter('amount', $value);
    }

    public function getTransactionId()
    {
        return $this->getParameter('transactionId');
    }

    public function setTransactionId($value)
    {
        return $this->setParameter('transactionId', $value);
    }

    public function getRedirectUrl()
    {
        return $this->getParameter('redirectURL');
    }

    public function setRedirectUrl($value)
    {
        return $this->setParameter('redirectURL', $value);
    }

    public function getListItmes()
    {
        return $this->getParameter('listItems');
    }

    public function setListItems($value)
    {
        return $this->setParameter('listItems', $value);
    }

    public function getData()
    {
        $this->validate('siteId','urlKey');
        foreach($this->getListItmes() as $index => $listItem) {
            $lineNumber = $index + 1;
            foreach($listItem as $key => $value) {
                $this->setParameter($key . '_' . $lineNumber, $value);
            }
        }
        $data = array();
        $data = $this->getParameters();
        unset($data['listItems']);
        return $data;
    }

    public function sendData($data)
    {
        return $this->response = new PurchaseResponse($this, $data);
    }
}
