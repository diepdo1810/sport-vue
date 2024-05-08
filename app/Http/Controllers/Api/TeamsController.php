<?php

namespace App\Http\Controllers\Api;

use App\Models\Team;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

class TeamsController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/v1/teams",
     *     operationId="getTeams",
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
    public function index()
    {
        try {
            // $teams = Team::where('response', '!=', null)->first();
            // if ($teams) {
            //     return $this->buildResponseData($teams->response, 'Seasons data retrieved successfully', 200);
            // }
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams', [
                    'league' => VLEAGUE1,
                    'season' => SEASON
                ]);
            $data = $response->json();
            $result = [
                'teams' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            Team::query()->insert(['response' => json_encode($result)]);
            return $this->buildResponseData($result, 'Seasons data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    //    public function information(): JsonResponse
    //    {
    //        try {
    //            $response = Http::withHeaders($this->setHeaders())
    //                ->get($this->apiUrl . '/teams', [
    //                    'league' => ENGLAND_PREMIER_LEAGUE,
    //                    'season' => SEASON
    //                ]);
    //            $data = $response->json();
    //            $result = [
    //                'teams' => $data['response'],
    //                'count' => $data['results'],
    //                'errors' => $data['errors']
    //            ];
    //
    //            return $this->buildResponseData($result, 'Seasons data retrieved successfully', 200);
    //        } catch (\Exception $e) {
    //            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
    //        }
    //    }

    /**
     * @OA\Post(
     *     path="/api/v1/teams/statistics",
     *     operationId="getStatistics",
     *     tags={"Teams"},
     *     summary="Lấy thông tin thống kê về một đội bóng",
     *     description="Endpoint này được sử dụng để lấy thông tin thống kê về một đội bóng dựa trên các tham số như đội bóng, ngày và mùa giải.",
     *     @OA\RequestBody(
     *         required=false,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             required={"team", "date"},
     *             @OA\Property(property="team", type="string", description="Tên của đội bóng."),
     *             @OA\Property(property="date", type="string", format="date", description="Ngày cần thống kê. Định dạng chuỗi: 'YYYY-MM-DD'.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu thống kê đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="statistics", type="array", description="Danh sách thông tin thống kê", @OA\Items(type="string")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả thống kê trả về")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Lỗi nội bộ của máy chủ",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Thông điệp lỗi")
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
        $params['league'] = VLEAGUE1;
        $params['season'] = SEASON;

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams/statistics', $params);
            $data = $response->json();
            $result = [
                'statistics' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Statistics data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/teams/seasons",
     *     operationId="getSeasons",
     *     tags={"Teams"},
     *     summary="Lấy thông tin về các mùa giải của một đội bóng",
     *     description="Endpoint này được sử dụng để lấy thông tin về các mùa giải của một đội bóng dựa trên đội bóng được cung cấp.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             required={"team"},
     *             @OA\Property(property="team", type="string", description="Tên của đội bóng.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu mùa giải đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="seasons", type="array", description="Danh sách các mùa giải", @OA\Items(type="string")),
     *             @OA\Property(property="count", type="integer", description="Số lượng mùa giải trả về")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Lỗi nội bộ của máy chủ",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Thông điệp lỗi")
     *         )
     *     )
     * )
     */
    public function seasons(Request $request)
    {
        $validateData = $request->validate([
            'team' => 'required',
        ]);

        $params = [
            'team' => $validateData['team'],
        ];

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams/seasons', $params);
            $data = $response->json();
            $resu = $data['results'];
            $resp = $data['response'];
            $result = [
                'seasons' => $resp[$resu - 1],
                'count' => $resu,
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Seasons data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/v1/teams/countries",
     *     operationId="getCountries",
     *     tags={"Teams"},
     *     summary="Lấy thông tin về các quốc gia",
     *     description="Endpoint này được sử dụng để lấy thông tin về các quốc gia mà các đội bóng thuộc về.",
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu quốc gia đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="countries", type="array", description="Danh sách các quốc gia", @OA\Items(type="string")),
     *             @OA\Property(property="count", type="integer", description="Số lượng quốc gia trả về")
     *         )
     *     ),
     *     @OA\Response(
     *         response=500,
     *         description="Lỗi nội bộ của máy chủ",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", description="Thông điệp lỗi")
     *         )
     *     )
     * )
     */
    public function countries()
    {
        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/teams/countries');
            $data = $response->json();
            $resp = $data['response'];
            // find in array $resp get key of 'code' => 'GB'
            $key = array_search(ENGLAND_CODE, array_column($resp, 'code'));
            $result = [
                'countries' => $resp[$key],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Countries data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }
}
