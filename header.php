<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php if ( is_home() ): ?>
    <title><?php bloginfo('name') ; echo ' - ' ; bloginfo('description'); ?></title>
    <?php elseif ( is_single() || is_page() ): ?>
    <title><?php the_title() ; echo ' - ' ; bloginfo('name'); ?></title>
    <?php elseif ( is_category() ): ?>
    <title><?php single_cat_title() ; echo ' - ' ; bloginfo('name'); ?></title>
    <?php elseif ( is_tag() ): ?>
    <title><?php wp_title('',true); echo ' - ' ; bloginfo('name'); ?></title>
    <?php endif; ?>

    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/uikit.min.css">
    <link rel="stylesheet" href="<?php echo esc_url( get_template_directory_uri() ); ?>/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php bloginfo( 'stylesheet_url' ); ?>">

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
                        <li>
                            <a href="">热门主题</a>
                            <div id="hot-category" uk-dropdown>
                                <ul>
                                    <li><a href="/category/freenas">FreeNAS</a></li>
                                    <li><a href="/category/ubuntu">Ubuntu</a></li>
                                    <li><a href="/category/raspberrypi">树莓派</a></li>
                                    <li><a href="/category/cloud">云计算</a></li>
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
                                                <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=1fe3e613e4c965f1afae3b0f5ef3fdc5ebbe2be15b4216ef453861564773936f"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[三]" title="FreeNAS中文[三]" border="0"> 三群</a>
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
                        <li class="under"><a href="https://shop19309090.youzan.com" target="_blank">IT 商店</a></li>
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
                            <li class="uk-parent uk-active">
                                <a>热门主题</a>
                                <ul class="uk-nav-sub">
                                    <li><a href="/category/freenas">FreeNAS</a></li>
                                    <li><a href="/category/ubuntu">Ubuntu</a></li>
                                    <li><a href="/category/raspberrypi">树莓派</a></li>
                                    <li><a href="/category/cloud">云计算</a></li>
                                </ul>
                            </li>
                            <li class="uk-active">
                                <a href="https://shop19309090.youzan.com">IT 商店</a>
                            </li>
                            <li class="uk-parent uk-active">
                                <a>用户交流</a>
                                <ul class="uk-nav-sub">
                                    <li>
                                        <a target="_blank" href="https://shang.qq.com/wpa/qunwpa?idkey=1fe3e613e4c965f1afae3b0f5ef3fdc5ebbe2be15b4216ef453861564773936f"><img src="https://pub.idqqimg.com/wpa/images/group.png" alt="FreeNAS中文[三]" title="FreeNAS中文[三]" border="0"> 三群</a>
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
                                        <img src="img/wx.jpg" width="120" alt="">
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
            <?php if (is_single() || is_page()) : ?>
            <?php else: ?>
            <div class="uk-container uk-container-small">
                <div class="guide-header">
                    <?php if ( is_category() ) : ?>
                    <span class="uk-hidden">{{ category = '<?php echo get_the_category()[0]->term_id; ?>' }}</span>
                    <h1>{{ search_text ? search_text : '<?php single_cat_title(); ?>' }}</h1>
                    <?php elseif ( is_tag() ) : ?>
                    <span class="uk-hidden">{{ tag = '<?php echo get_the_tags()[0]->term_id; ?>' }}</span>
                    <h1>{{ search_text ? search_text : '<?php wp_title('',true); ?>' }}</h1>
                    <?php else : ?>
                    <h1>{{ search_text ? search_text : '指南创作与共享平台' }}</h1>
                    <?php endif; ?>
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