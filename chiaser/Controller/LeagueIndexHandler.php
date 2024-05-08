<?php

namespace Chiaser\Controller;

use Chiaser\UseCase\LeagueUseCaseInterface;

class LeagueIndexHandler
{
    private $service;

    public function __construct(LeagueUseCaseInterface $service)
    {
        $this->service = $service;
    }

    public function handle($request): array
    {
        return $this->service->index($request);
    }
}
