<?php
get_header();

$post_id = get_the_ID();
if (\Elementor\Plugin::instance()->db->is_built_with_elementor($post_id)) {
    $elementor_content = \Elementor\Plugin::instance()->frontend->get_builder_content($post_id);
    echo '<div class="elementor-content">' . $elementor_content . '</div>';
} else {
    get_template_part('template-parts/page-content');
}

get_footer();
