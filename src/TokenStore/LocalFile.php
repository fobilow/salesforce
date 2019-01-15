<?php namespace Crunch\Salesforce\TokenStore;

use Crunch\Salesforce\AccessToken;
use Crunch\Salesforce\AccessTokenGenerator;

class LocalFile implements StoreInterface
{

    /**
     * @var AccessTokenGenerator
     */
    private $accessTokenGenerator;

    /**
     * @var string
     */
    private $fileName = '/tmp/sf-key';

    /**
     * @param AccessTokenGenerator     $accessTokenGenerator
     */
    public function __construct(AccessTokenGenerator $accessTokenGenerator)
    {
        $this->accessTokenGenerator = $accessTokenGenerator;
    }

    public function setFileName($filePath)
    {
      $this->fileName = $filePath;
    }

    /**
     * @return AccessToken
     * @throws \Exception
     */
    public function fetchAccessToken()
    {
        if(file_exists($this->fileName)){
            $accessTokenJson = file_get_contents($this->fileName);
        }
        else{
            throw new \Exception('Salesforce access token not found');
        }

        return $this->accessTokenGenerator->createFromJson($accessTokenJson);
    }

    /**
     * @param AccessToken $accessToken
     */
    public function saveAccessToken(AccessToken $accessToken)
    {
        file_put_contents($this->fileName, $accessToken->toJson());
    }
}
