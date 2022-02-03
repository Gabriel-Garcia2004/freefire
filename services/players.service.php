<?php

class PlayerService
{
    public $ID;

    function __construct($ID)
    {
        $this->ID = $ID;
    }

    static function getPlayers()
    {
        $args = array(
            'post_type'              => 'players_type',
            'posts_per_page'         => '10',
            'post_status'            => 'publish'
        );

        $query = get_posts($args);
        $output = array();

        foreach ($query as $post) {
            $post_fields['ID'] = $post->ID;
            $post_fields['playerName'] = get_the_title($ID);
            $post_fields += get_fields($post->ID);

            if (has_post_thumbnail($post->ID)) :
                $post_fields['image'] = wp_get_attachment_url(
                    get_post_thumbnail_id($post->ID)
                );
            endif;

            array_push($output, $post_fields);
        }

        return $output;
    }

    static function getPlayer($ID)
    {
        $id = intval($ID);
        $output['ID'] = $ID;;
        $output['player_name'] = get_the_title($ID);

        if (has_post_thumbnail($ID)) :
            $output['image'] = wp_get_attachment_url(
                get_post_thumbnail_id($ID)
            );
        endif;

        if (get_fields($id)) {
            $output += get_fields($id);
        }
        
        $current_time = TeamsService::getTeam($output['current_team']);
        $output['current_team'] = array(
            'ID' => $current_time['ID'],
            'name' => $current_time['name'],
            'shield' => $current_time['shield'],
        );
        
        $previus_teams = array();

        if($output['previous_teams']) {
            $prev_team = TeamsService::getTeam($previous['team']);
            array_push($previus_teams, array(
                'ID' => $prev_team['ID'],
                'name' => $prev_team['name'],
                'shield' => $prev_team['shield'],
            ));
        }

        $output['previous_teams'] = $previus_teams;

        return $output;
    }
}
