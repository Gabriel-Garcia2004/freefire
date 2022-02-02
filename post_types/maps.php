<?php

function maps_post_type()
{

    $labels = array(
        'name'                  => 'Mapas',
        'singular_name'         => 'Mapa',
        'menu_name'             => 'Mapas',
        'name_admin_bar'        => 'Mapas',
        'archives'              => 'Mapas Arquivadas',
        'attributes'            => 'Atributos de Mapa',
        'parent_item_colon'     => 'Mapas Relacionada',
        'all_items'             => 'Todas Mapas',
        'add_new_item'          => 'Adicionar Mapa',
        'add_new'               => 'Adicionar Mapa',
        'new_item'              => 'Novo Mapa',
        'edit_item'             => 'Editar Mapa',
        'update_item'           => 'Atualizar Mapa',
        'view_item'             => 'Ver Mapa',
        'view_items'            => 'Visualizar Mapas',
        'search_items'          => 'Procurar Mapa',
        'not_found'             => 'Não encontrado',
        'not_found_in_trash'    => 'Não encontrado na Lixeira',
        'featured_image'        => 'Imagem de Destaque',
        'set_featured_image'    => 'Definir Imagem de Mapa',
        'remove_featured_image' => 'Remover Imagem',
        'use_featured_image'    => 'Usar imagem como Destaque',
        'insert_into_item'      => 'Inserir em Mapa',
        'uploaded_to_this_item' => 'Carregar para Mapa',
        'items_list'            => 'Listar Mapas',
        'items_list_navigation' => 'Navegação de Mapas',
        'filter_items_list'     => 'Filtros de Mapas',
    );
    $args = array(
        'label'                 => 'Mapa',
        'description'           => 'Mapas/Confrontos',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-location-alt',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => 'maps',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'maps',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );
    register_post_type('maps_type', $args);

    function remove_yoast_metabox_maps()
    {
        remove_meta_box('wpseo_meta', 'maps_type', 'normal');
    }
    add_action('add_meta_boxes', 'remove_yoast_metabox_maps', 11);
}

add_action('init', 'maps_post_type', 0);
