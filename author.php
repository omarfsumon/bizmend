<?php get_header(); ?>
<?php
    $author_id = get_the_author_meta('ID');
    $author_image = get_field('author_profile', 'user_' . $author_id);
    $fallback_image = get_template_directory_uri() . '/src/img/user_placeholder.webp';
?>
<section id="author" class="bg-primary-50 p-5 h-[450px] flex items-center">
    <div class="container flex flex-col md:flex-row justify-between gap-6">
        <div class="flex items-center justify-center w-1/4">
            <img fetchpriority="high" decoding="async" loading="lazy" width="300px" height="300px" src="<?php echo esc_url($author_image['url'] ?? $fallback_image); ?>" class="rounded-lg object-cover" alt="<?php the_author(); ?>">
        </div>
        <div class="flex flex-col w-3/4">
            <h1 class="text-3xl font-bold mb-4"><?php the_author(); ?></h1>
            <p><?php the_author_description(); ?></p>
        </div>
    </div>
</section>
<section id="author_archive" class="container py-12">
    <h2 class="text-3rd-heading mb-5"><?php the_author(); ?> Articles</h2>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <?php get_template_part('template-parts/post-loop'); ?>
        <?php endwhile; else : ?>
            <p class="text-gray-500">No posts found in this archive.</p>
        <?php endif; wp_reset_postdata(); ?>
    </div>
    <?php globalizer_pagination(); ?>
</section>
<?php get_footer(); ?>