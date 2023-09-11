<?php
class GoogleModel
{
    private $client;

    public function __construct($clientId, $clientSecret, $redirectUri)
    {
        $this->client = new Google_Client();
        $this->client->setClientId($clientId);
        $this->client->setClientSecret($clientSecret);
        $this->client->setRedirectUri($redirectUri);
        $this->client->addScope('email');
    }

    public function getAuthUrl()
    {
        return $this->client->createAuthUrl();
    }

    public function getUserData($code)
    {
        $token = $this->client->fetchAccessTokenWithAuthCode($code);
        $this->client->setAccessToken($token['access_token']);

        $oauth = new Google_Service_Oauth2($this->client);
        return $oauth->userinfo->get();
    }
}
?>