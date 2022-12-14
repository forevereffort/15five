<?php

namespace Flynt\allowSVG;

// Allow SVG
add_filter(
    'wp_check_filetype_and_ext',
    function ($data, $file, $filename, $mimes) {
        $filetype = wp_check_filetype($filename, $mimes);

        return [
            'ext' => $filetype['ext'],
            'type' => $filetype['type'],
            'proper_filename' => $data['proper_filename'],
        ];
    },
    10,
    4
);

add_filter('upload_mimes', function ($mimes) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    $mimes['avif'] = 'image/avif';

    return $mimes;
});

add_action('admin_head', function () {
    echo '<style type="text/css">
            .attachment-266x266, .thumbnail img {
                width: 100% !important;
                height: auto !important;
            }
          </style>';
});
