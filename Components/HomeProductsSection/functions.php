<?php

namespace Flynt\Components\HomeProductsSection;

use ACFLayouts\Image;

function getACFLayout()
{
    return [
        'name' => 'HomeProductsSection',
        'label' => __('Home Products Section', 'flynt'),
        'sub_fields' => [
            [
                'label' => __('Section Top', 'flynt'),
                'name' => 'section_top_tab',
                'type' => 'tab',
                'placement' => 'top',
            ],
            Image::getACFLayout(),
            [
                'label' => __('Kicker', 'flynt'),
                'name' => 'kicker',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'label' => __('Title', 'flynt'),
                'name' => 'title',
                'type' => 'text',
                'required' => 1,
            ],
            [
                'label' => __('Link', 'flynt'),
                'name' => 'link',
                'type' => 'link',
                'required' => 1,
                'wrapper' => [
                    'width' => 70,
                ],
            ],
            [
                'label' => __('aria-label', 'flynt'),
                'name' => 'aria_label',
                'type' => 'text',
                'wrapper' => [
                    'width' => 30,
                ],
            ],
            [
                'label' => __('Product 1', 'flynt'),
                'name' => 'product1_tab',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'label' => __('Product 1', 'flynt'),
                'name' => 'product1',
                'type' => 'group',
                'required' => 0,
                'sub_fields' => [
                    [
                        'label' => __('Visibility', 'flynt'),
                        'name' => 'visibility',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => __('Visible', 'flynt'),
                        'ui_off_text' => __('Hidden', 'flynt'),
                    ],
                    [
                        'label' => __('SVG Icon', 'flynt'),
                        'name' => 'icon',
                        'type' => 'image',
                        'required' => 1,
                        'preview_size' => 'thumbnail',
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 75,
                        'max_height' => '',
                        'max_size' => '0.1',
                        'mime_types' => 'svg',
                    ],
                    [
                        'label' => __('Label', 'flynt'),
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'required' => 1,
                    ],
                    Image::getACFLayout(),
                ],
            ],
            [
                'label' => __('Product 2', 'flynt'),
                'name' => 'product2_tab',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'label' => __('Product 2', 'flynt'),
                'name' => 'product2',
                'type' => 'group',
                'required' => 0,
                'sub_fields' => [
                    [
                        'label' => __('Visibility', 'flynt'),
                        'name' => 'visibility',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => __('Visible', 'flynt'),
                        'ui_off_text' => __('Hidden', 'flynt'),
                    ],
                    [
                        'label' => __('SVG Icon', 'flynt'),
                        'name' => 'icon',
                        'type' => 'image',
                        'required' => 1,
                        'preview_size' => 'thumbnail',
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 75,
                        'max_height' => '',
                        'max_size' => '0.3',
                        'mime_types' => 'svg',
                    ],
                    [
                        'label' => __('Label', 'flynt'),
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'required' => 1,
                    ],
                    Image::getACFLayout(),
                ],
            ],
            [
                'label' => __('Product 3', 'flynt'),
                'name' => 'product3_tab',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'label' => __('Product 3', 'flynt'),
                'name' => 'product3',
                'type' => 'group',
                'required' => 0,
                'sub_fields' => [
                    [
                        'label' => __('Visibility', 'flynt'),
                        'name' => 'visibility',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => __('Visible', 'flynt'),
                        'ui_off_text' => __('Hidden', 'flynt'),
                    ],
                    [
                        'label' => __('SVG Icon', 'flynt'),
                        'name' => 'icon',
                        'type' => 'image',
                        'required' => 1,
                        'preview_size' => 'thumbnail',
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 75,
                        'max_height' => '',
                        'max_size' => '0.1',
                        'mime_types' => 'svg',
                    ],
                    [
                        'label' => __('Label', 'flynt'),
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'required' => 1,
                    ],
                    Image::getACFLayout(),
                ],
            ],
            [
                'label' => __('Product 4', 'flynt'),
                'name' => 'product4_tab',
                'type' => 'tab',
                'placement' => 'top',
            ],
            [
                'label' => __('Product 4', 'flynt'),
                'name' => 'product4',
                'type' => 'group',
                'required' => 0,
                'sub_fields' => [
                    [
                        'label' => __('Visibility', 'flynt'),
                        'name' => 'visibility',
                        'type' => 'true_false',
                        'default_value' => 1,
                        'ui' => 1,
                        'ui_on_text' => __('Visible', 'flynt'),
                        'ui_off_text' => __('Hidden', 'flynt'),
                    ],
                    [
                        'label' => __('SVG Icon', 'flynt'),
                        'name' => 'icon',
                        'type' => 'image',
                        'required' => 1,
                        'preview_size' => 'thumbnail',
                        'return_format' => 'array',
                        'library' => 'all',
                        'min_width' => 0,
                        'min_height' => 0,
                        'min_size' => 0,
                        'max_width' => 75,
                        'max_height' => '',
                        'max_size' => '0.1',
                        'mime_types' => 'svg',
                    ],
                    [
                        'label' => __('Label', 'flynt'),
                        'name' => 'label',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Title', 'flynt'),
                        'name' => 'title',
                        'type' => 'text',
                        'required' => 1,
                    ],
                    [
                        'label' => __('Link', 'flynt'),
                        'name' => 'link',
                        'type' => 'link',
                        'required' => 1,
                    ],
                    Image::getACFLayout(),
                ],
            ],
        ],
    ];
}