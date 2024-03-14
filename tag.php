<?php
/**
 * 标签列表模板
 *
 * @package custom
 */
if (!defined('__TYPECHO_ROOT_DIR__')) exit; 
$this->need('header.php');
?>
<body class="io-grey-mode">
<div class="page-container">
<div id="sidebar" class="sticky sidebar-nav fade mini-sidebar animate-nav" style="width: 60px;">
<div class="modal-dialog h-100 sidebar-nav-inner">
<div class="sidebar-logo border-bottom border-color">
<div class="logo overflow-hidden">
<a href="" class="logo-expanded" alt="免费商用素材">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt8-expand-light.png" height="40" class="logo-light" alt="<?php $this->options->description(); ?>">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt8-expand-dark.png" height="40" class="logo-dark d-none" alt="<?php $this->options->description(); ?>">
</a>
<a href="" class="logo-collapsed">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt.png" height="40" class="logo-light" alt="<?php $this->options->description(); ?>">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt.png" height="40" class="logo-dark d-none" alt="<?php $this->options->description(); ?>">
</a>
</div>
</div>

<?php $this->need('sidebar.php'); ?>

<div class="border-top py-2 border-color">
<div class="flex-bottom">
<ul>
<li id="menu-item-237" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-237 sidebar-item">
<a href="https://www.myhelen.cn/helen/guestbook.html" target="_blank">
<i class="fas fa-file-upload icon-fw icon-lg mr-2"></i>
<span>网站提交</span></a>
</li>
<li id="menu-item-212" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-212 sidebar-item">
<a href="#friendlink" class="smooth">
<i class="fab fa-staylinked icon-fw icon-lg mr-2"></i>
<span>友情链接</span>
</a>
</li>
<li id="menu-item-213" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-213 sidebar-item">
<a target="_blank" rel="noopener" href="/about.html">
<i class="fa fa-info-circle icon-fw icon-lg mr-2"></i>
<span>关于导航</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>

<div class="main-content flex-fill grid-bg">
<div class="big-header-banner">
<div id="header" class="page-header sticky">
<div class="navbar navbar-expand-md">
<div class="container-fluid p-0">
<a href="" class="navbar-brand d-md-none" title="<?php $this->options->description(); ?>">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt.png" class="logo-light" alt="<?php $this->options->description(); ?>">
<img src="<?php $this->options->themeUrl(); ?>static/picture/bt.png" class="logo-dark d-none" alt="<?php $this->options->description(); ?>">
</a>
<div class="collapse navbar-collapse order-2 order-md-1">
<div class="header-mini-btn">
<label>
<input id="mini-button" type="checkbox">
<svg viewbox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
<path class="line--1" d="M0 40h62c18 0 18-20-17 5L31 55"></path>
<path class="line--2" d="M0 50h80"></path>
<path class="line--3" d="M0 60h62c18 0 18 20-17-5L31 45"></path>
</svg>
</label>
</div>

<ul class="navbar-nav site-menu" style="margin-right: 16px;">
<li>
<a href="/">
<i class="fa fa-home fa-lg mr-2"></i>
<span>首页</span>
</a>
<ul class="sub-menu">
</ul>
</li>
<li>
<a href="https://www.jian27.com" target="_blank">
<i class="fab fa-hive fa-lg mr-2"></i>
<span>下载站</span>
</a>
<ul class="sub-menu">
</ul>
</li>
<li>
<a href="https://www.myhelen.cn" target="_blank">
<i class="fa fa-book fa-lg mr-2"></i>
<span>站长</span>
</a>
<ul class="sub-menu">
</ul>
</li>
<li class="menu-item-has-children">
<a href="">
<i class="fa fa-cog fa-lg mr-2"></i>
<span>作品</span>
</a>
<ul class="sub-menu">
<li><a href="https://www.myhelen.cn/pic" title="壁纸" target="_blank">壁纸</a></li>
<li><a href="https://www.onlook.cc" title="电影" target="_blank">电影</a></li>
<li><a href="https://www.myhelen.cn/helen/chatgpt.html" title="ChatGpt" target="_blank">ChatGpt</a></li>
<li><a href="https://github.com/jian27com" title="开源" target="_blank">开源</a></li>
</ul>
</li>
</ul>
<div class="rounded-circle weather">
<div id="he-plugin-simple" style="display: contents;"></div>
<script>WIDGET = {
                                    CONFIG: {
                                        "modules": "01234",
                                        "background": 5,
                                        "tmpColor": "E4C600",
                                        "tmpSize": 14,
                                        "cityColor": "E4C600",
                                        "citySize": 14,
                                        "aqiColor": "#E4C600",
                                        "aqiSize": 14,
                                        "weatherIconSize": 24,
                                        "alertIconSize": 18,
                                        "padding": "10px 10px 10px 10px",
                                        "shadow": "1",
                                        "language": "auto",
                                        "borderRadius": 5,
                                        "fixed": "false",
                                        "vertical": "middle",
                                        "horizontal": "left",
                                        "key": "085791e805a24491b43b06cf58ab31e7"
                                    }
                                }
                            </script>
<script src="<?php $this->options->themeUrl(); ?>static/js/he-simple-common.js"></script>
</div>
</div>
<ul class="nav navbar-menu text-xs order-1 order-md-2">
<li class="nav-item mr-3 mr-lg-0 d-none d-lg-block">
            <span id="jinrishici-sentence">正在加载今日诗词....</span>
            <script src="https://sdk.jinrishici.com/v2/browser/jinrishici.js" charset="utf-8"></script>
</li>
<li class="nav-search ml-3 ml-md-4">
<a href="javascript:" data-toggle="modal" data-target="#search-modal"><i class="iconfont icon-search icon-2x"></i></a>
</li>
<li class="nav-item d-md-none mobile-menu ml-3 ml-md-4">
<a href="javascript:" id="sidebar-switch" data-toggle="modal" data-target="#sidebar"><i class="iconfont icon-classification icon-2x"></i></a>
</li>
</ul>
</div>
</div>
</div>
<div class="placeholder" style="height:74px"></div>
</div>
<div class="header-big  post-top css-color mb-4" id="search-bg" style="background-image: url(<?php $this->options->themeUrl(); ?>static/image/bg-dna.jpg);">
<?php $this->need('ss.php'); ?>
</div>

<div id="content" class="content-site customize-site">
<?php $this->need('tags.php'); ?>
<div class="d-flex flex-fill">
<h4 class="text-gray text-lg mb-4">
<i class="site-tag iconfont icon-tag icon-lg mr-1"></i>
<?php $this->archiveTitle([
            'category' => _t('分类 %s 下的网站'),
            'search'   => _t('包含关键字 %s 的网站'),
            'tag'      => _t('标签 %s '),
            'author'   => _t('%s 发布的网站')
        ], '', ''); ?>
</h4>
</div>
<div class="row">
 <?php $this->widget('Widget_Metas_Category_List')->to($post); ?>
          <?php while ($this->next()): ?>


<div class="url-card col-6  col-sm-6 col-md-4 col-xl-5a col-xxl-6a">
<div class="url-body default">
<a href="<?php echo $this->fields->url(); ?>" target="_blank" rel="external nofollow" data-id="" data-url="<?php echo $this->fields->url(); ?>" class="card no-c mb-4" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $this->fields->text; ?>">
<div class="card-body">
<div class="url-content d-flex align-items-center">
<div class="url-img mr-2 d-flex align-items-center justify-content-center">

<?php echo $this->fields->menu_logo(); ?>

</div>
<div class="url-info flex-fill">
<div class="text-sm overflowClip_1">
<strong><?php $this->title(); ?></strong>
</div>
<p class="overflowClip_1 m-0 text-muted text-xs"><?php echo $this->fields->text; ?></p>
</div>
</div>
</div>
</a>
<a href="<?php echo $this->fields->url(); ?>" class="togo text-center text-muted is-views" data-id="<?php $this->title(); ?>" data-toggle="tooltip" data-placement="right" rel="external nofollow" data-original-title="<?php $this->title(); ?>">
<i class="iconfont icon-goto"></i>
</a>
</div>
</div>


<?php endwhile; ?>
</div>

</div>

<?php $this->need('footer.php'); ?>