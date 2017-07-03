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