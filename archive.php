<?php get_header(); ?>

<section class="bg-white py-10 md:py-20">
    <div class="flex flex-col items-center justify-center">
        <?php
            if (is_category()) {
                echo '<h1 class="text-3xl font-bold mb-4">' . single_cat_title('', false) . '</h1>';
                echo '<p class="text-gray-600">' . category_description() . '</p>';
            } elseif (is_tag()) {
                echo '<h1 class="text-3xl font-bold mb-4">Posts Tagged: ' . single_tag_title('', false) . '</h1>';
                echo '<p class="text-gray-600">' . tag_description() . '</p>';
            } elseif (is_author()) {
                the_post();
                echo '<h1 class="text-3xl font-bold mb-4">Author: ' . get_the_author() . '</h1>';
                echo '<p class="text-gray-600">Browse all posts by ' . get_the_author() . '</p>';
                rewind_posts();
            } elseif (is_day()) {
                echo '<h1 class="text-3xl font-bold mb-4">Daily Archives: ' . get_the_date() . '</h1>';
            } elseif (is_month()) {
                echo '<h1 class="text-3xl font-bold mb-4">Monthly Archives: ' . get_the_date('F Y') . '</h1>';
            } elseif (is_year()) {
                echo '<h1 class="text-3xl font-bold mb-4">Yearly Archives: ' . get_the_date('Y') . '</h1>';
            } else {
                echo '<h1 class="text-3xl font-bold mb-4">Archives</h1>';
            }
        ?>
        <!-- Search Form -->
        <div class="flex-1 max-w-xl mx-auto px-4 w-full py-3">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>

<section id="archive" class="container py-12">
    <?php get_template_part('template-parts/category'); ?>
    <!-- Archive Posts Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-loop'); ?>
        <?php endwhile; else : ?>
            <p class="text-gray-500">No posts found in this archive.</p>
        <?php endif; wp_reset_postdata(); ?>
    </div>

    <!-- Pagination -->
    <?php globalizer_pagination(); ?>
</section>

<?php get_footer(); ?>