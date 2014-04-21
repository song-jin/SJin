<?php  

get_header();?>
	<div class='links'>
		<h1>试验田</h1>
		<ul>
			<li>
				<a href='<?php echo get_template_directory_uri(); ?>/index.html' target='_blank'>Personal Map</a>
				<p>trying</p>
			</li>
			<li>
				<a href='<?php echo get_template_directory_uri(); ?>/spider.php' target='_blank'>Spider</a>
				<p>使用simple_html_dom库和JQuery mobile抓取嘉应学院梅水徽音上面的跳蚤信息，请使用手机浏览。</p>
			</li>
		</ul>
	</div>
<?php get_footer(); ?>