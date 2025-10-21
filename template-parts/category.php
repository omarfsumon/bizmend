<div class="flex flex-wrap gap-3 mb-8">
    <?php
    // Get current category (if any)
    $current_cat_id = get_queried_object_id();

    // "All" link
    $all_active_class = (is_home() || is_post_type_archive('post') || is_page('blog')) 
        ? 'active bg-primary-50 text-primary-800' 
        : 'bg-gray-100 text-gray-800 hover:bg-primary-50 hover:text-primary-800';

    echo '<a href="/blog/" class="px-4 py-2 text-sm rounded-md ' . esc_attr($all_active_class) . '">All</a>';

    // Get top-level categories
    $categories = get_categories([
        'taxonomy' => 'category',
        'hide_empty' => true,
        'parent' => 0,
    ]);

    // Loop through categories
    foreach ($categories as $category) :
        $category_link = get_category_link($category->term_id);

        $active_class = ($current_cat_id === $category->term_id)
            ? 'active bg-primary-50 text-primary-800'
            : 'bg-gray-100 text-gray-800 hover:bg-primary-50 hover:text-primary-800';
        ?>
        <a href="<?php echo esc_url($category_link); ?>"
           class="px-4 py-2 text-sm rounded-md <?php echo esc_attr($active_class); ?>">
           <?php echo esc_html($category->name); ?>
        </a>
    <?php endforeach; ?>
</div>
