<footer class="main-footer footer-type-1 text-xs">
<div id="footer-tools" class="d-flex flex-column">
<a href="javascript:" id="go-to-up" class="btn rounded-circle go-up m-1" rel="go-top">
<i class="iconfont icon-to-up"></i>
</a>
<a href="javascript:" data-toggle="modal" data-target="#search-modal" class="btn rounded-circle m-1" rel="search" one-link-mark="yes">
<i class="iconfont icon-search"></i>
</a>
<a href="http://qm.qq.com/cgi-bin/qm/qr?_wv=1027&k=ZCeFKukNN853FPiAk3CkSTkFv0gXqmaH&authKey=KHH%2FMxfDTLOQTmpwC%2BNE3bYGyE3CuZTasxNeYZ%2FKfQgrR1vfxSywEx%2BJ1xlAG4N1&noverify=0&group_code=132143631" class="btn rounded-circle kefu m-1" target="_blank" data-toggle="tooltip" data-placement="left" title="QQ群">
<i class="mode-ico iconfont icon-qq"></i>
</a>
<a href="http://mp.weixin.qq.com/mp/homepage?__biz=MzIzODQxMDUzNg==&hid=1&sn=d98fc59d43045a0821e1b9c02139c08d&scene=18#wechat_redirect" class="btn rounded-circle kefu m-1" target="_blank" data-toggle="tooltip" data-placement="left" title="" data-original-title="微信公众号">
<i class="fab fa-weixin"></i>
</a>
<a href="javascript:" onclick="window.location.href='javascript:switchNightMode()'" class="btn rounded-circle switch-dark-mode m-1" id="yejian" data-toggle="tooltip" data-placement="left" title="日间模式">
<i class="mode-ico iconfont icon-night"></i>
</a>
</div>
<div class="footer-inner">
<div class="footer-text">本站内容源自互联网，如有内容侵犯了你的权益，请联系删除相关内容，联系邮箱：<a href="jian27#126.com" target="_blank"><span class="__cf_email__" data-cfemail="#">[jian27#126.com]</span></a> <br>&copy; <?php echo date('Y'); ?> By <a href="https://github.com/shenweiyan/WebStack-Hugo" target="_blank">WebStack-Hugo</a> | <a href="<?php echo $this->permalink(); ?>"><?php $this->options->title(); ?></a> | <a href="http://beian.miit.gov.cn/" target="_blank"><?php $this->options->xinac_beian(); ?> <?php echo date('Y-m-d');?></a></div>
</div>
</footer>
</div>
</div>
<!-- 返回页首-->
<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/clipboard.min-5.6.2.js'); ?>" id="clipboard-js"></script>

<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/bootstrap.min-4.3.1.js'); ?>" id="bootstrap-js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/theia-sticky-sidebar-1.5.0.js'); ?>" id="sidebar-js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/lazyload.min-12.4.0.js'); ?>" id="lazyload-js"></script>
<script type="text/javascript" src="<?php $this->options->themeUrl('static/js/app-mini.js'); ?>" id="appmini-js"></script>
<div class="modal fade search-modal" id="search-modal">
<div class="modal-dialog modal-lg modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<div id="search" class="s-search mx-auto my-4">
<div id="search-list" class="hide-type-list">
<div class="s-type">
<span></span>

</div>
</div>
<form action="?s=" method="get" target="_blank" class="super-search-fm">
<input type="text" id="m_search-text" class="form-control smart-tips search-key" zhannei="" autocomplete="off" placeholder="输入关键字搜索" style="outline:0">

<button type="submit"><i class="iconfont icon-search"></i></button>
</form>
<div class="card search-smart-tips" style="display: none">
<ul></ul>
</div>
</div>
</div>
<div style="position: absolute;bottom: -40px;width: 100%;text-align: center;">
<a href="javascript:" data-dismiss="modal"><i class="iconfont icon-close-circle icon-2x" style="color: #fff;"></i></a>
</div>
</div>
</div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        var siteWelcome = $('#loading');
        siteWelcome.addClass('close');
        setTimeout(function() {
            siteWelcome.remove();
        }, 600);
    });
</script>
<script>        
    $(document).ready(function(){
        setTimeout(function () {
            if ($('a.smooth[href="' + window.location.hash + '"]')[0]) {
                $('a.smooth[href="' + window.location.hash + '"]').click();
            }else if (window.location.hash != '') {
                $("html, body").animate({
                    scrollTop: $(window.location.hash).offset().top - 90
                }, {
                    duration: 500,
                    easing: "swing"
                });
            }
        }, 300);
        $(document).on('click','a.smooth',function(ev) {
            if($('#sidebar').hasClass('show') && !$(this).hasClass('change-href')){
                $('#sidebar').modal('toggle');
            }
            if($(this).attr("href").substr(0, 1) == "#"){
                $("html, body").animate({
                    scrollTop: $($(this).attr("href")).offset().top - 90
                }, {
                    duration: 500,
                    easing: "swing"
                });
            }
            if($(this).hasClass('go-search-btn')){
                $('#search-text').focus();
            }
            if(!$(this).hasClass('change-href')){
                var menu =  $("a"+$(this).attr("href"));
                menu.click();
                toTarget(menu.parent().parent(),true,true);
            }
        });
        $(document).on('click','a.tab-noajax',function(ev) {
            var url = $(this).data('link');
            if(url)
                $(this).parents('.d-flex.flex-fill.flex-tab').children('.btn-move.tab-move').show().attr('href', url);
            else
                $(this).parents('.d-flex.flex-fill.flex-tab').children('.btn-move.tab-move').hide();
        });
        
    });
</script>
<script>

(function(){
    if(document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") === ''){
        if(new Date().getHours() > 22 || new Date().getHours() < 6){
            document.body.classList.remove('io-black-mode');
            document.body.classList.add('io-grey-mode');
            document.cookie = "night=1;path=/";
            console.log('夜间模式开启');
        }else{
            document.body.classList.remove('night');
            document.cookie = "night=0;path=/";
            console.log('夜间模式关闭');
        }
    }else{
        var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
        if(night == '0'){
            document.body.classList.remove('night');
        }else if(night == '1'){
            document.body.classList.add('night');
        }
    }
})();

$("#search-bg").css("background-image", "url(<?php $this->options->themeUrl(); ?>static\/image\/bg-dna.jpg)");   
function switchNightMode(){
    var night = document.cookie.replace(/(?:(?:^|.*;\s*)night\s*\=\s*([^;]*).*$)|^.*$/, "$1") || '0';
    if(night == '0'){
	$("#search-bg").css("background-image", "url(<?php $this->options->themeUrl(); ?>static\/image\/bg-dna.jpg)");
        document.body.classList.remove('io-grey-mode');
        document.body.classList.add('io-black-mode');
        document.cookie = "night=1;path=/"
        console.log(' ');
        $(".switch-dark-mode").attr("data-original-title","日间模式");
        $(".mode-ico").removeClass("icon-night");
        $(".mode-ico").addClass("icon-light");
    }else{
	$("#search-bg").css("background-image", "url(<?php $this->options->themeUrl(); ?>static\/image\/bg-dna.jpg)")
        document.body.classList.remove('io-black-mode');
        document.body.classList.add('io-grey-mode');
        document.cookie = "night=0;path=/"
        console.log(' ');
        $(".switch-dark-mode").attr("data-original-title","夜间模式");
        $(".mode-ico").removeClass("icon-light");
        $(".mode-ico").addClass("icon-night");
    }
}
</script>

</body>
</html>