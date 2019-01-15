<?php namespace Crunch\Salesforce;

interface ClientConfigInterface {

    /**
     * @return string
     */
    public function getBaseUrl();

    /**
     * @return string
     */
    public function getLoginUrl();

    /**
     * @return string
     */
    public function getClientId();

    /**
     * @return string
     */
    public function getClientSecret();
}