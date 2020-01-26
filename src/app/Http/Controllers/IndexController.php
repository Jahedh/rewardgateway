<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use App\Http\Api\RewardGateway;

class IndexController extends Controller
{
    public function index() {

        $rewardGateway = new RewardGateway();
        $responseArray = $rewardGateway->getList();

        $paginatedItems = $this->paginateArray($responseArray);


        return view(('index'),[
            'details' => $paginatedItems]);
    }

    public function paginateArray($responseArray) {

        $request = new Request();

        $currentPage = LengthAwarePaginator::resolveCurrentPage();

        // Create a new Laravel collection from the array data
        $itemCollection = collect($responseArray);

        // Define how many items we want to be visible in each page
        $perPage = 10;

        // Slice the collection to get the items to display in current page
        $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();

        // Create our paginator and pass it to the view
        $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);

        // set url path for generted links
        $paginatedItems->setPath($request->url());

        return $paginatedItems;
    }

}
