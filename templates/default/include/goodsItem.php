<?php if (!empty($data)) : ?>

	<div class="product-prev">
		<div class="product-prev__header">
			<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#FFFF00"><img class="product-prev__img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>"></a><a class="product-prev__img-wrapper" href="#" data-color="#00FF00"> <img class="product-prev__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/products/product-1/img-2.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/products/product-1/img-3.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/products/product-1/img-4.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/products/product-1/img-5.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"> <img class="product-prev__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/products/product-1/img-6.png" alt="Изображение товара"></a></div>
		</div>
		<div class="product-prev__body">
			<div class="product-prev__info"><span class="product-prev__title"><?= $data['name'] ?></span><span class="product-prev__country"><?= $data['short_content'] ?></span></div>
			<div class="product-prev__price"><span class="product-prev__price-current"><?= $data['price'] ?> руб.</span>
				<?= !empty($data['old_price']) ? '<span class="product-prev__price-old">' . $data['old_price'] . ' руб.</span>' : '' ?>
			</div>
			<div class="product-prev__colors"> </div>
		</div>
		<div class="product-prev__footer">
			<button class="btn" data-addToCart="<?= $data['id'] ?>">Купить</button>
		</div>
	</div>

<?php endif; ?>