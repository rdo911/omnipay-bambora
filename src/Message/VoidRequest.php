<?php

namespace Omnipay\Bambora\Message;

/**
 * Bambora Authorize Request
 */
class VoidRequest extends AbstractRequest
{
    /**
     * Transaction type
     *
     * @return string
     */
    protected $transactionType = 'void';

    /**
     * Get the request data
     *
     * @return array
     */
    public function getData()
    {
        $this->validate('transactionId');
        $data = $this->getBaseData();

        // Add auth data
        $data = array_merge($data, $this->getAuthData());
        
        return $data;
    }
}
