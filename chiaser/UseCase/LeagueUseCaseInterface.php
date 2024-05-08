<?php

namespace Chiaser\UseCase;

use Chiaser\Driver\LeagueRepositoryInterface;
use Chiaser\Entity\League;

interface LeagueUseCaseInterface
{
    public function __construct(LeagueRepositoryInterface $leagueRepository);

    public function index($request): array;
    public function show(int $id): League;
    public function delete(int $id): bool;
    public function store(League $league): bool;
}
