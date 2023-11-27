<?php


namespace DPOPay\Auth;


use League\OAuth2\Client\Provider\GenericProvider;

class AuthClient
{
    public function oAuthWithGithub()
    {
        $clientId = 'Iv1.66a0aac70926c837';
        $clientSecret = 'c62ad571fb0f8aa788a8a42cc3316b2567255003';
        $accessTokenUrl = 'https://github.com/login/oauth/access_token';

        if (!isset($_GET['code'])) {
            $authorizeUrl = 'https://github.com/login/oauth/authorize';

            $params = [
                'client_id' => $clientId,
                'redirect_uri' => $clientSecret,
                'scope' => 'read:user', // Add more scopes as needed
                'state' => bin2hex(random_bytes(16)), // Unique state parameter for security
            ];

            header('Location: ' . $authorizeUrl . '?' . http_build_query($params));
            exit();
        }

        $params = [
            'client_id' => $clientId,
            'client_secret' => $clientSecret,
            'code' => $_GET['code'],
            'redirect_uri' => 'http://ltest.ms',
            'state' => $_GET['state'],
        ];

        $options = [
            'http' => [
                'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                'method' => 'POST',
                'content' => http_build_query($params),
            ],
        ];

        $context = stream_context_create($options);

        $tokenResponse = file_get_contents($accessTokenUrl, false, $context);

        $tokenData = json_decode($tokenResponse, true);

       if (!isset($tokenData['access_token'])) {
            die('Error obtaining access token.');
        }

        $apiUrl = 'https://api.github.com/user';

        $options = [
            'http' => [
                'header' => 'Authorization: Bearer ' . $tokenData['access_token'],
                'method' => 'GET',
            ],
        ];

        $context = stream_context_create($options);

        $response = file_get_contents($apiUrl, false, $context);

        if ($response === false) {
            return 'error returnig user';
        }

        $userData = json_decode($response, true);

        echo 'User Details:';
        echo '<pre>';
        print_r($userData);
        echo '</pre>';
    }
}