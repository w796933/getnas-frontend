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

// 使用七牛云存储替换本地图片
if( ! is_admin() ) {
    function getnas_img_to_qiniu() {
        ob_start('getnas_link_replace');
    }
    function getnas_link_replace($html) {
        $search = 'https://www.getnas.com/wp-content/uploads';
        $replace = 'http://img.getnas.com/wp-content/uploads';
        return str_replace($search, $replace, $html);
    }
    add_action('wp_loaded', 'getnas_img_to_qiniu');
}

// 修复 rest api 禁止未登录用户发表评论的问题
// https://developer.wordpress.org/reference/classes/wp_rest_comments_controller/create_item_permissions_check/
function filter_rest_allow_anonymous_comments() {
    return true;
}
add_filter('rest_allow_anonymous_comments','filter_rest_allow_anonymous_comments');

// REST API 附加 post 阅读总数
add_action('rest_api_init', function () {
    register_rest_field('post', 'post_views', array(
        'get_callback' => function ($data) {
            return pvc_get_post_views($data['id']);
        }
    ));
});
// REST API 附加 post 评论总数
add_action('rest_api_init', function () {
    register_rest_field('post', 'comment_count', array(
        'get_callback' => function ($data) {
            $arg = array(
                'post_id' => $data['id'],
                'count' => true // 只返回评论总数
            );
            return get_comments( $arg );
        }
    ));
});
