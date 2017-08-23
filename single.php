<?php get_header(); ?>

    <div id="single">
        <div class="uk-container uk-container-small">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="guide-header">
                <h1 class="content-title"><?php the_title(); ?></h1>
                <span class="meta-section timestamp"><?php the_time('Y-n-j G:i'); ?></span>
                <span class="meta-section author"><a href="#"><?php the_author(); ?></a></span>
                <span class="meta-section views"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo pvc_get_post_views($id); ?></span>
                <span class="meta-section tags uk-visible@s">
                    <!--<a href=""><span class="uk-label">FreeNAS</span></a>-->
                    <?php my_the_tags(); ?>
                </span>
                <div class="uk-hidden@s">
                    <span class="meta-section tags">
                        <?php my_the_tags(); ?>
                    </span>
                </div>
            </div>
            <div class="content-body">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </div>

        <div id="content-comments">
            <div class="uk-container uk-container-small">
                <div class="comments-header">
                    <h4 class="comments-count">
                        <span>{{ headers["x-wp-total"] }} 条评论</span>
                        <p class="uk-hidden">{{ post_id = '<?php echo $id; ?>' }}</p>

                    </h4>
                </div>
                <div class="comments-list">
                    <ul>
                        <li v-for="comment in comments" v-if="!comment.parent">
                            <div class="main-comment">
                                <div class="comment-header">
                                    <span class="author">
                                        <a class="username">{{ comment.author_name }}</a>
                                    </span>
                                    <span class="time">{{ comment.date | date_format }}</span>
                                </div>
                                <!-- <div class="comment-status">
                                    <span>评论需要管理员审核</span>
                                </div> -->
                                <div class="comment-body" v-html="comment.content.rendered">

                                </div>
                                <div class="comment-action">
                                    <a v-on:click="reply(comment.id, comment.author_name)" href="#reply_form">回复</a>
                                </div>
                            </div>
                            <ul class="children" v-if="comment._links.children">
                                <li v-for="child in comments" v-if="comment.id == child.parent">
                                    <div class="reply-comment">
                                        <div class="comment-header">
                                            <span class="author">
                                                <a class="username">{{ child.author_name }}</a> 回复
                                                <a class="username">{{ comment.author_name }}</a>
                                            </span>
                                            <span class="time"><i>{{ child.date | date_format }}</i></span>
                                        </div>
                                        <!-- <div class="comment-status">
                                            <span>评论需要管理员审核</span>
                                        </div> -->
                                        <div class="comment-body" v-html="child.content.rendered"></div>

                                        <div class="comment-action">
                                            <a href="#">回复</a>
                                        </div>
                                    </div>
                                    <ul class="children" v-if="child._links.children">
                                        <li v-for="thd in comments" v-if="child.id == thd.parent">
                                            <div class="reply-comment">
                                                <div class="comment-header">
                                                    <span class="author">
                                                        <a class="username">{{ thd.author_name }}</a> 回复
                                                        <a class="username">{{ child.author_name }}</a>
                                                    </span>
                                                    <span class="time"><i>{{ thd.date | date_format }}</i></span>
                                                </div>
                                                <!-- <div class="comment-status">
                                                    <span>评论需要管理员审核</span>
                                                </div> -->
                                                <div class="comment-body" v-html="thd.content.rendered"></div>

                                                <div class="comment-action">
                                                    <a href="#">回复</a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <div class="uk-text-center" v-show="headers['x-wp-totalpages'] > page_count">
                        <button v-on:click="loadmore" class="uk-button uk-button-default uk-button-small">加载更多评论</button>
                    </div>
                </div>
                <div class="comments-form" id="reply_form">
                    <form uk-grid>
                        <div class="uk-width-1-1@s">
                            <div v-show="reply_to">
                                <span class="uk-text-primary">回复 {{ reply_to }}</span>
                            </div>
                            <div class="uk-margin">
                                <textarea class="uk-textarea" v-model="content" placeholder="发表评论"></textarea>
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="text" name="username" v-model="author_name" placeholder="昵称">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="email" name="email" v-model="author_email" placeholder="E-mail">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="text" name="url" v-model="author_url" placeholder="网址(选填)">
                            </div>
                            <div class="uk-margin">
                                <button v-on:click.prevent="create_comment" class="uk-button uk-button-primary">提交</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="creative-commons">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/deed.zh" target="_blank"><img alt="知识共享许可协议" style="border-width:0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/by-nc-nd-88x31.png" /></a>
            <div class="license-text">
                本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/deed.zh" target="_blank">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。
            </div>

        </div>
    </div>

    <?php get_footer(); ?>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/comments.js"></script>
</body>

</html>
