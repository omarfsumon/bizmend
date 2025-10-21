<?php get_header(); ?>
<section class="py-16 bg-white">
    <div class="container grid grid-cols-1 md:grid-cols-2 gap-8">
        <div class="flex flex-col justify-center">
            <h2 class="text-2nd-heading font-bold mb-4">About Bizmend</h2>
            <p class="mb-4">At Bizmend, we believe that every business deserves a platform to shine. Whether you’re a startup, 
                an established company, or an entrepreneur building your brand, our mission is to connect you with the right audience and resources to fuel your success.</p>
            <p class="mb-4">We offer a dynamic business listing directory alongside expert-driven blogs covering global expansion, ecommerce branding, remote technology, 
                digital marketing, and entrepreneurship. Our platform is designed not just to list businesses — but to help them grow, innovate, and lead.</p>
        </div>
        <div class="flex flex-col justify-center">
           <picture>
                <source srcset="<?php echo get_template_directory_uri(); ?>/src/img/about_bizmend.webp" type="image/webp">
                <img src="<?php echo get_template_directory_uri(); ?>/src/img/about_bizmend.webp" alt="About Bizmend" class="w-full h-auto rounded-lg object-cover" decoding="async" loading="lazy">
           </picture>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="container flex flex-col md:flex-row gap-10">
        <div class="flex flex-col md:flex-row gap-5 bg-primary-50 p-8 rounded-xl border border-primary-200">
            <div>
                <img width="128" height="128" src="<?php echo get_template_directory_uri(); ?>/src/img/vision.webp" alt="Vision" class="w-20 h-auto md:w-32 rounded-lg object-cover" decoding="async" loading="lazy">
            </div>
            <div>
                <h2 class="text-4th-heading font-semibold">Our Vision</h2>
                <p>To become the most trusted online platform where businesses of all sizes find visibility, guidance, and opportunities to expand beyond borders.</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row gap-5 bg-primary-50 p-8 rounded-xl border border-primary-200">
            <div>
                <img width="128" height="128" src="<?php echo get_template_directory_uri(); ?>/src/img/mission.webp" alt="Mission" class="w-20 h-auto md:w-32 rounded-lg object-cover" decoding="async" loading="lazy">
            </div>
            <div>
                <h2 class="text-4th-heading font-semibold">Our Mission</h2>
                <ul class="list-outside list-check pl-8 list-primary-800">
                    <li>Empower businesses to connect with global audiences through smart listings and marketing exposure.</li>
                    <li>Educate entrepreneurs with authoritative content that inspires action and drives success.</li>
                    <li>Foster a vibrant ecosystem for networking, knowledge sharing, and business growth across industries and countries.</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="py-16 bg-white">
    <div class="container">
        <h2 class="text-3rd-heading text-center font-semibold mb-4">What We Offer</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="flex flex-col justify-center items-center gap-4 p-8 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <img width="80" height="80" src="<?php echo get_template_directory_uri(); ?>/src/img/listings.webp" alt="What We Offer" decoding="async" loading="lazy">
                <h2 class="text-xl leading-5 text-center font-normal text-black">Business Directory Listings</h2>
                <p class="text-center">Showcase your business, build trust, and attract new customers</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-4 p-8 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <img width="80" height="80" src="<?php echo get_template_directory_uri(); ?>/src/img/articles.webp" alt="What We Offer" decoding="async" loading="lazy">
                <h2 class="text-xl leading-5 text-center font-normal text-black">In-Depth Blog Articles</h2>
                <p class="text-center">Learn from industry experts about business expansion, ecommerce strategies, branding, remote work, and digital marketing trends.</p>
            </div>
            <div class="flex flex-col justify-center items-center gap-4 p-8 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <img width="80" height="80" src="<?php echo get_template_directory_uri(); ?>/src/img/growth.webp" alt="What We Offer" decoding="async" loading="lazy">
                <h2 class="text-xl leading-5 text-center font-normal text-black">Growth Resources</h2>
                <p class="text-center">Stay ahead with practical tips, guides, and insights designed to help your business scale.</p>
            </div>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="container">
        <div class="flex flex-col max-w-[850px] bg-primary-50 p-8 rounded-3xl mx-auto justify-center items-center gap-4 border border-primary-300">
            <h2 class="text-3rd-heading text-center text-black font-semibold">Let's Grow Together</h2>
            <p class="text-center text-base leading-relaxed">At Bizmend, your success is our success.
                We are committed to providing the tools, knowledge, and exposure you need to build a thriving business in today’s competitive world.</p>
            <h6 class="text-center text-xl text-primary-800">Join the Bizmend community — and take your business to new heights.</h6>
        </div>
    </div>
</section>
<section class="py-16">
    <div class="container">
        <h2 class="text-3rd-heading text-center text-black font-semibold mb-5">Why Choose Bizmend?</h2>
        <div class=" grid grid-cols-1 md:grid-cols-3 gap-5">
           <div class="flex gap-4 p-5 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <div class="w-[20%] h-auto">
                    <img width="128" height="128" src="<?php echo get_template_directory_uri(); ?>/src/img/global_reach.webp" alt="Global Reach" decoding="async" loading="lazy">
                </div>
                <div class="w-[80%]">
                    <h2 class="text-1xl font-normal text-black">Global Reach</h2>
                    <p class="mb-4">Expand your presence beyond local borders and tap into new markets.</p>
                </div>
           </div>
           <div class="flex gap-4 p-5 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <div class="w-[20%] h-auto">
                    <img width="128" height="128" src="<?php echo get_template_directory_uri(); ?>/src/img/credible_content.webp" alt="Credible Content" decoding="async" loading="lazy">
                </div>
                <div class="w-[80%]">
                    <h2 class="text-1xl font-normal text-black">Credible Content</h2>
                    <p class="mb-4">Our blogs are written by experienced professionals who understand real-world business challenges.</p>
                </div>
           </div>
           <div class="flex gap-4 p-5 rounded-xl shadow hover:shadow-lg hover:shadow-primary-100 transition-all duration-300">
                <div class="w-[20%] h-auto">
                    <img width="128" height="128" src="<?php echo get_template_directory_uri(); ?>/src/img/community.webp" alt="Supportive Community" decoding="async" loading="lazy">
                </div>
                <div class="w-[80%]">
                    <h2 class="text-1xl font-normal text-black">Supportive Community</h2>
                    <p class="mb-4">Whether you're listing your business or learning from our resources, you're part of a network that champions growth.</p>
                </div>
           </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>