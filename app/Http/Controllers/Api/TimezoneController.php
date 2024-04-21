<?php

namespace App\Http\Controllers\Api;

use \Illuminate\Http\JsonResponse;

class TimezoneController extends ApiController
{
    public function index(): JsonResponse
    {
        $timezones = timezone_identifiers_list();
        return $this->buildResponseData($timezones, 'Timezones retrieved successfully', true);
    }
}
