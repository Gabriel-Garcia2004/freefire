<?php

class MatchesService
{
    public $ID;

    function __construct($ID)
    {
        $this->ID = $ID;
    }

    static function getMatches()
    {
        $args = array(
            'post_type'              => 'matches_type',
            'posts_per_page'         => '10',
            'post_status'            => 'publish'
        );

        $query = get_posts($args);
        $output = array();

        foreach ($query as $post) :
            $post_fields['ID'] = $post->ID;
            $post_fields += get_fields($post->ID);
            $jumps = array();

            if (has_post_thumbnail($post->ID)) :
                $post_fields['image'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            endif;

            foreach ($post_fields['jumps'] as $jump) :
                array_push($jumps, MatchesService::parseMapAndBooyah($jump['map'], $jump['booyah']));
            endforeach;

            $post_fields['jumps'] = $jumps;

            array_push($output, $post_fields);
        endforeach;

        return $output;
    }

    static function getMatch($ID)
    {
        $id = intval($ID);
        $output['ID'] = $id;;

        if (has_post_thumbnail($ID)) :
            $output['image'] = wp_get_attachment_url(
                get_post_thumbnail_id($ID)
            );
        endif;

        $output += get_fields($id);
        $jumps = array();

        foreach ($output['jumps'] as $jump) :
            array_push($jumps, MatchesService::parseMapAndBooyah($jump['map'], $jump['booyah']));
        endforeach;

        $output['jumps'] = $jumps;

        return $output;
    }

    static function parseMapAndBooyah($map, $booyah)
    {
        return array(
            "map" => array(
                "name" => get_the_title($map),
                "image" => wp_get_attachment_url(
                    get_post_thumbnail_id($map)
                )
            ),
            "booyah" => array(
                "name" => get_the_title($booyah),
                "image" => wp_get_attachment_url(
                    get_post_thumbnail_id($booyah)
                ),
                "team" =>  get_fields($booyah)
            )
        );
    }
}
