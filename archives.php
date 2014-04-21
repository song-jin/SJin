<?php  
/*
	Template Name: Archives
*/
get_header()?>
	<?php
		$previous_year = $year = 0;
		$previous_month = $month = 0;
		$ul_open = false;

		$myposts = get_posts('numberposts=-1&orderby=post_date&order=DESC');
	?>
	<div class='archives'>
	<?php foreach($myposts as $post) : ?>

	<?php
		setup_postdata($post);
		$year = mysql2date('Y', $post->post_date);
		$month = mysql2date('n', $post->post_date);
		$day = mysql2date('j', $post->post_date);
	?>
	<?php if($year != $previous_year ) : ?>

	<?php if($ul_open == true) : ?>
		</ul>
		</div>
	<?php endif; ?>
	<div class='year-list'>

	<h1><?php the_time('Y'); ?></h1>
	<ul class='list'>
		<?php $ul_open = true; ?>
		<?php endif; ?>
		<?php $previous_year = $year; $previous_month = $month; ?>
		<li>
			<span class='list-name'><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
			<span class='list-meta'>
				<span>发表于：<?php the_date(Y年n月j日) ?></span>
				<span class='tag'>
					<?php if(has_tag()): ?>
						<?php the_tags(''); ?>
						/
					<?php else : ?>
						<?php echo 'No Tag' ?>
						/
					<?php endif; ?>
				</span>
				<span class='comment'>
					<?php comments_popup_link( __( '无评论', 'farlee' ), __( '评论 1', 'farlee' ), __( '评论 %', 'farlee' ), 'comments-link', __('评论关闭', 'farlee')); ?>
				</span>
			</span>
		</li>
	<?php endforeach; ?>
	</ul>
	</div>
<?php get_footer(); ?>