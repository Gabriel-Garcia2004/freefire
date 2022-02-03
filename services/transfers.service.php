<?php
include plugin_dir_path( __FILE__ ) . 'utils.php';

class TransfersService
{
    public $ID;

    function __construct($ID)
    {
        $this->ID = $ID;
    }

    static function getTransfers()
    {
        $args = array(
            'post_type'              => 'transfers_type',
            'posts_per_page'         => '10',
            'post_status'            => 'publish'
        );

        $query = get_posts($args);
        $output = array();

        foreach ($query as $post) {
            $post_fields['ID'] = $post->ID;
            $post_fields += get_fields($post->ID);
            $post_fields = getNameAndPicture($post_fields);

            if (has_post_thumbnail($post->ID)) :
                $post_fields['image'] = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
            endif;

            array_push($output, $post_fields);
        }

        return $output;
    }
    
}
