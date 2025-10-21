<?php get_header(); ?>
<section class="bg-white py-10 md:py-20">
    <div class="flex flex-col items-center justify-center">
        <h1 class="text-3xl font-bold mb-4">Bizmend Blog</h1>
        <!-- Search Form -->
        <div class="flex-1 max-w-xl mx-auto px-4 w-full py-3">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<section id="index" class="container py-12">
    <?php get_template_part('template-parts/category'); ?>
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