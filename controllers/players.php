<?php

function get_players()
{
    return PlayerService::getPlayers();
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/players', array(
        'methods' => 'GET',
        'callback' => 'get_players',
    ));
});

function get_player($data)
{
    return PlayerService::getPlayer($data['id']);
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/player/(?P<id>\d+)', array(
        'methods' => 'GET',
        'callback' => 'get_player',
    ));
});
