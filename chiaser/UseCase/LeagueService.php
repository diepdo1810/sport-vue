<?php

namespace Chiaser\UseCase;

use Chiaser\Driver\LeagueRepositoryInterface;
use Chiaser\Entity\League;

class LeagueService implements LeagueUseCaseInterface
{
    public function __construct(LeagueRepositoryInterface $leagueRepository)
    {
        $this->repository = $leagueRepository;
    }

    public function index($request): array
    {
       return $this->repository->index($request);
    }

    public function show(int $id): League
    {
        return $this->repository->show($id);
    }

    public function delete(int $id): bool
    {
        return $this->repository->delete($id);
    }

    public function store(League $league): bool
    {
        return $this->repository->store($league);
    }
}
