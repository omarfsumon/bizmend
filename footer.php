<footer id="footer" class="bg-primary-50 border-t border-gray-200">
        <div class="container mx-auto w-full">
            <div class="flex flex-col items-center mx-auto w-full gap-8 py-12">
                <div class="site_logo">
                    <?php get_template_part('template-parts/logo')?>
                    <p class="site-description"><?php bloginfo( 'description' ); ?></p>
                </div>
                <div class="footer_menu">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'footer',
                        'menu_class' => 'footer_menu flex gap-3 flex-wrap md:flex-nowrap justify-center',
                        'container' => 'ul',
                        'container_id' => 'footer_menu',
                    ) );?>
                </div>
            </div>
            <div class="mt-10 flex w-full flex-col items-center justify-center gap-4 border-t border-slate-200 py-4 md:flex-row md:justify-between">
                <div class="font-sans antialiased text-sm text-slate-600 text-left">
                  Copyright &copy; <?php echo date("Y"); ?> | all right reserved by <?php bloginfo( 'name' ); ?>.
                </div>
                <div class="flex gap-3 text-primary-600 sm:justify-center">
                    <a href="https://www.facebook.com/bizmend1" target="_blank" class="p-2 rounded border border-primary-100 hover:border-secondary-200 hover:text-secondary-600 hover:scale-125 transition-all duration-300">
                        <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-6 w-6">
                            <path d="M17 2H14C12.6739 2 11.4021 2.52678 10.4645 3.46447C9.52678 4.40215 9 5.67392 9 7V10H6V14H9V22H13V14H16L17 10H13V7C13 6.73478 13.1054 6.48043 13.2929 6.29289C13.4804 6.10536 13.7348 6 14 6H17V2Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <a href="https://www.instagram.com/bizmend1/" target="_blank" class="p-2 rounded border border-primary-100 hover:border-secondary-200 hover:text-secondary-600 hover:scale-125 transition-all duration-300">
                        <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-6 w-6">
                            <path d="M12 16C14.2091 16 16 14.2091 16 12C16 9.79086 14.2091 8 12 8C9.79086 8 8 9.79086 8 12C8 14.2091 9.79086 16 12 16Z" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path d="M3 16V8C3 5.23858 5.23858 3 8 3H16C18.7614 3 21 5.23858 21 8V16C21 18.7614 18.7614 21 16 21H8C5.23858 21 3 18.7614 3 16Z" stroke="currentColor"></path>
                            <path d="M17.5 6.51L17.51 6.49889" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </a>
                    <a href="https://x.com/bizmend1" target="_blank" class="p-2 rounded border border-primary-100 hover:border-secondary-200 hover:text-secondary-600 hover:scale-125 transition-all duration-300">
                        <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="currentColor" class="h-6 w-6">
                            <path d="M16.8198 20.7684L3.75317 3.96836C3.44664 3.57425 3.72749 3 4.22678 3H6.70655C6.8917 3 7.06649 3.08548 7.18016 3.23164L20.2468 20.0316C20.5534 20.4258 20.2725 21 19.7732 21H17.2935C17.1083 21 16.9335 20.9145 16.8198 20.7684Z" stroke="currentColor"></path>
                            <path d="M20 3L4 21" stroke="currentColor" stroke-linecap="round"></path>
                        </svg>
                    </a>
                    <a href="https://www.pinterest.com/bizmend1/" target="_blank" class="p-2 rounded border border-primary-100 hover:border-secondary-200 hover:text-secondary-600 hover:scale-125 transition-all duration-300">
                        <svg width="24px" height="24px" fill="currentColor" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024">
                            <path d="M886.796 351.459c-3.822-186.292-156.11-321.28-362.52-321.28c-22.331 0-45.064 1.61-67.798 4.828C291.11 57.941 164.165 177.038 140.425 331.141c-16.9 109.844 18.508 241.816 135.393 271.591l16.9 4.225l9.858-14.284c3.42-4.829 33.395-49.088 28.566-85.703c-2.414-18.306-13.48-29.572-20.118-36.21l-3.219-3.22c-18.306-28.768-25.95-77.452-18.306-118.291c18.508-100.59 102.399-173.617 208.62-181.664c7.445-.604 14.888-.805 22.132-.805c110.045 0 184.48 65.584 189.712 166.978c4.828 97.974-24.544 187.297-76.85 233.166l-3.42 3.018c-12.272 10.864-21.929 19.514-42.047 22.532c-5.231.805-10.462 1.207-15.29 1.207c-40.237 0-62.165-26.556-62.97-52.71c-1.005-29.371 10.663-61.56 23.136-95.76c15.29-42.047 31.183-85.703 25.349-130.768c-6.238-46.673-48.686-83.087-96.768-83.087c-12.272 0-24.745 2.414-36.816 6.84C336.975 271.39 324.1 385.66 356.087 477.8c-7.644 36.413-17.502 72.424-27.963 110.447c-31.183 114.471-63.572 232.965-39.029 371.778l5.432 30.78l28.769-11.87c27.963-11.668 43.051-37.419 55.524-58.744c2.414-4.024 4.828-8.048 7.041-11.87c40.839-64.177 63.773-140.826 81.477-215.262c44.057 33.194 89.122 43.858 153.298 36.817c177.44-19.314 269.58-209.428 266.16-378.418zM406.587 481.223l1.413-7.04l-2.615-6.84C378.025 395.12 384.26 307.205 442 285.277c6.237-2.414 12.674-3.621 18.911-3.621c23.538 0 44.259 17.3 47.076 39.43c4.426 32.994-8.852 68.803-22.733 107.027c-13.48 37.016-27.562 75.24-26.153 114.47c1.609 49.089 41.845 101.194 113.062 101.194q11.166 0 22.933-1.81c34.804-5.232 54.116-22.332 67.997-34.805l3.22-2.817c63.37-55.727 99.38-160.54 93.748-273.402c-6.84-136.399-115.678-224.918-265.556-213.652c-129.358 9.859-231.356 99.182-254.09 222.505c-9.858 53.111.401 115.275 25.349 154.506c3.017 4.627 6.437 8.248 9.656 11.467c2.213 2.414 5.834 5.834 6.035 7.444c.805 6.84-3.42 20.923-10.662 34.804c-72.827-30.982-93.347-128.956-80.874-209.628c20.118-131.973 129.961-234.172 273.402-254.09c20.52-2.816 41.04-4.225 60.956-4.225c177.842 0 309.212 114.471 312.23 272.194c3.017 146.861-73.633 311.426-221.097 327.721c-10.058 1.006-19.514 1.609-28.365 1.609c-53.514 0-82.281-18.508-116.884-52.91L437.97 596.7l-9.858 44.259c-18.911 84.093-40.839 172.008-84.294 240.409c-2.817 4.426-5.634 9.254-8.451 14.284c-1.006 1.81-2.012 3.62-3.219 5.23c-8.047-107.428 18.508-204.8 44.461-299.554c10.662-39.23 21.928-80.07 29.976-120.104z" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>