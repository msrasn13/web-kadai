<html>
<!--- ヘッダ --->
<?php get_header(); ?>


<div class="main-contents">
	<div class="sidebar">
		<!--- サイドバー --->
		<?php get_sidebar(); ?>
	</div>
	<div class="right-contents">
		<?php if(have_posts()): while(have_posts()): the_post(); ?>
		<article <?php post_class(); ?>>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		</article>
		<?php endwhile; endif; ?>
	</div>
</div>

<!--- フッター --->
<?php get_footer(); ?>


</html>