<?php

function get_transfers()
{
    return TransfersService::getTransfers();
}

add_action('rest_api_init', function () {
    register_rest_route('outside/v1', '/transfers', array(
        'methods' => 'GET',
        'callback' => 'get_transfers',
    ));
});
