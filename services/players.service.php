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

        if (has_post_thumbnail($ID)) :
            $output['image'] = wp_get_attachment_url(
                get_post_thumbnail_id($ID)
            );
        endif;

        $output += get_fields($id);

        return $output;
    }
}
