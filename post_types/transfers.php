<?php

function transfers_post_type()
{

    $labels = array(
        'name'                  => 'Transferências',
        'singular_name'         => 'Transferência',
        'menu_name'             => 'Transferências',
        'name_admin_bar'        => 'Transferências',
        'archives'              => 'Transferências Arquivadas',
        'attributes'            => 'Atributos de Transferência',
        'parent_item_colon'     => 'Transferências Relacionada',
        'all_items'             => 'Todas Transferências',
        'add_new_item'          => 'Adicionar Transferência',
        'add_new'               => 'Adicionar Transferência',
        'new_item'              => 'Nova Transferência',
        'edit_item'             => 'Editar Transferência',
        'update_item'           => 'Atualizar Transferência',
        'view_item'             => 'Ver Transferência',
        'view_items'            => 'Visualizar Transferências',
        'search_items'          => 'Procurar Transferência',
        'not_found'             => 'Não encontrado',
        'not_found_in_trash'    => 'Não encontrado na Lixeira',
        'featured_image'        => 'Imagem de Destaque',
        'set_featured_image'    => 'Definir Imagem de Transferência',
        'remove_featured_image' => 'Remover Imagem',
        'use_featured_image'    => 'Usar imagem como Destaque',
        'insert_into_item'      => 'Inserir em Transferência',
        'uploaded_to_this_item' => 'Carregar para Transferência',
        'items_list'            => 'Listar Transferências',
        'items_list_navigation' => 'Navegação de Transferências',
        'filter_items_list'     => 'Filtros de Transferências',
    );
    $args = array(
        'label'                 => 'Transferência',
        'description'           => 'Transferências/Confrontos',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-calendar-alt',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => 'transfers',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'transfers',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );
    register_post_type('transfers_type', $args);

    function remove_yoast_metabox_transfers()
    {
        remove_meta_box('wpseo_meta', 'transfers_type', 'normal');
    }
    add_action('add_meta_boxes', 'remove_yoast_metabox_transfers', 11);
}

add_action('init', 'transfers_post_type', 0);
