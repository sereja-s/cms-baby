<?php if (!empty($data)) : ?>

	<div class="product-prev" data-productContainer>
		<div class="product-prev__header">
			<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="<?= $this->alias(['product' => $data['alias']]) ?>"><img class="product-prev__img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>"></a></div>
		</div>
		<div class="product-prev__body">
			<a href="<?= $this->alias(['product' => $data['alias']]) ?>" class="product-prev__info" style="text-decoration: none; color: #000"><span class="product-prev__title"><?= $data['name'] ?></span><span class="product-prev__country"><?= $data['short_content'] ?></span></a>
			<div class="product-prev__price"><span class="product-prev__price-current"><?= $data['price'] ?> руб.</span>
				<?= !empty($data['old_price']) ? '<span class="product-prev__price-old">' . $data['old_price'] . ' руб.</span>' : '' ?>
			</div>

		</div>
		<div class="product-prev__footer">
			<button class="btn" data-addToCart="<?= $data['id'] ?>">Купить</button>
		</div>
	</div>

<?php endif; ?>