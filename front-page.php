<?php get_header(); ?>
<section id="hero_section" class="h-[450px] md:h-[500px] lg:h-[650px] flex flex-col justify-center">
    <div class="container flex flex-col items-center justify-center text-center">
        <span class="font-onest text-base leading-relaxed inline-flex rounded-lg border border-blue-gray-50 bg-primary-50 py-1 px-4 font-normal">
            Trends & ideas without borders.</span>
        <h1 class="text-blue-gray-900 mx-auto my-6 w-full text-hero-heading leading-none font-semibold">
            Your Gateway to 
            <span class="text-primary-500 leading-snug">Business Insights</span> &
            <span class="leading-snug text-primary-500">Financial Intelligence.</span>
        </h1>
        <p class="font-roboto font-normal leading-relaxed text-inherit mx-auto w-full !text-gray-500 lg:text-lg text-base">
            Latest insights, trends, and strategies across global business markets, <br>eCommerce, and remote networking.
        </p>
        <div class="max-w-xl mt-5 mx-auto px-4 w-full my-3">
            <?php get_search_form(); ?>
        </div>
    </div>
</section>
<section id="latest_articles" class="py-16 bg-white">
    <div class="container">
        <h2 class="text-4xl font-semibold mb-6 text-center">Latest Articles</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10">
            <?php
                $featured = new WP_Query([
                    'posts_per_page' => 1,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'order' => 'DESC',
                ]);

                if ($featured->have_posts()) :
                    while ($featured->have_posts()) : $featured->the_post();
                    $author_id = get_the_author_meta('ID');
                    $author_image = get_field('author_profile', 'user_' . $author_id);
                    $fallback_image = get_template_directory_uri() . '/src/img/user_placeholder.webp';
            ?>
            <div class="lg:col-span-2 rounded-xl  overflow-hidden bg-[#f2fcf8] shadow hover:shadow-lg border hover:border-[#a1f9d8]">
                <?php if (has_post_thumbnail()) : ?>
                    <a href="<?php the_permalink(); ?>">
                    <img src="<?php the_post_thumbnail_url('full'); ?>" alt="<?php the_title(); ?>" class="w-full aspect-video object-cover" decoding="async" loading="lazy"></a>
                <?php endif; ?>

                <div class="p-5">
                    <h2 class="text-lg font-semibold text-gray-900 mb-1">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h2>
                    <p class="text-sm text-gray-600 mb-3"><?php echo wp_trim_words(get_the_excerpt(), 20); ?></p>
                    <div class="flex items-center gap-2 text-sm text-gray-500">
                        <img width="20" height="20" src="<?php echo esc_url($author_image['url'] ?? $fallback_image); ?>" class="w-5 h-5 rounded-full object-cover" alt="<?php the_author(); ?>" decoding="async" loading="lazy">
                        <span>by <a href="<?php echo get_author_posts_url($author_id); ?>" class="text-gray-700 hover:underline"><?php the_author(); ?></a></span>
                    </div>
                </div>
            </div>
            <?php endwhile; wp_reset_postdata(); endif;?>

            <div class="lg:col-span-2 flex flex-col gap-6">
                <?php
                    $recent_posts = new WP_Query([
                    'posts_per_page' => 5,
                    'offset' => 1,
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'orderby' => 'rand',
                    'order' => 'DESC',
                    ]);

                    if ($recent_posts->have_posts()) :
                    while ($recent_posts->have_posts()) : $recent_posts->the_post();
                        $author_id = get_the_author_meta('ID');
                        $author_image = get_field('author_profile', 'user_' . $author_id);
                ?>
                <div>
                    <p class="text-xs font-normal text-green-600 uppercase mb-1">
                    <?php the_category(', '); ?>
                    </p>
                    <h3 class="text-base font-medium text-gray-900 hover:text-primary-700 transition">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h3>
                    <div class="flex items-center gap-2 text-sm text-gray-500 mt-1">
                    <img width="20" height="20" src="<?php echo esc_url($author_image['url'] ?? $fallback_image); ?>" class="w-5 h-5 rounded-full object-cover" alt="<?php the_author(); ?>" decoding="async" loading="lazy">
                    <span>by <a href="<?php echo get_author_posts_url($author_id); ?>" class="hover:underline"><?php the_author(); ?></a></span>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata(); endif;?>
            </div>
        </div>
    </div>
</section>
<section id="newsletter" class="container lg:px-40 md:px-10 px-5 lg:py-20 py-5">
    <div class="flex flex-col items-center gap-4 lg:p-20 md:p-10 p-5 to-[#00a27c] from-[#27e0ad] bg-gradient-to-t rounded-xl">
        <h2 class="text-2nd-heading font-semibold text-center text-shadow-xl text-white leading-[1.2]">Be Among the First to Receive Business Growth Tips from BizMend</h2>
        <p class="md:text-lg text-base text-center leading-relaxed text-white">Get expert insights on business growth, global expansion, and remote networking delivered straight to your inbox.</p>
        <?php echo do_shortcode('[jet_fb_form form_id="8012" submit_type="ajax" required_mark="*" fields_layout="row" fields_label_tag="label" markup_type="fieldset" enable_progress="" clear="1"]'); ?>
    </div>
</section>
<section id="home-posts" class="container py-12">
    <!-- Top Category Navigation -->
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

    <!-- Post Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <?php
            $home_query = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 6,
                'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
            ]);

            if ($home_query->have_posts()) :
                while ($home_query->have_posts()) : $home_query->the_post();
        ?>
        <?php get_template_part('template-parts/post-loop'); ?>
        <?php
            endwhile;
            else :
                echo '<p class="text-gray-500">No posts found.</p>';
            endif;
        ?>     
    </div>
    <div class="flex justify-center">
        <a href="<?php echo get_post_type_archive_link('post'); ?>" class="mt-6 block button_primary w-content mx-auto">View All Posts</a>
    </div>
    <?php wp_reset_postdata(); ?>
</section>

<?php get_footer(); ?>