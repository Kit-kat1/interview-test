<?php

namespace App\Services;

use App\Models\Property;
use App\Models\PropertyAnalytics;

class AnalyticsService
{
    /**
     * @param string $guid
     * @return array
     */
    public function getAnalyticsByProperty(string $guid) : array
    {

        $property = Property::where('guid', $guid)->first();
        $analytics = [];

        if ($property) {
            $analytics = PropertyAnalytics::where('property_id', $property->id)->get()->toArray();
        }

        return $analytics;
    }

    /**
     * @param array $data
     * @return bool
     */
    public function create(array $data) : bool
    {
        PropertyAnalytics::create($data);
    }
}
