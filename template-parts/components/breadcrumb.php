<?php
/**
 * Breadcrumb Component
 */

// Dynamic Breadcrumb Function
function globalizer_get_breadcrumb() {
    if (!is_single()) return;

    $output = '<nav class="flex py-4" aria-label="Breadcrumb">';
    $output .= '<ol class="inline-flex items-center space-x-1">';

    // 🏠 Home link
    $output .= '<li class="inline-flex items-center">';
    $output .= '<a href="' . home_url() . '" class="inline-flex items-center text-sm font-medium text-gray-500 hover:text-blue-600">';
    $output .= '<svg class="w-4 h-4 mr-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
    </svg>
    Home</a>';
    $output .= '</li>';

    // 🧩 Post type link
    $post_type = get_post_type();
    $post_type_obj = get_post_type_object($post_type);

    if ($post_type_obj) {
        // Label change: if it's 'post', show "Blog"
        $label = ($post_type === 'post') ? 'Blog' : $post_type_obj->labels->singular_name;

        if ($post_type_obj->has_archive) {
            $output .= '<li class="flex items-center">';
            $output .= '<span class="mx-1 text-gray-400 select-none">/</span>';
            $output .= '<a href="' . get_post_type_archive_link($post_type) . '" class="text-sm font-medium text-gray-500 hover:text-blue-600">';
            $output .= esc_html($label);
            $output .= '</a>';
            $output .= '</li>';
        } else {
            // No archive → show plain label
            $output .= '<li class="flex items-center">';
            $output .= '<span class="mx-1 text-gray-400 select-none">/</span>';
            $output .= '<span class="text-sm font-medium text-gray-500">' . esc_html($label) . '</span>';
            $output .= '</li>';
        }
    }

    // 🏷️ Category (if exists)
    $categories = get_the_category();
    if (!empty($categories)) {
        $category = $categories[0];
        $output .= '<li class="flex items-center">';
        $output .= '<span class="mx-1 text-gray-400 select-none">/</span>';
        $output .= '<a href="' . get_category_link($category->term_id) . '" class="text-sm font-medium text-gray-500 hover:text-blue-600">' . esc_html($category->name) . '</a>';
        $output .= '</li>';
    }

    // 📝 Current Post
    $output .= '<li class="flex items-center">';
    $output .= '<span class="mx-1 text-gray-400 select-none">/</span>';
    $output .= '<span class="text-sm font-medium text-gray-900">' . wp_trim_words(get_the_title(), 5, '...') . '</span>';
    $output .= '</li>';

    $output .= '</ol>';
    $output .= '</nav>';

    return $output;
}