<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ( is_single() || is_page() ) : ?>
<meta name="keywords" content="<?php echo the_field('single_keywords'); ?>">
    <meta name="description" content="<?php echo the_field('single_description'); ?>">
    <?php else : ?>
<meta name="keywords" content="FreeNAS,BTSync,Resilio Sync,OwnCloud,NextCloud,Ubuntu,开源软件,云计算,技术指南">
    <meta name="description" content="GetNAS 是技术指南创作与分享平台，专注于创作高质量的原创技术教程，内容涉及 FreeNAS、Ubuntu、云计算、NextCloud、Syncthing、Resilio Sync 以及树莓派等。">
    <?php endif; ?>

    <?php if ( is_home() ): ?>
    <title><?php bloginfo('name') ; echo ' - ' ; bloginfo('description'); ?></title>
    <?php elseif ( is_single() || is_page() ): ?>
    <title><?php the_title() ; echo ' - ' ; bloginfo('name'); ?></title>
    <?php elseif ( is_category() ): ?>
    <title><?php single_cat_title() ; echo ' - ' ; bloginfo('name'); ?></title>
    <?php elseif ( is_tag() ): ?>
    <title><?php wp_title('',true); echo ' - ' ; bloginfo('name'); ?></title>
    <?php elseif ( is_404() ): ?>
    <title><?php echo '页面不存在 - ' ; bloginfo('name'); ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">
    <link rel="shortcut icon" href="/favicon.ico">

    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/jquery.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/uikit-icons.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vue.min.js"></script>
    <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/axios.min.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5shiv.min.js"></script>
      <script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/respond.min.js"></script>
    <![endif]-->

    <script>
    // 百度统计
    var _hmt = _hmt || [];
    (function() {
    var hm = document.createElement("script");
    hm.src = "https://hm.baidu.com/hm.js?bbd31a2e32854120f98d5881253c8f7e";
    var s = document.getElementsByTagName("script")[0];
    s.parentNode.insertBefore(hm, s);
    })();
    </script>

</head>

<body>
    <div id="app">
        <header>
            <div class="uk-container">
                <div id="logo">
                    <a href="/"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/getnas-blank.svg" width="100" alt="GetNAS"></a>
                </div>
                <nav class="uk-visible@s">
                    <ul>
                        <li class="active"><a href="/">首页</a></li>
                        <li class="under"><a href="https://github.com/getnas/getnas">搞个 NAS</a></li>
                        <li>
                            <a href="">热门主题</a>
                            <div id="hot-category" uk-dropdown>
                                <ul>
                                    <li><a href="/category/freenas">FreeNAS</a></li>
                                    <li><a href="/category/ubuntu">Ubuntu</a></li>
                                    <li><a href="/category/raspberry-pi">树莓派</a></li>
                                    <li><a href="/category/cloud">云计算</a></li>
                                    <li><a href="/category/resilio-sync">Resilio Sync</a></li>
                                    <li><a href="/category/nextcloud">NextCloud</a></li>
                                    <li><a href="/category/syncthing">Syncthing</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="">用户交流</a>
                            <div id="user-communication" uk-dropdown>
                                <div uk-grid>
                                    <div class="uk-width-1-2@s">
                                        <ul>
                                            <li>
                                                <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=ceca4b55154b243523bbd46102da34ec4f9963097c3c7363a5bd825c388f46d0"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[四]" title="FreeNAS中文[四]"> 四群</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=1fe3e613e4c965f1afae3b0f5ef3fdc5ebbe2be15b4216ef453861564773936f"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[三]" title="FreeNAS中文[三]" border="0"> 三群(已满)</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=f222e106a387bc38670959a4035c2d3add7f23f347a3f47f18a6aed9a4a02f5d"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[二]" title="FreeNAS中文[二]" border="0"> 二群(已满)</a>
                                            </li>
                                            <li>
                                                <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=ec72ca04a97677540608612f33d00c9a62ff4c9bcb3e1630d83fee075c7e61f2"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[一]" title="FreeNAS中文[一]" border="0"> 一群(已满)</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="uk-width-1-2@s">
                                        <div id="wx-code">
                                            <p class="uk-text-center"><img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/wx.jpg" width="130" alt=""></p>
                                            <p class="uk-text-center">扫一扫关注公众号</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </li>
                        <li class="under"><a href="https://weidian.com/?userid=342133488" target="_blank">IT 商店</a></li>
                    </ul>
                </nav>
                <div class="uk-visible@s" id="account">
                    <a v-on:click="coming_soon" href="#">登录</a>
                    <a v-on:click="coming_soon" class="button" href="#">注册</a>
                </div>

                <div class="uk-hidden@s" id="mobile-nav-btn">
                    <span uk-navbar-toggle-icon uk-toggle="target: #offcanvas-nav"></span>
                </div>

                <div id="offcanvas-nav" uk-offcanvas="overlay: true">
                    <div class="uk-offcanvas-bar">

                        <ul class="uk-nav uk-nav-default">
                            <li class="uk-active"><a href="/">首页</a></li>
                            <li class="uk-active">
                                <a href="https://github.com/getnas/getnas">搞个 NAS</a>
                            </li>
                            <li class="uk-parent uk-active">
                                <a>热门主题</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="/category/freenas">FreeNAS</a></li>
                                    <li><a href="/category/ubuntu">Ubuntu</a></li>
                                    <li><a href="/category/raspberry-pi">树莓派</a></li>
                                    <li><a href="/category/cloud">云计算</a></li>
                                    <li><a href="/category/resilio-sync">Resilio Sync</a></li>
                                    <li><a href="/category/nextcloud">NextCloud</a></li>
                                    <li><a href="/category/syncthing">Syncthing</a></li>
                                </ul>
                            </li>
                            <li class="uk-active">
                                <a href="https://weidian.com/?userid=342133488">IT 商店</a>
                            </li>
                            <li class="uk-parent uk-active">
                                <a>用户交流</a>
                                <ul class="uk-nav-sub">
                                    <li>
                                        <a target="_blank" href="//shang.qq.com/wpa/qunwpa?idkey=ceca4b55154b243523bbd46102da34ec4f9963097c3c7363a5bd825c388f46d0"><img border="0" src="//pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[四]" title="FreeNAS中文[四]"> 四群</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=1fe3e613e4c965f1afae3b0f5ef3fdc5ebbe2be15b4216ef453861564773936f"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[三]" title="FreeNAS中文[三]" border="0"> 三群(已满)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=f222e106a387bc38670959a4035c2d3add7f23f347a3f47f18a6aed9a4a02f5d"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[二]" title="FreeNAS中文[二]" border="0"> 二群(已满)</a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=ec72ca04a97677540608612f33d00c9a62ff4c9bcb3e1630d83fee075c7e61f2"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[一]" title="FreeNAS中文[一]" border="0"> 一群(已满)</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="uk-parent uk-active">
                                <a>微信公众号</a>
                                <ul class="uk-nav-sub">
                                    <li>
                                        <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/img/wx.jpg" width="120" alt="">
                                    </li>
                                    <li>
                                        <a href="">公众号：getnas</a>
                                    </li>
                                </ul>
                            </li>

                            <!--<li class="uk-nav-header"></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: sign-in"></span> 登录</a></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: users"></span> 注册</a></li>
                            <li class="uk-nav-divider"></li>
                            <li><a href="#"><span class="uk-margin-small-right" uk-icon="icon: sign-out"></span> 退出</a></li>-->
                        </ul>

                    </div>
                </div>
            </div>

            <?php if ( is_single() || is_page() || is_404() ) : ?>
            <?php else: ?>
            <div class="uk-container uk-container-small">
                <div class="guide-header">
                    <?php if ( is_category() ) : ?>
                        <span class="uk-hidden">{{ category = '<?php echo get_the_category()[0]->term_id ? get_the_category()[0]->term_id : '0'; ?>' }}</span>
                        <h1>{{ search_text ? search_text : '<?php single_cat_title(); ?>' }}</h1>
                    <?php elseif ( is_tag() ) : ?>
                        <span class="uk-hidden">{{ tag = '<?php echo get_the_tags()[0]->term_id ? get_the_tags()[0]->term_id : '0'; ?>' }}</span>
                        <h1>{{ search_text ? search_text : '<?php wp_title('',true); ?>' }}</h1>
                    <?php else : ?>
                        <h1>{{ search_text ? search_text : '指南创作与共享平台' }}</h1>
                    <?php endif; ?>

                    <?php if ( is_category('freenas') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/what-is-freenas">FreeNAS 简介</a>]</li>
                                <li>[<a href="/freenas-download">系统下载</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_category('raspberry-pi') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/what-is-raspberry-pi">树莓派介绍</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_category('ubuntu') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/what-is-ubuntu">Ubuntu 介绍</a>]</li>
                                <li>[<a href="/ubuntu-download">系统下载</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_category('resilio-sync') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/resilio-sync">Resilio Sync 介绍</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_category('nextcloud') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/what-is-nextcloud">NextCloud 介绍</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_category('syncthing') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="/what-is-syncthing">Syncthing 介绍</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_tag('digitalocean') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="https://m.do.co/c/ea1be3ceca09" target="_blank">DigitalOcean 官网</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <?php if ( is_tag('vultr') ) : ?>
                        <div class="relate-link">
                            <ul>
                                <li>[<a href="http://www.vultr.com/?ref=7126678" target="_blank">Vultr 官网</a>]</li>
                            </ul>
                        </div>
                    <?php endif;?>

                    <p>{{ headers['x-wp-total'] ? '共有 ' + headers['x-wp-total'] + ' 篇相关指南' : '数据读取中...' }} </p>
                </div>

                <div class="guide-search">
                    <form class="" v-on:submit.prevent="search" uk-grid>
                        <div class="uk-inline uk-width-1-1">
                            <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: search"></span>
                            <input v-model="search_text" class="uk-input" placeholder="教程搜索">
                        </div>
                    </form>
                </div>
            </div>
            <?php endif; ?>
        </header>
