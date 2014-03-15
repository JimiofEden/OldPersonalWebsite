<!-- Resume -->
<section class="resume">
    <?php
    $my_id = 15;
    $post_id_15 = get_post($my_id);
    $content = $post_id_15->post_content;
    $content = apply_filters('the_content', $content);
    $content = str_replace(']]>', ']]>', $content);
    echo $content;
    ?>