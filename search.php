<!-- Search template for the Globalizer theme -->
<?php get_header(); ?>

<section class="bg-gray-50 py-12">
    <div class="flex flex-col items-center justify-center py-8">
        <h1 class="text-3xl font-bold mb-4">Search Results</h1>
        <p class="text-gray-600">You searched for: <strong><?php echo get_search_query(); ?></strong></p>   
        <!-- Search Form -->
        <div class="flex-1 max-w-xl mx-auto px-4 w-full py-3">
            <?php get_search_form(); ?> 
        </div>
    </div>
</section>
<section class="container py-12">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-loop'); ?>
        <?php endwhile; else : ?>
            <p class="text-gray-500">No results found for your search query.</p>
        <?php endif; wp_reset_postdata(); ?>
        <!-- Pagination -->
        <div class="col-span-full">
            <?php globalizer_pagination(); ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>