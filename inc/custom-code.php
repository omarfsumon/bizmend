<?php

function bizmend_output_tracking_codes() {
    // Run only on frontend
    if ( is_admin() ) return;

    // Head section
    add_action('wp_head', function() {
        $head_code = get_field('head_code', 'option');
        if (!empty($head_code)) {
            echo "\n<!-- Custom Head Code -->\n" . $head_code . "\n<!-- /Custom Head Code -->\n";
        }
    });

    // Immediately after <body>
    add_action('wp_body_open', function() {
        $body_start = get_field('body_start', 'option');
        if (!empty($body_start)) {
            echo "\n<!-- Custom Body Start Code -->\n" . $body_start . "\n<!-- /Custom Body Start Code -->\n";
        }
    });

    // Before </body>
    add_action('wp_footer', function() {
        $footer_code = get_field('footer_code', 'option');
        if (!empty($footer_code)) {
            echo "\n<!-- Custom Footer Code -->\n" . $footer_code . "\n<!-- /Custom Footer Code -->\n";
        }
    });
}
add_action('init', 'bizmend_output_tracking_codes');
