<?php get_header();?>
        <div class="uk-container uk-container-small">
            <div class="guide-lists">
                <div class="guide-lists-header uk-clearfix">
                    <div class="guide-lists-filter">
                        <select v-model="order" v-on:change="order_changed" class="uk-select">
                            <option value="desc">最新</option>
                            <option value="asc">最早</option>
                        </select>
                    </div>
                    <a v-on:click="coming_soon" class="uk-button uk-button-primary uk-button-small uk-float-right" href="#">写文章</a>
                </div>
                <ul>
                    <li v-for="guide in guides">
                        <div class="" uk-grid>
                            <div class="uk-width-4-5@s">
                                <!--<div class="author-avatar uk-float-left uk-visible@s">
                                    <img class="uk-border-circle" src="img/avatar.jpg" width="40" height="40" alt="">
                                </div>-->
                                <div class="details">
                                    <h3>
                                        <a class="uk-link-text" v-bind:href="guide.link">{{ guide.title.rendered }}</a>
                                    </h3>
                                    <div class="meta">
                                        <div class="views">
                                            <i class="fa fa-eye" aria-hidden="true"></i> {{ guide.post_views }}
                                        </div>
                                        <div class="comments">
                                            <i class="fa fa-comments-o" aria-hidden="true"></i> {{ guide.comment_count }}
                                        </div>
                                        <div class="author">
                                            <i class="fa fa-user-circle" aria-hidden="true"></i> {{ guide._embedded.author[0].name }}
                                        </div>
                                        <div class="uk-hidden@s uk-text-right">
                                            <span class="timeago">{{ guide.date | timeago }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-width-1-5 uk-visible@s uk-text-right">
                                <span class="timeago">{{ guide.date | timeago }}</span>
                            </div>
                        </div>
                    </li>
                </ul>

                <div class="load-more-guides">
                    <template v-if="loadflash">
                        <div uk-spinner></div>
                    </template>
                    <template v-else>
                        <div v-if="headers['x-wp-totalpages'] > count">
                            <a v-show="!loadflash" class="uk-button uk-button-default" v-on:click="loadmore">加载更多</a>
                        </div>
                        <div v-else>
                            <span v-if="headers['x-wp-totalpages'] = 0">未找到内容</span>
                            <span v-else>没有更多</span>
                        </div>
                    </template>
                </div>

            </div>
        </div>

        <?php get_footer(); ?>
    </div>

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/home.js"></script>
</body>

</html>
