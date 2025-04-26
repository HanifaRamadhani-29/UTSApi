<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\ApiService;

class GamingController extends Controller
{
    protected $apiService;

    public function __construct(ApiService $apiService){
        $this->apiService = $apiService;
    }

    public function getGaming(){
        $gaming = $this->apiService->getGaming();
        return view('gaming', ['data' => $gaming]);
    }
}
