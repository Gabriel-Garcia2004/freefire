<?php

function teams_post_type()
{

    $labels = array(
        'name'                  => 'Times',
        'singular_name'         => 'Time',
        'menu_name'             => 'Times',
        'name_admin_bar'        => 'Times',
        'archives'              => 'Times Arquivadas',
        'attributes'            => 'Atributos de Time',
        'parent_item_colon'     => 'Times Relacionada',
        'all_items'             => 'Todas Times',
        'add_new_item'          => 'Adicionar Time',
        'add_new'               => 'Adicionar Time',
        'new_item'              => 'Novo Time',
        'edit_item'             => 'Editar Time',
        'update_item'           => 'Atualizar Time',
        'view_item'             => 'Ver Time',
        'view_items'            => 'Visualizar Times',
        'search_items'          => 'Procurar Time',
        'not_found'             => 'Não encontrado',
        'not_found_in_trash'    => 'Não encontrado na Lixeira',
        'featured_image'        => 'Imagem de Destaque',
        'set_featured_image'    => 'Definir Imagem de Time',
        'remove_featured_image' => 'Remover Imagem',
        'use_featured_image'    => 'Usar imagem como Destaque',
        'insert_into_item'      => 'Inserir em Time',
        'uploaded_to_this_item' => 'Carregar para Time',
        'items_list'            => 'Listar Times',
        'items_list_navigation' => 'Navegação de Times',
        'filter_items_list'     => 'Filtros de Times',
    );
    $args = array(
        'label'                 => 'Time',
        'description'           => 'Times/Equipes',
        'labels'                => $labels,
        'supports'              => array('title', 'thumbnail'),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-groups',
        'show_in_admin_bar'     => false,
        'show_in_nav_menus'     => false,
        'can_export'            => false,
        'has_archive'           => 'teams',
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'rewrite'               => false,
        'capability_type'       => 'post',
        'show_in_rest'          => true,
        'rest_base'             => 'teams',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
    );
    register_post_type('teams_type', $args);

    function remove_yoast_metabox_teams()
    {
        remove_meta_box('wpseo_meta', 'teams_type', 'normal');
    }
    add_action('add_meta_boxes', 'remove_yoast_metabox_teams', 11);
}

add_action('init', 'teams_post_type', 0);
