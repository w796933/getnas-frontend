<?php get_header(); ?>

    <div id="single">
        <div class="uk-container uk-container-small">
            <?php while ( have_posts() ) : the_post(); ?>
            <div class="guide-header">
                <h1 class="content-title"><?php the_title(); ?></h1>
                <span class="meta-section timestamp">最近更新：<?php the_modified_time('Y-n-j G:i'); ?></span>
                <span class="meta-section author"><a href="#"><?php the_author(); ?></a></span>
                <span class="meta-section views"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo pvc_get_post_views($id); ?></span>
            </div>
            <hr>
            <div class="content-body">
                <?php the_content(); ?>
            </div>
            <?php endwhile; ?>
        </div>

        <div class="creative-commons">
            <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/deed.zh" target="_blank"><img alt="知识共享许可协议" style="border-width:0" src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/by-nc-nd-88x31.png" /></a>
            <div class="license-text">
                本作品采用<a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/4.0/deed.zh" target="_blank">知识共享署名-非商业性使用-相同方式共享 4.0 国际许可协议</a>进行许可。
            </div>

        </div>
    </div>

    <?php get_footer(); ?>

    <script type="text/javascript">

    </script>
</body>

</html>
