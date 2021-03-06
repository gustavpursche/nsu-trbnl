<?php
  $BLOCKS = [
    [
      'name' => 'intro',
      'title' => __('Intro'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'format-image',
      'keywords' 	=> array('hero', 'image', 'intro'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'intro-quote',
      'title' => __('Intro mit Zitaten'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'format-image',
      'keywords' 	=> array('hero', 'image', 'intro', 'quote'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'video-grid',
      'title' => __('Videos'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'playlist-video',
      'keywords' 	=> array('video', 'grid'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'image-grid',
      'title' => __('Bilder'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'images-alt2',
      'keywords' 	=> array('image', 'grid'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'columns',
      'title' => __('Spalten'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'layout',
      'keywords' 	=> array('column', 'grid'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'teaser',
      'title' => __('Teaser'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'media-text',
      'keywords' 	=> array('teaser'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'text',
      'title' => __('Text'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'text',
      'keywords' 	=> array('text'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'quote',
      'title' => __('Zitat'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'format-quote',
      'keywords' 	=> array('quote', 'blockquote'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'arrow',
      'title' => __('Pfeil'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'arrow-down-alt',
      'keywords' 	=> array('arrow', 'space'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'info',
      'title' => __('Info'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'info',
      'keywords' 	=> array('info'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'subtitle',
      'title' => __('Untertitel'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'info',
      'keywords' 	=> array('editor-insertmore'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'highlight',
      'title' => __('Hervorhebung'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'info',
      'keywords' 	=> array('align-center'),
      'mode'	=> 'auto',
    ],

    [
      'name' => 'human-entity',
      'title' => __('Person/ Gruppe'),
      'render_callback'	=> 'acf_block_render_callback',
      'category' 	=> 'common',
      'icon' => 'info',
      'keywords' 	=> array('businessman'),
      'mode'	=> 'auto',
    ]
  ];

  function acf_block_render_callback($block) {
    $slug = str_replace('acf/', '', $block['name']);

    if(file_exists(get_theme_file_path("blocks/{$slug}.php"))) {
      include(get_theme_file_path("blocks/{$slug}.php"));
    }
  }

  function acf_init_blocks() {
    global $BLOCKS;

    if( function_exists('acf_register_block') ) {
      foreach($BLOCKS as $block) {
        acf_register_block($block);
      }
    }
  }

  function add_blocks_to_api() {
    if (!function_exists('use_block_editor_for_post_type')) {
      require ABSPATH . 'wp-admin/includes/post.php';
    }

    $post_types = get_post_types_by_support(['editor']);

    foreach ($post_types as $post_type) {
      if (use_block_editor_for_post_type($post_type)) {
        register_rest_field(
          $post_type,
          'blocks',
          [
            'get_callback' => function(array $post) {
              return parse_blocks($post['content']['raw']);
            },
          ]
        );
      }
    }
  }

  function allowed_block_types($allowed_blocks) {
    global $BLOCKS;

    $acf_blocks = array_map(function($block) {
      return "acf/{$block['name']}";
    }, $BLOCKS);

    // disable all core blocks
    $core_blocks = [];

    return array_merge($acf_blocks, $core_blocks);
  }

  function video_update_id($value, $post_id, $field) {
    return array(
      'value' => $value
    );
  }

  function video_prepare_id($field) {
    if ($field['value'] && is_array($field['value'])) {
      $field['value'] = $field['value']['value'];
    }

    return $field;
  }

  add_action('rest_api_init', 'add_blocks_to_api');
  add_action('acf/init', 'acf_init_blocks');
  add_filter('allowed_block_types', 'allowed_block_types');

  // Video field
  add_filter('acf/update_value/key=field_5c87c3029552d', 'video_update_id', 10, 3);
  add_filter('acf/prepare_field/key=field_5c87c3029552d', 'video_prepare_id', 10, 3);
?>
