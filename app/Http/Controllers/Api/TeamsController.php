<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

class TeamsController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/seasons",
     *     operationId="getSeasons",
     *     tags={"Season Management"},
     *     summary="Lấy thông tin về các mùa giải",
     *     description="Truy vấn thông tin về các mùa giải của giải đấu bóng đá",
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu mùa giải đã được lấy thành công",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Dữ liệu mùa giải"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Seasons data retrieved successfully",
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
    public function seasons(): JsonResponse
    {
        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams', [
                    'league' => ENGLAND_PREMIER_LEAGUE,
                    'season' => SEASON
                ]);

            return $this->buildResponseData($response->json(), 'Seasons data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData(null, 'Internal Server Error', 500);
        }
    }
}
