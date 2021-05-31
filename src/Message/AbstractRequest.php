<?php

namespace Omnipay\bambora\Message;

use Omnipay\Common\Message\ResponseInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Client;

abstract class AbstractRequest extends \Omnipay\Common\Message\AbstractRequest
{
    protected $endpoint = 'https://www.beanstream.com/api/v1';

    public function getEndpoint()
    {
        return $this->endpoint;
    }

    public function getMerchantId()
    {
        return $this->getParameter('merchantId');
    }

    public function setMerchantId($value)
    {
        return $this->setParameter('merchantId', $value);
    }

    public function getApiPasscode()
    {
        return $this->getParameter('apiPasscode');
    }

    public function setApiPasscode($value)
    {
        return $this->setParameter('apiPasscode', $value);
    }

    public function getUsername()
    {
        return $this->getParameter('username');
    }

    public function setUsername($value)
    {
        return $this->setParameter('username', $value);
    }

    public function getPassword()
    {
        return $this->getParameter('password');
    }

    public function setPassword($value)
    {
        return $this->setParameter('password', $value);
    }

    public function getOrderNumber()
    {
        return $this->getParameter('order_number');
    }

    public function setOrderNumber($value)
    {
        return $this->setParameter('order_number', $value);
    }

    public function getLanguage()
    {
        return $this->getParameter('language');
    }

    public function setLanguage($value)
    {
        return $this->setParameter('language', $value);
    }

    public function getComments()
    {
        return $this->getParameter('comments');
    }

    public function setComments($value)
    {
        return $this->setParameter('comments', $value);
    }

    public function getTermUrl()
    {
        return $this->getParameter('term_url');
    }

    public function setTermUrl($value)
    {
        return $this->setParameter('term_url', $value);
    }

    public function getPaymentProfile()
    {
        return $this->getParameter('payment_profile');
    }

    public function setPaymentProfile($value)
    {
        return $this->setParameter('payment_profile', $value);
    }

    public function getToken()
    {
        return $this->getParameter('token');
    }

    public function setToken($value)
    {
        return $this->setParameter('token', $value);
    }

    public function getPaymentMethod()
    {
        return $this->getParameter('payment_method');
    }

    public function setPaymentMethod($value)
    {
        return $this->setParameter('payment_method', $value);
    }

    public function getBilling()
    {
        return $this->getParameter('billing');
    }

    public function setBilling($value)
    {
        return $this->setParameter('billing', $value);
    }

    public function getShipping()
    {
        return $this->getParameter('shipping');
    }

    public function setShipping($value)
    {
        return $this->setParameter('shipping', $value);
    }

    public function getHttpMethod()
    {
        return 'POST';
    }

    public function sendData($data)
    {

        $header = base64_encode($this->getMerchantId() . ':' . $this->getApiPasscode());

$data = array_replace($data, array('payment_method' => 'card'));
//dd($data);
$request = new \GuzzleHttp\Psr7\Request(
                $this->getHttpMethod(),
                $this->getEndpoint(),
                [
                    'Content-Type' => 'application/json',
                    'Authorization' => 'Passcode ' . $header,
                ],
                json_encode($data)
);

// dd($request);
$client = new \GuzzleHttp\Client();
//$response = $client->send($request)->getBody()->getContents();
//$response = $client->send($request)->getBody();
$response = $client->send($request);
//dd(get_class($client));
dd($request);
//dd($response);
//dd($data);

/*
        return $this->response = new Response($response, $response->getBody()->getContents());
        return $this->response = $response->getBody()->getContents();
        return $this->response = new $response->getBody()->getContents();
        return $this->response = new $response;
*/

        return $this->response = $response->getBody()->getContents();


/*
        $header = base64_encode($this->getMerchantId() . ':' . $this->getApiPasscode());

        $httpResponse = $this->httpClient->post(
		$this->getEndpoint(),
	);

        $headers = array_merge(
	    array('Content-Type' => 'application/json'),
	    array('Authorization' => 'Passcode ' . $header)
        );

        $httpRequest  = $this->httpClient->post($data, $headers);
        $httpResponse = $httpRequest->send();

        $this->response = new Response($this, $httpResponse->json());

        if ($httpResponse->hasHeader('Request-Id')) {
            $this->response->setRequestId((string) $httpResponse->getHeader('Request-Id'));
        }

        return $this->response;
*/

    }
}
