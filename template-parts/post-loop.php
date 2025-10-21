<?php
    $author_id = get_the_author_meta('ID');
    $author_image = get_field('author_profile', 'user_' . $author_id);
    $fallback_image = get_template_directory_uri() . '/src/img/user_placeholder.webp';
?>
<article class="bg-[#f2fcf8] flex flex-col justify-between shadow border hover:border-[#a1f9d8] rounded-lg p-5 hover:shadow-lg transition-shadow duration-300">
    <?php if (has_post_thumbnail()) : ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('medium', ['class' => 'w-full object-cover rounded-lg aspect-video', 'decoding' => 'async', 'loading' => 'lazy']);?>
            </a>
            <h2 class="text-xl font-semibold leading-[1.2] my-2">
                <a href="<?php the_permalink(); ?>" class="hover:underline underline-offset-2 leading-none">
                    <?php the_title(); ?>
                </a>
            </h2>
            <p class="text-gray-700 py-1">
                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
            </p>
        </div>
    <?php endif; ?>
        <div class="flex items-center gap-2 text-sm text-gray-500">
            <img fetchpriority="high" width="20" height="20" src="<?php echo esc_url($author_image['url'] ?? $fallback_image); ?>" class="w-5 h-5 rounded-full object-cover" alt="<?php echo esc_attr(get_the_author()); ?>" decoding="async" loading="lazy">
            <span>by <a href="<?php echo esc_url(get_author_posts_url($author_id)); ?>" class="text-gray-700 hover:underline"><?php echo esc_attr(get_the_author()); ?></a></span>
        </div>
</article>