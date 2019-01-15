<?php namespace Crunch\Salesforce;

class ClientConfig implements ClientConfigInterface {

    /**
     * @var
     */
    private $baseUrl;

    /**
     * @var
     */
    private $loginUrl;
    /**
     * @var
     */
    private $clientId;
    /**
     * @var
     */
    private $clientSecret;

    public function __construct($loginUrl, $clientId, $clientSecret)
    {
        $this->loginUrl = $loginUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getBaseUrl()
    {
      return $this->baseUrl;
    }

    /**
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->loginUrl;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }
}