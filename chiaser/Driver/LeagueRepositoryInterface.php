<?php

namespace Chiaser\Driver;

use Chiaser\Entity\League;

interface LeagueRepositoryInterface
{
    public function index($request) : array;
    public function show(int $id) :League;
    public function delete(int $id) : bool;
    public function store(League $league) : bool;
}
