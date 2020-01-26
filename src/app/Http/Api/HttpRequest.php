<?php
/**
 * Created by PhpStorm.
 * User: Mahmud
 * Date: 26/01/2020
 * Time: 02:49
 */

namespace App\Http\Api;

use GuzzleHttp\Client;

class HttpRequest
{

    public function getRequest($method, $url, $array) {

        $client = new Client();

        try {

            $response = $client->request($method, $url, [
                'auth' => $array
            ]);

            $response = $response->getBody()->getContents();


        } catch (\GuzzleHttp\GuzzleException $e) {

        }

        return $response;
    }

}