<?php get_header(); ?>

<section class="bg-gray-50 py-8">
    <div class="container mx-auto px-4 lg:px-8 grid grid-cols-1 lg:grid-cols-2 gap-5">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="flex flex-col justify-center gap-3 order-2 lg:order-1">
                <!-- Title -->
                <h1 class="text-2xl lg:text-3xl font-semibold"><?php the_title(); ?></h1>

                <!-- post exseption -->
                <?php if (has_excerpt()) : ?>
                    <p class="text-gray-600"><?php the_excerpt(); ?></p>
                <?php else : ?>
                <!-- collect from the content -->
                    <p class="text-gray-600"><?php echo wp_trim_words(get_the_content(), 30, '...'); ?></p>
                <?php endif; ?>

                <!-- Meta Info -->
                <div class="flex items-center flex-wrap text-gray-800 text-base gap-2">
                    <?php 
                        $author_id = get_the_author_meta('ID');
                        $author_name = get_the_author();
                        $author_url = get_author_posts_url($author_id);
                        $author_image = get_field('author_profile', 'user_' . $author_id);
                        
                        $default_image_url = get_template_directory_uri() . '/src/img/user_placeholder.webp';
                        $image_url = $author_image ? $author_image['url'] : $default_image_url;
                    ?>
                    
                    <a href="<?php echo esc_url($author_url); ?>" class="flex items-center gap-2 group">
                        <img width="20" height="20" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-5 h-5 rounded-full object-cover transition-transform duration-200 group-hover:scale-105" decoding="async" loading="lazy">
                        <span><?php echo esc_html($author_name); ?></span>
                    </a>

                    <span class="mx-1">|</span>
                    <span><?php echo get_the_date(); ?></span>
                    <span class="mx-1">|</span>
                    <span class="whitespace-break-spaces break-before-auto"><?php the_category(', '); ?></span>
                </div>


            </div>
            <div class="flex flex-col justify-center order-1">
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                        <?php the_post_thumbnail('full', ['class' => 'w-full h-auto rounded-lg']); ?>
                <?php endif; ?>
            </div>
        <?php endwhile; endif; ?>
    </div>
</section>

<section class="py-8 bg-white">
    <div class="container">
        <?php echo globalizer_get_breadcrumb(); ?>
    </div>
    <div class="container grid grid-cols-1 lg:grid-cols-12 gap-8">
        <!-- Left Sidebar - TOC (25%) -->
        <aside class="lg:col-span-3 space-y-6">
            <?php echo get_dynamic_toc(); ?>
        </aside>

        <!-- Main Content (50%) -->
        <main class="lg:col-span-6">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <!-- Post Content -->
                <div class="prose max-w-none prose-img:rounded-lg prose-a:text-blue-600 hover:prose-a:underline single-post">
                    <?php the_content(); ?>
                </div>

                <!-- Tags -->
                <div class="mt-6">
                    <?php the_tags('<div class="flex flex-wrap gap-2 text-sm">', '', '</div>'); ?>
                </div>

                <!-- Post Navigation -->
                <div class="flex justify-between mt-8 border-t pt-4">
                    <div><?php previous_post_link('%link', '← Previous'); ?></div>
                    <div><?php next_post_link('%link', 'Next →'); ?></div>
                </div>
            <?php endwhile; endif; ?>
        </main>

        <!-- Right Sidebar (25%) -->
        <aside class="lg:col-span-3 space-y-6">
            <!-- Author Box -->
            <div class="p-4 border rounded-lg bg-white text-center">
                <img width="50" height="50" src="<?php echo esc_url($image_url); ?>" alt="<?php echo esc_attr($author_name); ?>" class="w-32 h-32 inline-flex rounded-full object-cover transition-transform duration-200 group-hover:scale-105" decoding="async" loading="lazy">
                <h4 class="text-xl font-bold py-2"><?php echo esc_html($author_name); ?></h4>
                <p class="author_bio"><?php the_author_description(); ?></p>
                <a class="bg-primary-50 text-primary-900 border border-primary-600 text-xs leading-normal py-2 px-3 hover:bg-primary-700 hover:text-primary-50 rounded inline-flex mt-3" href="<?php echo esc_url($author_url); ?>">All Articles</a>
            </div>
            <!-- Search -->
            <div class="p-4 border rounded-lg bg-white">
                <?php get_search_form(); ?>
            </div>

            <!-- Categories -->
            <div class="border rounded-lg bg-white overflow-hidden">
                <h4 class="text-lg font-bold sticky top-0 p-3 bg-white shadow">Topics We Covered</h4>
                <ul class="space-y-1 text-sm px-5 py-4">
                    <?php wp_list_categories(['title_li' => '']); ?>
                </ul>
            </div>

            <!-- Recent Posts -->
            <div class="border rounded-lg bg-white overflow-hidden">
                <h4 class="text-lg font-bold sticky top-0 p-3 bg-white shadow">Recent Post</h4>
                <ul class="space-y-2 text-sm px-5 py-4">
                    <?php
                    $recent_posts = wp_get_recent_posts(['numberposts' => 5]);
                    foreach ($recent_posts as $post) :
                        ?>
                        <li>
                            <a href="<?php the_permalink(); ?>" class="hover:underline">
                                <?php echo esc_html($post['post_title']); ?>
                            </a>
                        </li>
                    <?php endforeach; wp_reset_query(); ?>
                </ul>
            </div>

            <!-- Popular Posts -->
            <div class="border rounded-lg bg-white overflow-hidden">
                <h4 class="text-lg font-bold sticky top-0 p-3 bg-white shadow">Popular Post</h4>
                <ul class="space-y-2 text-sm px-5 py-4">
                    <?php
                    $popular_posts = new WP_Query([
                        'posts_per_page' => 5,
                        'meta_key' => 'post_views_count',
                        'orderby' => 'meta_value_num',
                        'order' => 'DESC'
                    ]);
                    
                    if ($popular_posts->have_posts()) :
                        while ($popular_posts->have_posts()) : $popular_posts->the_post();
                            ?>
                            <li>
                                <a href="<?php the_permalink(); ?>" class="hover:underline">
                                    <?php the_title(); ?>
                                </a>
                            </li>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>
                </ul>
            </div>
        </aside>
    </div>
</section>
<section class="bg-gray-50 py-8">
    <!-- Related Posts -->
    <div class="container my-12">
        <h2 class="text-3rd-heading font-normal mb-4">Related Post</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <?php
            $categories = wp_get_post_categories(get_the_ID());
            $related = new WP_Query([
                'category__in' => $categories,
                'post__not_in' => [get_the_ID()],
                'posts_per_page' => 3
            ]);
            if ($related->have_posts()) :
                while ($related->have_posts()) : $related->the_post(); ?>
                    <?php get_template_part('template-parts/post-loop'); ?>
                <?php endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>