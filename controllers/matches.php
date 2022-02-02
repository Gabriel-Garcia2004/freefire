<?php

function get_matches()
{
    return MatchesService::getMatches();
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/matches', array(
        'methods' => 'GET',
        'callback' => 'get_matches',
    ));
});

function get_match($data)
{
    return MatchesService::getMatch($data['id']);
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/match/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_match',
    ));
});
