<?php namespace Crunch\Salesforce;

class TokenClientConfig implements ClientConfigInterface {

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

    public function __construct($loginUrl, $clientId, $clientSecret, $username, $password, $securityToken)
    {
        $this->loginUrl = $loginUrl;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->username = $username;
        $this->password = $password;
        $this->securityToken = $securityToken;
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