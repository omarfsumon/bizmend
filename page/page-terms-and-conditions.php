<?php get_header(); ?>
<section id="privacy-policy" class="py-16 bg-primary-50">
    <h2 class="text-3rd-heading text-center font-bold mb-4">
        <?php the_title(); ?>
    </h2>
</section>
<section id="content" class="py-16">
    <div class="container">
        <?php the_content(); ?>
    </div>
</section>
<?php get_footer(); ?>