
<?php

function getNameAndPicture($post_fields) {
    $player = PlayerService::getPlayer($post_fields['player']);

    $post_fields['player'] = array(
        "nickname" => $player['nickname'],
        "image" => $player['image']
    );

    $para = TeamsService::getTeam($post_fields['para']);
    
    $post_fields['para'] = array(
        "ID" => $para['ID'],
        "name" => $para['name'],
        "shield" => $para['shield']
    );

    $de = TeamsService::getTeam($post_fields['de']);
    $post_fields['de'] = array(
        "ID" => $de['ID'],
        "name" => $de['name'],
        "shield" => $de['shield']
    );

    return $post_fields;
}