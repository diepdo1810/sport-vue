<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

class TeamsController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/v1/teams/information",
     *     operationId="getSeasons",
     *     tags={"Teams"},
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
    public function information(): JsonResponse
    {
        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams', [
                    'league' => ENGLAND_PREMIER_LEAGUE,
                    'season' => SEASON
                ]);
            $data = $response->json();
            $result = [
                'teams' => $data['response'],
                'count' => $data['results']
            ];

            return $this->buildResponseData($result, 'Seasons data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/teams/statistics",
     *     operationId="getStatistics",
     *     tags={"Teams"},
     *     summary="Lấy thống kê về một đội bóng",
     *     description="Truy vấn thông tin thống kê về một đội bóng trong một mùa giải cụ thể",
     *     @OA\Parameter(
     *         name="team",
     *         in="query",
     *         required=false,
     *         description="ID của đội bóng",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *          name="date",
     *          in="query",
     *          required=false,
     *          description="Ngày thống kê",
     *          @OA\Schema(type="string")
     *      ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu thống kê đã được lấy thành công",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Dữ liệu thống kê"
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Statistics data retrieved successfully",
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
     *                 type="string",
     *                 description="Thông điệp lỗi"
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
    public function statistics(Request $request)
    {
        $params = [];
        if ($request->has('team')) {
            $params['team'] = $request->team;
        }
        if ($request->has('date')) {
            // string format: 'YYYY-MM-DD'
            $params['date'] = Carbon::parse($request->date)->format('Y-m-d');
        }
        $params['league'] = ENGLAND_PREMIER_LEAGUE;
        $params['season'] = SEASON;

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams/statistics', $params);
            $data = $response->json();
            $result = [
                'statistics' => $data['response'],
                'count' => $data['results']
            ];
            return $this->buildResponseData($result, 'Statistics data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }
}
