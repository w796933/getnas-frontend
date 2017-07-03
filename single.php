<?php get_header(); ?>

    <div id="single">
        <div class="uk-container uk-container-small">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="guide-header">
                <h1 class="content-title"><?php the_title(); ?></h1>
                <span class="meta-section timestamp"><?php the_time('Y-n-j G:i'); ?></span>
                <span class="meta-section author"><a href="#"><?php the_author(); ?></a></span>
                <span class="meta-section views"><i class="fa fa-eye" aria-hidden="true"></i> <?php if(function_exists('the_views')) { the_views(); } ?></span>
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

        <!--<div id="content-comments">
            <div class="uk-container uk-container-small">
                <div class="comments-header">
                    <h4 class="comments-count">
                        <span>169 条评论</span>
                    </h4>
                </div>
                <div class="comments-list">
                    <ul>
                        <li>
                            <div class="main-comment">
                                <div class="comment-header">
                                    <span class="author">
                                        <a class="username" href="#">小白</a>
                                    </span>
                                    <span class="time"><i>2017-07-03 16:03:05</i></span>
                                </div>
                                <div class="comment-status">
                                    <span></span>
                                </div>
                                <div class="comment-body">
                                    <p>如果U盘插在电脑的USB3.0接口上，建议选择USB2.0接口，我的就是这样。USB3.0虚拟机识别正常，进入FreeNAS提示无磁盘，换上USB2.0接口后识别正常</p>
                                    <p>如果U盘插在电脑的USB3.0接口上，建议选择USB2.0接口，我的就是这样。USB3.0虚拟机识别正常，进入FreeNAS提示无磁盘，换上USB2.0接口后识别正常</p>
                                </div>
                                <div class="comment-action">
                                    <a href="#">回复</a>
                                </div>
                            </div>
                            <ul class="children">
                                <li>
                                    <div class="reply-comment">
                                        <div class="comment-header">
                                            <span class="author">
                                                <a class="username" href="#">李铭</a>
                                            </span>
                                            <span class="time"><i>2017-07-03 16:03:05</i></span>
                                        </div>
                                        <div class="comment-status">
                                            <span>评论需要管理员审核</span>
                                        </div>
                                        <div class="comment-body">
                                            <p>我用vi命令修改，但是保存时提示文件只读不能保存。请问是用什么方法修改的。</p>
                                        </div>
                                        <div class="comment-action">
                                            <a href="#">回复</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="main-comment">
                                <div class="comment-header">
                                    <span class="author">
                                        <a class="username" href="#">小白</a>
                                    </span>
                                    <span class="time">2017-07-03 16:03:05</span>
                                </div>
                                <div class="comment-status">
                                    <span>评论需要管理员审核</span>
                                </div>
                                <div class="comment-body">
                                    <p>如果U盘插在电脑的USB3.0接口上，建议选择USB2.0接口，我的就是这样。USB3.0虚拟机识别正常，进入FreeNAS提示无磁盘，换上USB2.0接口后识别正常</p>
                                </div>
                                <div class="comment-action">
                                    <a href="#">回复</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="comments-form">
                    <form uk-grid>
                        <div class="uk-width-1-1@s">
                            <div class="uk-margin">
                                <textarea class="uk-textarea" placeholder="发表评论"></textarea>
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="text" name="" value="" placeholder="昵称">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="email" name="" value="" placeholder="E-mail">
                            </div>
                            <div class="uk-margin">
                                <input class="uk-input" type="text" name="" value="" placeholder="网址(选填)">
                            </div>
                            <div class="uk-margin">
                                <button class="uk-button uk-button-primary" type="submit">提交</button>
                            </div>
                        </div>
                    </form>
                </div>
                
            </div>
        </div>-->

        <div class="creative-commons">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" target="_blank"><img alt="知识共享许可协议" style="border-width:0" src="https://i.creativecommons.org/l/by-nc-sa/4.0/88x31.png" /></a>
            <div class="license-text">
                本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/4.0/deed.zh" target="_blank">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。
            </div>
            
        </div>
    </div>

    <?php get_footer(); ?>

    <script type="text/javascript">
        
    </script>
</body>

</html>