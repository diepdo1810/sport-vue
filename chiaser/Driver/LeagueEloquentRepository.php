<?php

namespace Chiaser\Driver;

use Chiaser\Entity\League;
use App\Models\League as eloquentLeague;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LeagueEloquentRepository implements LeagueRepositoryInterface
{

    /**
     * Get all leagues
     *
     * @param $request
     * @return array
     */
    public function index($request): array
    {
        return eloquentLeague::paginate($request->limit)->toArray();
    }

    public function show(int $id): League
    {
        // TODO: Implement show() method.
    }

    public function delete(int $id): bool
    {
        // TODO: Implement delete() method.
    }

    /**
     * Create a new league
     *
     * @param League $league
     * @return bool
     */
    public function store(League $league): bool
    {
        DB::beginTransaction();
        try {
            eloquentLeague::create((array)$league);
            DB::commit();
            return true;
        } catch (\Exception $e) {
            Log::error($e->getMessage());
            DB::rollBack();
            return false;
        }
    }
}
