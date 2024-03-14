<div class="sidebar-menu flex-fill">
<div class="sidebar-scroll">
<div class="sidebar-menu-inner">
<ul>
<?php $categories = $this->widget('Widget_Metas_Category_List')->to($category); ?>
<?php while ($category->next()): ?>
<li class="sidebar-item">
<a href="/index.php#<?php $categories->slug(); ?>" class="smooth" data-change="#<?php $categories->slug(); ?>">
<i class="fas fa-<?php $categories->slug(); ?> fa-lg icon-fw icon-lg mr-2"></i>
<span><?php echo $category->name; ?></span>
</a>
</li>
<?php endwhile; ?>
</ul>
</div>
</div>
</div>