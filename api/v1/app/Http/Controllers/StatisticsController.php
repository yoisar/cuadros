<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StatisticsController extends BaseController
{
    /**
     * returns the response time 
     */   public function status()
    {
        $loadingTime = round(microtime(true) - LARAVEL_START, 3);
        return $this->sendResponse($loadingTime, 'Average service response');
        // return $loadingTime;
    }
}
