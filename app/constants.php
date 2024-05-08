<?php

// config api
defined('API_VERSION') or define('API_VERSION', env('API_VERSION'));
defined('API_URL') or define('API_URL', env('API_URL', 'https://api-football-v1.p.rapidapi.com/v3'));
defined('API_HOST') or define('API_HOST', env('API_HOST', 'api-football-v1.p.rapidapi.com'));
defined('API_KEY') or define('API_KEY', env('API_KEY', '823c4fa9d6msh8fcbfbe287db1adp1959c4jsn0ed30e4ff84b'));
defined('key') or define('key', 'X-RapidAPI-Key');
defined('host') or define('host', 'X-RapidAPI-Host');

// config league
defined('ENGLAND_PREMIER_LEAGUE') or define('ENGLAND_PREMIER_LEAGUE', '39');
defined('ENGLAND_CODE') or define('ENGLAND_CODE', 'GB');
defined('SPAIN_LA_LIGA') or define('SPAIN_LA_LIGA', '140');
defined('ITALY_SERIE_A') or define('ITALY_SERIE_A', '135');
defined('VLEAGUE1') or define('VLEAGUE1', '340');
defined('SEASON') or define('SEASON', '2023');
