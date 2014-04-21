<?php  
//去除版本信息
remove_action( 'wp_head', 'wp_generator');
//去除编辑器接口信息
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
//清除离线编辑器接口
remove_action('wp_head', 'rsd_link');
//清除短链接
remove_action('wp_head', 'wp_shortlink_wp_head',10,0 );


//开启略缩图功能
add_theme_support( 'post-thumbnails' );
//定义缩略图大小,宽500px，高300px
add_image_size( 'single-post-thumbnail', 80, 80 ); 



//将excerptt函数中的 ... 替换成Read More，并且加上链接
function emtx_continue_reading_link() {
	return '<span class="more"><a href="'. get_permalink() . '">继续阅读 --&gt;</a></span>';
}
function emtx_auto_excerpt_more( $more ) {
	return emtx_continue_reading_link();
}
add_filter( 'excerpt_more', 'emtx_auto_excerpt_more' );
function emtx_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= emtx_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'emtx_custom_excerpt_more' );


//更改excerpt显示字数
function custom_excerpt_length( $length ) {
    return 500;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

