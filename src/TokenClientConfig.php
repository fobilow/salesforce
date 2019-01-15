<?php namespace Crunch\Salesforce;

class TokenClientConfig implements ClientConfigInterface {

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

    private $username;

    private $password;

    private $securityToken;

    public function __construct($loginUrl, $url, $clientId, $clientSecret, $username, $password, $securityToken)
    {
        $this->loginUrl = $loginUrl;
        $this->baseUrl = $url;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->username = $username;
        $this->password = $password;
        $this->securityToken = $securityToken;
    }

    /**
     * @return mixed
     */
    public function getBaseUrl()
    {
      return $this->baseUrl;
    }

    /**
     * @param mixed $url
     */
    public function setBaseUrl($url)
    {
      $this->baseUrl = $url;
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
  public function setLoginUrl($url)
  {
    $this->loginUrl = $url;
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

    /**
     * @return string
     */
    public function getUsername()
    {
      return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
      return $this->password;
    }

    /**
     * @return string
     */
    public function getSecurityToken()
    {
      return $this->securityToken;
    }
}