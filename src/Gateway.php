<?php

namespace Omnipay\bambora;

use Omnipay\Common\AbstractGateway;

/**
 * Bambora Gateway
 *
 * @link https://web.na.bambora.com/
 */
class Gateway extends AbstractGateway
{
    public function getName()
    {
        return 'Bambora';
    }

    public function getDefaultParameters()
    {
        return array(
            'merchantId' => '',
            'apiPasscode' => '',
            'username' => '',
            'password' => ''
        );
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

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\AuthorizeRequest
     */
    public function authorize(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\AuthorizeRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\PurchaseRequest
     */
    public function purchase(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\PurchaseRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\bambora\Message\RefundRequest
     */
    public function refund(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\RefundRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\bambora\Message\VoidReqeust
     */
    public function void(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\VoidRequest', $parameters);
    }

    /**
     * @param array $parameters
     *
     * @return \Omnipay\bambora\Message\CaptureRequest
     */
    public function capture(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\CaptureRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\CreateProfileRequest
     */
    public function createProfile(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\CreateProfileRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\FetchProfileRequest
     */
    public function fetchProfile(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\FetchProfileRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\UpdateProfileRequest
     */
    public function updateProfile(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\UpdateProfileRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\DeleteProfileRequest
     */
    public function deleteProfile(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\DeleteProfileRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\CreateProfileCardRequest
     */
    public function createProfileCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\CreateProfileCardRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\FetchProfileCardsRequest
     */
    public function fetchProfileCards(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\FetchProfileCardsRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\UpdateProfileCardsRequest
     */
    public function updateProfileCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\UpdateProfileCardRequest', $parameters);
    }

    /**
     * @param array $parameters
     * @return \Omnipay\bambora\Message\DeleteProfileCardRequest
     */
    public function deleteProfileCard(array $parameters = array())
    {
        return $this->createRequest('\Omnipay\bambora\Message\DeleteProfileCardRequest', $parameters);
    }
}
