<?php

if ( ! function_exists('my_the_tags') ) :
// 自定义标签列表
    function my_the_tags() {
        foreach(get_the_category() as $cat) {
            echo "<a href=\"/category/$cat->slug\"><span class=\"uk-label\">" . $cat->cat_name . '</span></a>';
        }
        foreach(get_the_tags() as $tag) {
            echo "<a href=\"/tags/$tag->term_id\"><span class=\"uk-label\">" . $tag->name . '</span></a>';
        }
        // var_dump(get_the_tags());
    }
endif;