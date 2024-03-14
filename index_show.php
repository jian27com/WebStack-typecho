    <?php $this->widget('Widget_Metas_Category_List')->to($categories); ?>
    <?php while ($categories->next()): ?>
            <?php $this->widget('Widget_Archive@category-' . $categories->mid, 'order=order&pageSize=1000&type=category', 'mid=' . $categories->mid)->to($posts); ?>

<div class="d-flex flex-fill">
<h4 class="text-gray text-lg mb-4">
<i class="site-tag iconfont icon-tag icon-lg mr-1" id="<?php $categories->slug(); ?>"></i>
<?php $categories->name(); ?> <i id="<?php $categories->slug(); ?>"></i>
</h4>
</div>
<div class="row">
<?php while ($posts->next()): ?>
<div class="url-card col-6  col-sm-6 col-md-4 col-xl-5a col-xxl-6a">
<div class="url-body default">
<a href="<?php echo $posts->fields->url; ?>" target="_blank" rel="external nofollow" data-id="" data-url="<?php echo $posts->fields->url; ?>" class="card no-c mb-4" data-toggle="tooltip" data-placement="bottom" data-original-title="<?php echo $posts->fields->text; ?>" title="<?php echo $posts->fields->text; ?>">
<div class="card-body">
<div class="url-content d-flex align-items-center">
<div class="url-img mr-2 d-flex align-items-center justify-content-center">
<?php echo $posts->fields->menu_logo(); ?>
</div>
<div class="url-info flex-fill">
<div class="text-sm overflowClip_1">
<strong><?php $posts->title(); ?></strong>
</div>
<p class="overflowClip_1 m-0 text-muted text-xs"><?php echo $posts->fields->text; ?></p>
</div>
</div>
</div>
</a>
<a href="<?php echo $posts->fields->url; ?>" class="togo text-center text-muted is-views" data-id="689" data-toggle="tooltip" data-placement="right" rel="external nofollow" data-original-title="<?php $posts->title(); ?>" title="<?php echo $posts->fields->text; ?>">
<i class="iconfont icon-goto"></i>
</a>
</div>
</div>
<?php endwhile; ?>
</div>
<?php endwhile; ?>