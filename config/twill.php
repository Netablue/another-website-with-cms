<?php


return [

    'enabled' => [
        'users-management' => true,
        'media-library' => true,
        'file-library' => true,
        'block-editor' => true,
        'buckets' => true,
        'users-image' => false,
        'settings' => true,
        'dashboard' => true,
        'search' => true,
        'users-description' => false,
        'activitylog' => true,
        'users-2fa' => false,
        'users-oauth' => false,
        'permissions-management' => false,
    ],

    'media_library' => [
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Glide'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
        'show_file_name' => false,
        'media_caption_use_wysiwyg' => false,
        'media_caption_wysiwyg_options' => [
            'modules' => [
                'toolbar' => [
                    'bold',
                    'italic',
                ],
            ],
        ],
    ],

    'block_editor' => [

        // No block
        'use_twill_blocks' => [],

        /*
        |--------------------------------------------------------------------------
        | Twill Block Editor configuration
        |--------------------------------------------------------------------------
        |
        | This array allows you to provide the package with your configuration
        | for the Block editor field and Editor features.
        |
         */
        'block_single_layout' => 'site.layouts.block', // layout to use when rendering a single block in the editor
        'block_views_path' => 'site.blocks', // path where a view file per block type is stored
        'block_views_mappings' => [], // custom mapping of block types and views
        'block_presenter_path' => null, // allow to set a custom presenter to a block model
        // Indicates if blocks templates should be inlined in HTML.
        // When setting to false, make sure to build Twill with your all your custom blocks.
        'inline_blocks_templates' => true,
        'custom_vue_blocks_resource_path' => 'assets/js/blocks',
        // 'use_twill_blocks' => ['text', 'image'],
        'crops' => [
            'image' => [
                'desktop' => [
                    [
                        'name' => 'desktop',
                        'ratio' => 16 / 9,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],

                'tablet' => [
                    [
                        'name' => 'tablet',
                        'ratio' => 4 / 3,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],

                'mobile' => [
                    [
                        'name' => 'mobile',
                        'ratio' => 1,
                        'minValues' => [
                            'width' => 100,
                            'height' => 100,
                        ],
                    ],
                ],
            ],
        ],

        'repeaters' => [],
        'core_icons' => dirname(__DIR__) . '/frontend/icons',
        'directories' => [
            'source' => [

                'blocks' => [
                    [
                        'path' => base_path('vendor/area17/twill/src/Commands/stubs/blocks'),
                        'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
                    ],

                    [
                        'path' => resource_path('views/twill/blocks'),
                        'source' => A17\Twill\Services\Blocks\Block::SOURCE_APP,
                    ],
                ],

                'repeaters' => [
                    [
                        'path' => resource_path('views/twill/repeaters'),
                        'source' => A17\Twill\Services\Blocks\Block::SOURCE_APP,
                    ],

                    [
                        'path' => base_path('vendor/area17/twill/src/Commands/stubs/repeaters'),
                        'source' => A17\Twill\Services\Blocks\Block::SOURCE_TWILL,
                    ],
                ],

                'icons' => [
                    dirname(__DIR__) . '/frontend/icons',
                    resource_path('views/twill/icons'),
                ],
            ],

            'destination' => [
                'make_dir' => true,
                'blocks' => resource_path('views/twill/blocks'),
                'repeaters' => resource_path('views/twill/repeaters'),
            ],
        ],
    ],
];

?>