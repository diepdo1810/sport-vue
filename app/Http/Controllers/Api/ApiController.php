<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use \Illuminate\Http\JsonResponse;

class ApiController extends Controller
{
    protected $apiUrl = '';
    protected $apiHost = '';
    protected $apiKey = '';

    /**
     * ApiController constructor.
     */
    public function __construct($apiUrl = '', $apiHost = '', $apiKey = '')
    {
        $this->apiUrl = $apiUrl ?? API_URL;
        $this->apiHost = $apiHost ?? API_HOST;
        $this->apiKey = $apiKey ?? API_KEY;
    }

    /*
     * Build a response with a success status
     *
     * @param $data
     * @param $message
     * @param $status
     *
     * @return JsonResponse
     */
    public function buildResponseData($data, $message, $status): JsonResponse
    {
        return response()->json([
            'data' => $data,
            'message' => $message,
            'status' => $status
        ]);
    }

    /**
     * Set headers for the API request
     *
     * @return array
     */
    public function setHeaders(): array
    {
        return [
            key => $this->apiKey,
            host => $this->apiHost
        ];
    }
}
