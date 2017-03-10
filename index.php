<?php
/*
 * Подключает файл шаблона header.php (шапку). Если передан параметр $name, то будет подключен файл header-{name}.php.
 * Если файл не найден в шаблоне темы, то будет взять файл по умолчанию: wp-includes/theme-compat/header.php
 * get_header( $name );
 * https://wp-kama.ru/function/get_header
  */
//header.php подключил к index.php
get_header();
?>

	<div id="primary" class="content-area col-md-9">
		<main id="main" class="post-wrap" role="main">

		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', get_post_format() );
				?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?><!-- #сайдбар -->
<?php get_footer(); ?><!-- #футер -->