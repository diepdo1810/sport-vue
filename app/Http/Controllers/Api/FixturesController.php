<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use OpenApi\Annotations as OA;

class FixturesController extends ApiController
{
    /**
     * @OA\Post(
     *     path="/api/v1/fixtures",
     *     operationId="getFixtures",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin về trận đấu",
     *     description="Endpoint này được sử dụng để lấy thông tin về các trận đấu của một giải đấu cụ thể trong một mùa giải nhất định, bao gồm cả các trận đấu đang diễn ra (live).",
     *     @OA\RequestBody(
     *         required=false,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="live", type="string", description="Chỉ định trạng thái trận đấu (live) hoặc không (all)"),
     *             @OA\Property(property="id", type="string", description="ID của trận đấu"),
     *             @OA\Property(property="ids", type="string", description="Mảng các ID của trận đấu"),
     *             @OA\Property(property="date", type="string", format="date", description="Ngày của trận đấu. Định dạng chuỗi: 'YYYY-MM-DD'"),
     *             @OA\Property(property="team", type="string", description="Tên đội bóng tham gia trận đấu"),
     *             @OA\Property(property="last", type="integer", description="Số trận đấu trước"),
     *             @OA\Property(property="next", type="integer", description="Số trận đấu sau"),
     *             @OA\Property(property="round", type="integer", description="Vòng đấu"),
     *             @OA\Property(property="status", type="string", description="Trạng thái của trận đấu"),
     *             @OA\Property(property="timezone", type="string", description="Múi giờ"),
     *             @OA\Property(property="from", type="string", format="date", description="Ngày bắt đầu. Định dạng chuỗi: 'YYYY-MM-DD'"),
     *             @OA\Property(property="to", type="string", format="date", description="Ngày kết thúc. Định dạng chuỗi: 'YYYY-MM-DD'"),
     *             @OA\Property(property="venue", type="string", description="Sân vận động")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu trận đấu đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="response", type="array", description="Danh sách thông tin trận đấu", @OA\Items(type="object")),
     *             @OA\Property(property="results", type="integer", description="Số lượng kết quả trận đấu trả về")
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
    public function index(Request $request)
    {
        try {
            $params = [
                'league' => ENGLAND_PREMIER_LEAGUE,
                'season' => SEASON,
            ];
            if ($request->has('live')) {
                $params['live'] = $request->live;
            }
            if ($request->has('id')) {
                $params['id'] = $request->id;
            }
            if ($request->has('ids')) {
                $params['ids'] = $request->ids;
            }
            if ($request->has('date')) {
                // stringYYYY-MM-DD
                $params['date'] = Carbon::parse($request->date)->format('Y-m-d');
            }
            if ($request->has('team')) {
                $params['team'] = $request->team;
            }
            if ($request->has('last')) {
                $params['last'] = $request->last;
            }
            if ($request->has('next')) {
                $params['next'] = $request->next;
            }
            if ($request->has('round')) {
                $params['round'] = $request->round;
            }
            if ($request->has('status')) {
                $params['status'] = $request->status;
            }
            if ($request->has('timezone')) {
                $params['timezone'] = $request->timezone;
            }
            if ($request->has('from')) {
                // stringYYYY-MM-DD
                $params['from'] = Carbon::parse($request->from)->format('Y-m-d');
            }
            if ($request->has('to')) {
                // stringYYYY-MM-DD
                $params['to'] = Carbon::parse($request->to)->format('Y-m-d');
            }
            if ($request->has('venue')) {
                $params['venue'] = $request->venue;
            }
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures', $params);
            $data = $response->json();
            $result = [
                'fixtures' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Fixtures data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Get(
     *     path="/api/v1/fixtures/rounds",
     *     operationId="getRound",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin về vòng đấu",
     *     description="Endpoint này được sử dụng để lấy thông tin về vòng đấu của một giải đấu cụ thể trong một mùa giải nhất định.",
     *     @OA\Parameter(
     *         name="league",
     *         in="query",
     *         required=false,
     *         description="Mã của giải đấu",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Parameter(
     *         name="season",
     *         in="query",
     *         required=false,
     *         description="Năm mùa giải",
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu vòng đấu đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="response", type="array", description="Danh sách thông tin vòng đấu", @OA\Items(type="object")),
     *             @OA\Property(property="results", type="integer", description="Số lượng kết quả vòng đấu trả về")
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
    public function rounds(): JsonResponse
    {
        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/rounds', [
                    'league' => ENGLAND_PREMIER_LEAGUE,
                    'season' => SEASON,
                    'current' => false
                ]);
            $data = $response->json();
            $result = [
                'rounds' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Round data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/fixtures/head-to-head",
     *     operationId="getHeadToHead",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin đối đầu trực tiếp",
     *     description="Endpoint này được sử dụng để lấy thông tin về các trận đấu đối đầu trực tiếp giữa hai đội bóng.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="h2h", type="string", description="Thông tin đối đầu trực tiếp giữa hai đội bóng"),
     *             @OA\Property(property="date", type="string", format="date", description="Ngày của trận đấu. Định dạng chuỗi: 'YYYY-MM-DD'"),
     *             @OA\Property(property="last", type="integer", description="Số trận đấu trước"),
     *             @OA\Property(property="next", type="integer", description="Số trận đấu sau"),
     *             @OA\Property(property="venue", type="string", description="Sân vận động"),
     *             @OA\Property(property="status", type="string", description="Trạng thái của trận đấu"),
     *             @OA\Property(property="timezone", type="string", description="Múi giờ"),
     *             @OA\Property(property="from", type="string", format="date", description="Ngày bắt đầu. Định dạng chuỗi: 'YYYY-MM-DD'"),
     *             @OA\Property(property="to", type="string", format="date", description="Ngày kết thúc. Định dạng chuỗi: 'YYYY-MM-DD'")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu đối đầu trực tiếp đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="fixtures", type="array", description="Danh sách thông tin trận đấu đối đầu trực tiếp", @OA\Items(type="object")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả trận đấu trả về"),
     *             @OA\Property(property="errors", type="array", description="Danh sách lỗi", @OA\Items(type="object"))
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
    public function headToHead(Request $request)
    {
        $params = [
            'league' => ENGLAND_PREMIER_LEAGUE,
            'season' => SEASON,
            'h2h' => $request->h2h
        ];
        if ($request->has('date')) {
            $params['date'] = Carbon::parse($request->date)->format('Y-m-d');
        }
        if ($request->has('last')) {
            $params['last'] = $request->last;
        }
        if ($request->has('next')) {
            $params['next'] = $request->next;
        }
        if ($request->has('venue')) {
            $params['venue'] = $request->venue;
        }
        if ($request->has('status')) {
            $params['status'] = $request->status;
        }
        if ($request->has('timezone')) {
            $params['timezone'] = $request->timezone;
        }
        if ($request->has('from')) {
            $params['from'] = Carbon::parse($request->from)->format('Y-m-d');
        }
        if ($request->has('to')) {
            $params['to'] = Carbon::parse($request->to)->format('Y-m-d');
        }
        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/headtohead', $params);
            $data = $response->json();
            $result = [
                'fixtures' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Head to head data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/fixtures/statistics",
     *     operationId="getStatisticsFixtures",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin thống kê trận đấu",
     *     description="Endpoint này được sử dụng để lấy thông tin thống kê cho một trận đấu cụ thể.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="fixture", type="string", description="ID của trận đấu"),
     *             @OA\Property(property="team", type="string", description="ID của đội bóng"),
     *             @OA\Property(property="type", type="string", description="Loại thống kê")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu thống kê trận đấu đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="statistics", type="array", description="Danh sách thông tin thống kê trận đấu", @OA\Items(type="object")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả thống kê trả về"),
     *             @OA\Property(property="errors", type="array", description="Danh sách lỗi", @OA\Items(type="object"))
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
        $params = [
            'fixture' => $request->fixture,
        ];

        if ($request->has('team')) {
            $params['team'] = $request->team;
        }
        if ($request->has('type')) {
            $params['type'] = $request->type;
        }

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/statistics', $params);
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
     *     path="/api/v1/fixtures/events",
     *     operationId="getEvents",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin sự kiện trong trận đấu",
     *     description="Endpoint này được sử dụng để lấy thông tin về các sự kiện diễn ra trong một trận đấu cụ thể.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="fixture", type="string", description="ID của trận đấu"),
     *             @OA\Property(property="team", type="string", description="ID của đội bóng"),
     *             @OA\Property(property="type", type="string", description="Loại sự kiện"),
     *             @OA\Property(property="player", type="string", description="ID của cầu thủ")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu sự kiện trong trận đấu đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="events", type="array", description="Danh sách thông tin sự kiện trong trận đấu", @OA\Items(type="object")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả sự kiện trả về"),
     *             @OA\Property(property="errors", type="array", description="Danh sách lỗi", @OA\Items(type="object"))
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
    public function events(Request $request)
    {
        $params = [
            'fixture' => $request->fixture,
        ];
        if ($request->has('team')) {
            $params['team'] = $request->team;
        }
        if ($request->has('type')) {
            $params['type'] = $request->type;
        }
        if ($request->has('player')) {
            $params['player'] = $request->player;
        }

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/events', $params);
            $data = $response->json();
            $result = [
                'events' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Events data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/fixtures/lineups",
     *     operationId="getLineups",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin đội hình thi đấu",
     *     description="Endpoint này được sử dụng để lấy thông tin về đội hình thi đấu trong một trận đấu cụ thể.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="fixture", type="string", description="ID của trận đấu"),
     *             @OA\Property(property="team", type="string", description="ID của đội bóng"),
     *             @OA\Property(property="player", type="string", description="ID của cầu thủ"),
     *             @OA\Property(property="type", type="string", description="Loại đội hình")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu đội hình thi đấu đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="lineups", type="array", description="Danh sách thông tin đội hình thi đấu", @OA\Items(type="object")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả đội hình trả về"),
     *             @OA\Property(property="errors", type="array", description="Danh sách lỗi", @OA\Items(type="object"))
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
    public function lineups(Request $request)
    {
        $params = [
            'fixture' => $request->fixture,
        ];
        if ($request->has('team')) {
            $params['team'] = $request->team;
        }
        if ($request->has('player')) {
            $params['player'] = $request->player;
        }
        if ($request->has('type')) {
            $params['type'] = $request->type;
        }

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/lineups', $params);
            $data = $response->json();
            $result = [
                'lineups' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Lineups data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }

    /**
     * @OA\Post(
     *     path="/api/v1/fixtures/players",
     *     operationId="getPlayers",
     *     tags={"Fixtures"},
     *     summary="Lấy thông tin cầu thủ",
     *     description="Endpoint này được sử dụng để lấy thông tin về các cầu thủ tham gia trong một trận đấu cụ thể.",
     *     @OA\RequestBody(
     *         required=true,
     *         description="Dữ liệu đầu vào",
     *         @OA\JsonContent(
     *             @OA\Property(property="fixture", type="string", description="ID của trận đấu"),
     *             @OA\Property(property="team", type="string", description="ID của đội bóng")
     *         )
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Dữ liệu cầu thủ đã được truy vấn thành công",
     *         @OA\JsonContent(
     *             @OA\Property(property="players", type="array", description="Danh sách thông tin cầu thủ", @OA\Items(type="object")),
     *             @OA\Property(property="count", type="integer", description="Số lượng kết quả cầu thủ trả về"),
     *             @OA\Property(property="errors", type="array", description="Danh sách lỗi", @OA\Items(type="object"))
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
    public function players(Request $request)
    {
        $params = [
            'fixture' => $request->fixture,
        ];
        if ($request->has('team')) {
            $params['team'] = $request->team;
        }

        try {
            $response = Http::withHeaders($this->setHeaders())
                ->get($this->apiUrl . '/fixtures/players', $params);
            $data = $response->json();
            $result = [
                'players' => $data['response'],
                'count' => $data['results'],
                'errors' => $data['errors']
            ];
            return $this->buildResponseData($result, 'Players data retrieved successfully', 200);
        } catch (\Exception $e) {
            return $this->buildResponseData($e->getMessage(), 'Internal Server Error', 500);
        }
    }
}
