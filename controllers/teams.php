<?php

function get_teams()
{
    return TeamsService::getTeams();
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/teams', array(
        'methods' => 'GET',
        'callback' => 'get_teams',
    ));
});

function get_team($data)
{
    return TeamsService::getTeam($data['id']);
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/team/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_team',
    ));
});
