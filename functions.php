<?php

if ( ! function_exists('my_the_tags') ) :
// 自定义标签列表
    function my_the_tags() {
        foreach(get_the_category() as $cat) {
            echo "<a href=\"/?cat=$cat->term_id\"><span class=\"uk-label\">" . $cat->cat_name . '</span></a>';
        }
        if (get_the_tags()) {
            foreach(get_the_tags() as $tag) {
                echo "<a href=\"/?tag=$tag->slug\"><span class=\"uk-label\">" . $tag->name . '</span></a>';
            }
        }
    }
endif;

// 修复 rest api 禁止未登录用户发表评论的问题
// https://developer.wordpress.org/reference/classes/wp_rest_comments_controller/create_item_permissions_check/
function filter_rest_allow_anonymous_comments() {
    return true;
}
add_filter('rest_allow_anonymous_comments','filter_rest_allow_anonymous_comments');
