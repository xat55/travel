<?php get_header() ?>
<div class="content">
    <h2 class="page-title">Страница: <?php single_cat_title(); ?></h2>
	<?php if (have_posts()): while (have_posts()):	the_post();	?>
		<div class="post-main">
			<h1><a href="#"> <?php the_title(); ?> </a> <span>(<?php the_time('d.m.Y');?>)</span></h1>
			<div class="post">
				<?php the_post_thumbnail('thumbnail', 'class=imgstyle') ?>
				<?php the_excerpt(); ?>
				<p><a href=" <?php the_permalink(); ?> ">Читать далее...</a></p>
				<p><?php the_tags(); ?></p>
			</div>
		</div>
	<?php endwhile; ?>
    <div class="pagination">
		<?php
			// подключим файл пагинации
			// get_template_part( 'pagination' );
			// Теперь, где нужно вывести пагинацию используем
			my_pagenavi();
		?>
	</div>
	<?php else: ?>
		<p>Записей не найдено...</p>
	<?php endif; ?>
</div>
<?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
