<?php


namespace DPOPay;


class JsonPlaceHolder
{
    public function getUsers()
    {
        $apiUrl = 'https://reqres.in/api/users';

        try {

            $jsonResponse = file_get_contents($apiUrl);

            if (!$jsonResponse) {
                throw new \Exception("Error fetching data from the API.");
            }

            $users = json_decode($jsonResponse, true);


            if (isset($users['data'])){
                foreach ($users['data'] as $user) {
                    echo "Name: {$user['first_name']}  {$user['last_name']} \n";
                    echo "Email: {$user['email']}\n";
                    echo ",\n";
                }
            }

        } catch (\Exception $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}