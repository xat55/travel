		<div class="sidebar">
			<?php if (!(dynamic_sidebar('sidebar'))): ?>
				<div class="vidget">
					<h2>Категории</h2>
					<ul>
						<?php wp_list_categories(['title_li' => '']); ?>
					</ul>
				</div>
			<?php endif; ?>
		</div>
