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
<?php while($this->next()): ?>
<div class="url-card col-6  col-sm-6 col-md-4 col-xl-5a col-xxl-6a">
<div class="url-body default">
<a href="<?php $this->fields->url(); ?>" title="<?php $this->title(); ?>" target="_blank" class="card no-c mb-4" rel="external nofollow" data-id="" data-url="<?php $this->fields->url(); ?>" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php $this->fields->text(); ?>">
<div class="card-body">
<div class="url-content d-flex align-items-center">
<div class="url-img mr-2 d-flex align-items-center justify-content-center">
<?php $this->fields->menu_logo(); ?>
</div>
<div class="url-info flex-fill">
<div class="text-sm overflowClip_1">
<strong><?php $this->title(); ?></strong>
</div>
<p class="overflowClip_1 m-0 text-muted text-xs"><?php $this->fields->text(); ?>"></p>
</div>
</div>
</div>
</a>
<a href="<?php $this->fields->url(); ?>" class="togo text-center text-muted is-views" data-id="689" data-toggle="tooltip" data-placement="right" rel="external nofollow" data-original-title="<?php $this->title(); ?>">
<i class="iconfont icon-goto"></i>
</a>
</div>
</div>
  <?php endwhile; ?>
 </div>