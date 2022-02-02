<?php

class TeamsService
{
    public $ID;

    function __construct($ID)
    {
        $this->ID = $ID;
    }

    static function getTeams()
    {
        $args = array(
            'post_type'              => 'teams_type',
            'posts_per_page'         => '10',
            'post_status'            => 'publish'
        );

        $query = get_posts($args);
        $output = array();
        $output['name'] = get_the_title($id);

        foreach ($query as $post) {
            if (has_post_thumbnail($post->ID)) :
                $post_fields['image'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            endif;

            $post_fields = get_fields($post->ID);
            $post_fields['player_1'] = get_fields($post_fields['player_1']);
            $post_fields['player_2'] = get_fields($post_fields['player_2']);
            $post_fields['player_3'] = get_fields($post_fields['player_3']);
            $post_fields['player_4'] = get_fields($post_fields['player_4']);
            $post_fields['coach'] = get_fields($post_fields['coach']);

            $reservations = array();

            foreach ($post_fields['reservations'] as $player) {
                array_push($reservations, get_fields($player['player']));
            }

            $post_fields['ID'] = $post->ID;
            $post_fields['reservations'] = $reservations;

            array_push($output, $post_fields);
        }

        return $output;
    }

    static function getTeam($ID)
    {
        $id = intval($ID);

        $fields = get_fields($id);
        $reservations = array();

        $fields['ID'] = $id;
        $fields['name'] = get_the_title($id);

        if (has_post_thumbnail($id)) :
            $fields['image'] = wp_get_attachment_url(
                get_post_thumbnail_id($id)
            );
        endif;

        $fields['player_1'] = get_fields($fields['player_1']);
        $fields['player_2'] = get_fields($fields['player_2']);
        $fields['player_3'] = get_fields($fields['player_3']);
        $fields['player_4'] = get_fields($fields['player_4']);
        $fields['coach'] = get_fields($fields['coach']);

        if(isset($fields['reservations'])) {
            foreach ($fields['reservations'] as $player) {
                array_push($reservations, get_fields($player['player']));
            }
        }

        $fields['reservations'] = $reservations;

        return $fields;
    }
}
