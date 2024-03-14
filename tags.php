           <?php if (!_isMobile()) : ?>

          	<div class="friendlink text-xs card">
					<div class="card-body">


        <?php $this->widget('Widget_Metas_Tag_Cloud', array('sort' => 'count', 'ignoreZeroCount' => true, 'desc' => true, 'limit' => 55))->to($tags); ?>  
		<?php while($tags->next()): ?>  

 		<a href="<?php $tags->permalink(); ?>" title="<?php $tags->name(); ?>"  style="font-size:16px; list-style:none"><?php $tags->name(); ?></a>
		
		<?php endwhile; ?>

        		</div>
			</div>
		<?php endif; ?>

