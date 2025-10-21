<?php get_header(); ?>
<section class="bg-white py-12">
        <div class="flex flex-col items-center justify-center py-8">
        <h1 class="text-3xl font-bold mb-4">Bizmend Blog</h1>
        <p class="text-gray-600">Browse through our collection of posts.</p>

        <!-- Search Form -->
        <div class="flex-1 max-w-xl mx-auto px-4 w-full py-3">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<section id="index" class="container py-12">
    <div class="flex flex-wrap gap-3 mb-8">
        <?php
        $categories = get_categories([
            'taxonomy' => 'category',
            'hide_empty' => true,
            'parent' => 0,
        ]);

        foreach ($categories as $category) :
            $category_link = get_category_link($category->term_id);
        ?>
            <a href="<?php echo esc_url($category_link); ?>"
               class="px-4 py-2 bg-gray-100 text-gray-800 text-sm rounded-full hover:bg-blue-100 hover:text-blue-600 transition">
               <?php echo esc_html($category->name); ?>
            </a>
        <?php endforeach; ?>
    </div>
    <!-- post archive -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-loop'); ?>
        <?php endwhile; else : ?>
            <p class="text-gray-500">No posts found.</p>
        <?php endif; wp_reset_postdata(); ?>

        <!-- Pagination -->
        <?php globalizer_pagination(); ?>
    </div>
</section>
<?php get_footer(); ?>