<?php
/**
 * Created by PhpStorm.
 * User: Mahmud
 * Date: 25/01/2020
 * Time: 22:01
 */

namespace App\Http\Api;

use App\Http\Api\HttpRequest as GuzzleRequest;

class RewardGateway
{

    public function getList() :array {

        $request = new GuzzleRequest();
        $response = $request->getRequest('GET', 'http://hiring.rewardgateway.net/list', ['hard','hard']);

        return json_decode($response, true);
    }


}