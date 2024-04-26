<?php

namespace App\Http\Controllers\Api;

use \Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

class TimezoneController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/v1/timezones",
     *     operationId="getIndex",
     *     tags={"Timezone"},
     *     summary="Lấy dữ liệu múi giờ",
     *     description="Lấy dữ liệu múi giờ từ API thứ ba",
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu múi giờ đã được lấy thành công",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Dữ liệu múi giờ"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Timezone data retrieved successfully",
     *                 description="Thông điệp trả về"
     *             ),
     *             @OA\Property(
     *                 property="status",
     *                 type="integer",
     *                 example=200,
     *                 description="Mã trạng thái HTTP"
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Lỗi nội bộ máy chủ",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="null",
     *                 description="Dữ liệu rỗng"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Internal Server Error",
     *                 description="Thông điệp lỗi"
     *             ),
     *             @OA\Property(
     *                 property="status",
     *                 type="integer",
     *                 example=500,
     *                 description="Mã trạng thái HTTP"
     *             )
     *         )
     *     )
     * )
     */
    public function index(): JsonResponse
    {
        try {
            $response = Http::withHeaders($this->setHeaders())->get($this->apiUrl.'/timezone');
            $data = $response->json();
            $timezone = config('app.timezone');
            // get timezone data in the response
            $timezoneData = array_filter($data['response'], function ($item) use ($timezone) {
                return $item === $timezone;
            });

            return $this->buildResponseData($timezoneData, 'Timezone data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData(null, $e->getMessage(), 500);
        }
    }
}
