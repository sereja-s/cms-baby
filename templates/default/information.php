<div class="container">

	<?= $this->breadcrumbs ?>

	<?php if (!empty($this->menu['information-menu'])) : ?>

		<?php foreach ($this->menu['information-menu'] as $item) : ?>

			<?php if ($item['alias'] === ($this->parameters['alias'])) : ?>

				<h1 class="category-page__title"><?= $item['name'] ?></h1>

				<section class="catalog-internal">

					<?= $item['content'] ?>

				</section>

			<?php endif; ?>

		<?php endforeach; ?>

	<?php endif; ?>
</div>