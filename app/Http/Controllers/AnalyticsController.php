<?php

namespace App\Http\Controllers;

use App\Services\AnalyticsService;
use Illuminate\Http\Request;

class AnalyticsController
{
    public function get(Request $request, AnalyticsService $analyticsService)
    {
        $guid = $request->get('property', '');
        $analytics = $analyticsService->getAnalyticsByProperty($guid);

        return response()->json(json_encode($analytics));
    }

    public function post(\App\Http\Requests\PropertyAnalytics $request, AnalyticsService $analyticsService)
    {
        $data = $request->all();

        if (!$data) {
            return response()->json($data);
        }

        return response()->json($analyticsService->create($data));
    }

    public function put()
    {

    }

    public function delete()
    {

    }
}
