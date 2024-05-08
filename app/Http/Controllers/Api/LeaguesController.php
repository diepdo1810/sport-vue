<?php

namespace App\Http\Controllers\Api;

use App\Models\League;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

use Chiaser\Controller\LeagueIndexHandler;

use Chiaser\Driver\LeagueEloquentRepository;
use Chiaser\UseCase\LeagueService as LeagueService;

class LeaguesController extends ApiController
{
    /**
     * @OA\Get(
     *     path="/api/v1/leagues",
     *     operationId="getLeagues",
     *     tags={"Leagues"},
     *     summary="Lấy thông tin về các giải đấu",
     *     description="Truy vấn thông tin về các giải đấu bóng đá",
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu giải đấu đã được lấy thành công",
     *         @OA\JsonContent(
     *             @OA\Property(
     *                 property="data",
     *                 type="object",
     *                 description="Dữ liệu giải đấu",
     *                 @OA\Property(
     *                     property="teams",
     *                     type="array",
     *                     @OA\Items(type="object"),
     *                     description="Danh sách các đội bóng trong giải đấu"
     *                 ),
     *                 @OA\Property(
     *                     property="count",
     *                     type="integer",
     *                     description="Số lượng giải đấu"
     *                 ),
     *                 @OA\Property(
     *                     property="errors",
     *                     type="array",
     *                     @OA\Items(type="string"),
     *                     description="Danh sách các lỗi nếu có"
     *                 )
     *             ),
     *             @OA\Property(
     *                 property="message",
     *                 type="string",
     *                 example="Leagues fetched successfully",
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
            $leagues = (new LeagueIndexHandler(new LeagueService(new LeagueEloquentRepository())))->handle(request());
            if ($leagues) {
                return $this->buildResponseData($leagues['data'][0]['response'], 200, 'Leagues fetched successfully');
            }
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/leagues', [
                    'season' => SEASON
                ]);
            $data = $response->json();
            $res = $data['response'];
            // get league and country in array response
            $rs = [];
            array_map(function ($item) use (&$rs) {
                $rs[] = [
                    'id' => $item['league']['id'],
                    'name' => $item['league']['name'],
                    'logo' => $item['league']['logo'],
                    'flag' => $item['country']['flag']
                ];
            }, $res);

            $result = [
                'leagues' => $rs,
                'errors' => $data['errors']
            ];
            League::query()->insert(['response' => json_encode($result)]);
            return $this->buildResponseData($result, $response->status(), 'Leagues fetched successfully');
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 500, 'An error occurred while fetching leagues');
        }
    }
}
