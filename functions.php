<?php

function theme_gsap_script() {
    // Enqueue GSAP core library
    wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
    // Enqueue ScrollTrigger plugin if needed
    wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-js'), null, true);
    // Enqueue your custom JS file that contains the animation code
    wp_enqueue_script('custom-gsap-js', get_template_directory_uri() . '/js/custom-gsap.js', array('gsap-js'), null, true);
}
add_action('wp_enqueue_scripts', 'theme_gsap_script');

?>