<?php  
/*
	single page
*/
get_header()?>
	<div class='single'>
		<?php if(have_posts()) : ?>
			<?php while(have_posts()) : the_post() ?>
				<div class='post'>
					<h1 class='post-title'>
						<?php the_title(); ?>
					</h1>
					<div class='post-meta'>
						<span>发表于：<?php the_date(Y年n月j日) ?></span>
						<span> &#45; </span>
						<span><?php comments_popup_link( __( '无评论', 'farlee' ), __( '评论 1', 'farlee' ), __( '评论 %', 'farlee' ), 'comments-link', __('评论关闭', 'farlee')); ?></span>
					</div>
					<div class='content'>
						<?php the_content() ?>
					</div>
				</div>
				<div class='comment-temp'>
					<?php comments_template(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
<?php get_footer() ?>
