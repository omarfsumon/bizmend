<?php get_header(); ?>
<section id="contact-us" class="py-16 bg-primary-50">
    <div class="container">
        <h2 class="text-2nd-heading text-center font-bold mb-4 text-primary-800">Contact Bizmend</h2>
        <h6 class="text-center block text-1xl">We'd Love to Hear From You!</h6>
        <p class="text-center p-4">At Bizmend, we are committed to helping businesses connect, grow, and succeed.<br>
            Our team is ready to assist you with questions about our business listing services, blog content, partnerships, or anything else.</p>
    </div>
</section>
<section class="py-16">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <h5 class="text-black text-3rd-heading leading-[1.7]">👉 Reach out to us today!</h5>
                <p>Interested in listing your business, contributing articles, or collaborating with Bizmend?<br>
                    We welcome partnerships and collaboration opportunities that align with our mission of empowering businesses globally.</p>
                <a href="mailto:support@bizmend.com" class="flex flex-row items-center gap-3 p-5">
                    <div class="p-3 text-primary-600 bg-primary-50 rounded-full border border-primary-400 flex items-center justify-center hover:bg-primary-400 hover:text-white transition-colors">
                        <svg xmlns="http://www.w3.org/2000/svg" height="30px" viewBox="0 -960 960 960" width="30px" fill="currentColor">
                            <path d="M172.31-180Q142-180 121-201q-21-21-21-51.31v-455.38Q100-738 121-759q21-21 51.31-21h615.38Q818-780 839-759q21 21 21 51.31v455.38Q860-222 839-201q-21 21-51.31 21H172.31ZM480-457.69 160-662.31v410q0 5.39 3.46 8.85t8.85 3.46h615.38q5.39 0 8.85-3.46t3.46-8.85v-410L480-457.69Zm0-62.31 313.85-200h-627.7L480-520ZM160-662.31V-720v467.69q0 5.39 3.46 8.85t8.85 3.46H160v-422.31Z"/></svg>
                    </div>    
                    <div>
                        <h5 class="text-black text-xl">Get in Touch</h5>
                        <p class="text-base hover:underline">support@bizmend.com</p>
                    </div>
                </a>
                <a class="flex flex-row items-center gap-3 p-5">
                    <div class="p-3 text-primary-600 bg-primary-50 rounded-full border border-primary-400 flex items-center justify-center hover:bg-primary-400 hover:text-white transition-colors">
                       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="30px" height="30px"><g id="_01_align_center" data-name="01 align center" fill="currentColor">
                        <path d="M1.444,6.669a2,2,0,0,0-.865,3.337l3.412,3.408V20h6.593l3.435,3.43a1.987,1.987,0,0,0,1.408.588,2.034,2.034,0,0,0,.51-.066,1.978,1.978,0,0,0,1.42-1.379L23.991.021ZM2,8.592l17.028-5.02L5.993,16.586v-4Zm13.44,13.424L11.413,18h-4L20.446,4.978Z"/></g></svg>


                    </div>    
                    <div>
                        <h5 class="text-black text-xl">Send Us a Message</h5>
                        <p class="text-base leading-relaxed">Have a question, suggestion, or feedback? Please fill out the form below</p>
                    </div>
                </a>
            </div>
           
            <div class="content_form contact_page">
                <?php echo do_shortcode('[jet_fb_form form_id="8033" submit_type="ajax" required_mark="*" fields_layout="column" fields_label_tag="label" markup_type="fieldset" enable_progress="" clear="1"]'); ?>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>