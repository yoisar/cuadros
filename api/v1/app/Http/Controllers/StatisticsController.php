<?php

namespace App\Http\Controllers;

use App\Models\ServiceResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StatisticsController extends BaseController
{
    /**
     * returns the response time 
     */
    public function status()
    {

        $average = ServiceResponse::select(
            // 'id',
            // 'service_name',
            // 'response_time',
            DB::raw('round(AVG(response_time),2) as response_time_avg')
        )
            ->groupBy('service_name')
            ->get();
        // $loadingTime = self::getloadingTime();
        return  $this->sendResponse($average, 'Average service response');
    }
    /**
     * s
     *
     * @return void
     */
    public static function getloadingTime()
    {

        return round(microtime(true) - LARAVEL_START, 3);
        // return $loadingTime;
    }
    /**
     * Undocumented function
     *
     * @param [type] $service
     * @param [type] $loadingTime
     * @return void
     */
    public static function saveResponseTime($service)
    {
        $data = array('service_name' => $service, 'response_time' => self::getloadingTime());
        //start a transansaction
        DB::beginTransaction();
        try {
            $serviceResponse = ServiceResponse::create($data);
            DB::commit();
            return $serviceResponse;
        } catch (\Exception $e) {
            DB::rollback();
            echo $e->getMessage();
            return $e->getMessage();
        }
    }
}
