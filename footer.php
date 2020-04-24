	<div class="footer">
		<div class="cpy">
			<a href="/"><span>C</span>hoose <span>T</span>ravel</a>
			<p>Choose Travel 2011<br />
			Все права защищены.<br />
			Email: <?php bloginfo('admin_email'); ?> </p>
		</div>

		<?php if (!(dynamic_sidebar('footer'))): ?>
			<div class="menu-foot">
				<h2>Категории</h2>
				<ul>
					<?php wp_list_categories(['title_li' => '']); ?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="menu-foot">
			<h2>Страницы</h2>
			<?php wp_nav_menu(['theme_location' => 'menu',
								'container' => false,
								'menu_class' => '',
								'before' => '- ',
			]); ?>
		</div>
	</div>
	</div>
	<?php wp_footer(); ?>
</body>
</html>
