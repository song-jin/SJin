<?php  
/*
	index.php
*/
get_header();?>
	<div class='home'>
		<?php if(have_posts()) : ?>
			<!--php the loop-->
			<?php while(have_posts()) : the_post() ?>
				<div class='post'>
					<h1>
						<a href='<?php the_permalink(); ?>'>
							<?php the_title(); ?>
						</a>
					</h1>
					<div class='meta'>
						<span>发表于：<?php the_date(Y年n月j日) ?></span>
						<span> &#45; </span>
						<span><?php comments_popup_link( __( '无评论', 'farlee' ), __( '评论 1', 'farlee' ), __( '评论 %', 'farlee' ), 'comments-link', __('评论关闭', 'farlee')); ?></span>
					</div>
					<?php the_content('Continue reading &rsaquo;&rsaquo;') ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div><!--home-->
<?php get_footer() ?>