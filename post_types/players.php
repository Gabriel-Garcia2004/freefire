<?php

function players_post_type()
{

    $labels = array(
        'name'                  => 'Jogadores',
        'singular_name'         => 'Jogador',
        'menu_name'             => 'Jogadores',
        'name_admin_bar'        => 'Jogadores',
        'archives'              => 'Jogadores Arquivadas',
        'attributes'            => 'Atributos de Jogadores',
        'parent_item_colon'     => 'Jogadores Relacionada',
        'all_items'             => 'Todos Jogadores',
        'add_new_item'          => 'Jogador Partida',
        'add_new'               => 'Adicionar Jogador',
        'new_item'              => 'Novo Jogador',
        'edit_item'             => 'Editar Jogador',
        'update_item'           => 'Atualizar Jogador',
        'view_item'             => 'Ver Jogador',
        'view_items'            => 'Visualizar Jogadores',
        'search_items'          => 'Procurar Jogador',
        'not_found'             => 'Não encontrado',
        'not_found_in_trash'    => 'Não encontrado na Lixeira',
        'featured_image'        => 'Imagem de Jogador',
        'set_featured_image'    => 'Definir Imagem de Jogador',
        'remove_featured_image' => 'Remover Imagem',
        'use_featured_image'    => 'Usar imagem como Destaque',
        'insert_into_item'      => 'Inserir em Jogador',
        'uploaded_to_this_item' => 'Carregar para Jogador',
        'items_list'            => 'Listar Jogadores',
        'items_list_navigation' => 'Navegação de Jogadores',
        'filter_items_list'     => 'Filtros de Jogadores',
    );
    $args = array(
        'label'                 => 'Jogador',
        'description'           => 'Players/Jogadores',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-admin-users',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => 'players',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'players',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );
    register_post_type('players_type', $args);

    function remove_yoast_metabox_players()
    {
        remove_meta_box('wpseo_meta', 'players_type', 'normal');
    }
    add_action('add_meta_boxes', 'remove_yoast_metabox_players', 11);
}
add_action('init', 'players_post_type', 0);
