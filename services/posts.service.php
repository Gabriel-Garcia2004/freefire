<?php

class PostService
{
    static function getPost($id)
    {
        $post = get_post($id);

        return array(
            "id" => $post->ID,
            "title" => array(
                "rendered" => $post->post_title
            ),
            "excerpt" => array(
                "rendered" => $post->post_excerpt
            ),
            "data" => $post->post_date,
            "slug" => $post->post_name,
            "featured_image_src" => $post->featured_image_src
        );
    }
}
