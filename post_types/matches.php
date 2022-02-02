<?php

function matches_post_type()
{

    $labels = array(
        'name'                  => 'Partidas',
        'singular_name'         => 'Partida',
        'menu_name'             => 'Partidas',
        'name_admin_bar'        => 'Partidas',
        'archives'              => 'Partidas Arquivadas',
        'attributes'            => 'Atributos de partida',
        'parent_item_colon'     => 'Partidas Relacionada',
        'all_items'             => 'Todas Partidas',
        'add_new_item'          => 'Adicionar Partida',
        'add_new'               => 'Adicionar Partida',
        'new_item'              => 'Nova Partida',
        'edit_item'             => 'Editar Partida',
        'update_item'           => 'Atualizar Partida',
        'view_item'             => 'Ver Partida',
        'view_items'            => 'Visualizar Partidas',
        'search_items'          => 'Procurar Partida',
        'not_found'             => 'Não encontrado',
        'not_found_in_trash'    => 'Não encontrado na Lixeira',
        'featured_image'        => 'Imagem de Destaque',
        'set_featured_image'    => 'Definir Imagem de Partida',
        'remove_featured_image' => 'Remover Imagem',
        'use_featured_image'    => 'Usar imagem como Destaque',
        'insert_into_item'      => 'Inserir em Partida',
        'uploaded_to_this_item' => 'Carregar para Partida',
        'items_list'            => 'Listar Partidas',
        'items_list_navigation' => 'Navegação de Partidas',
        'filter_items_list'     => 'Filtros de Partidas',
    );
    $args = array(
        'label'                 => 'Partida',
        'description'           => 'Partidas/Confrontos',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-games',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => 'matches',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'matches',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );
    register_post_type('matches_type', $args);

    function remove_yoast_metabox_matches()
    {
        remove_meta_box('wpseo_meta', 'matches_type', 'normal');
    }
    add_action('add_meta_boxes', 'remove_yoast_metabox_matches', 11);
}

add_action('init', 'matches_post_type', 0);
