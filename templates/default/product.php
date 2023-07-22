<?php if (!empty($data)) : ?>
	<div class="content">

		<?= $this->breadcrumbs ?>

		<section class="s-product">
			<div class="container">
				<div class="product" data-productContainer>
					<div class="product__header">
						<div class="product-slider">

							<div class="product-slider-dots">

								<?php if (!empty($data['gallery_img'])) : ?>

									<div class="product-slider-dots__btn product-slider-dots__btn--prev">
										<svg class="svg-sprite-icon icon-shevron-right product-slider-dots__btn-icon">
											<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
										</svg>
									</div>
									<div class="js-product-slider-dots">

										<div class="product-slider-dots__item"><img class="product-slider-dots__img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>"></div>

										<?php foreach (json_decode($data['gallery_img'], true) as $item) : ?>

											<div class="product-slider-dots__item"><img class="product-slider-dots__img" src="<?= $this->img($item) ?>" alt="<?= $data['name'] ?>"></div>

										<?php endforeach; ?>

									</div>
									<div class="product-slider-dots__btn product-slider-dots__btn--next">
										<svg class="svg-sprite-icon icon-shevron-right product-slider-dots__btn-icon">
											<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
										</svg>
									</div>

								<?php endif; ?>

							</div>

							<div class="js-product-slider">

								<div class="product-slider__img-wrapper"><img class="product-slider__img" src="<?= $this->img($data['img']) ?>" alt="<?= $data['name'] ?>"></div>

								<?php if (!empty($data['gallery_img'])) : ?>

									<?php foreach (json_decode($data['gallery_img'], true) as $item) : ?>

										<div class="product-slider__img-wrapper"><img class="product-slider__img" src="<?= $this->img($item) ?>" alt="<?= $data['name'] ?>"></div>

									<?php endforeach; ?>

								<?php endif; ?>

							</div>
						</div>


						<div class="product-info">
							<div class="product-info__header">
								<h2 class="title-page"><?= $data['name'] ?></h2>
								<!-- <img class="product-info__logo" src="static/images/content/brands/img-4.jpg" alt=""> -->

								<div class="cart_form">
									<div class="amount_change">

										<button class="amount__down down" data-quantityMinus>
											<i class="fas fa-minus"></i>
										</button>

										<span class="amount_input" data-quantity><?= $this->cart['goods'][$data['id']]['qty'] ?? 1 ?></span>

										<!-- <input type="text" name="amount_input" aria-label="Количество данного товара" class="amount_input" data-quantity value="1" /> -->

										<button class="amount__up up" data-quantityPlus>
											<i class="fas fa-plus"></i>
										</button>
									</div>
								</div>
							</div>

							<div class="product-info__body">

								<div class="product-info__row">
									<div class="product-price">

										<?php if (!empty($data['old_price'])) : ?>

											<span class="product-price__old"><?= $data['old_price'] ?>&nbsp;руб.</span>

										<?php endif; ?>

										<span class="product-price__current"><?= $data['price'] ?>&nbsp;руб.</span>

									</div>
									<div class="product-actions">

										<!-- атрибут: data-toCartAdded будет устанавливаться если такой товар уже есть в корзине -->
										<a data-addToCart="<?= $data['id'] ?>" <?= !empty($this->cart['goods'][$data['id']]) ? 'data-toCartAdded' : '' ?> class="btn btn--bg-orange btn--big" href="#">В корзину</a>

										<a data-addToCart="<?= $data['id'] ?>" data-onClick class="btn btn--transparent-gray btn--big" href="#">Купить в 1 клик </a>
									</div>
								</div>
							</div>

						</div>
					</div>
					<div class="product__body">
						<div class="product-details tabs">
							<div class="mobile-scroll-wrapper">
								<ul class="tabs-navigation product-details-navigation">
									<li class="product-details-navigation__item tabs-navigation__item tabs-navigation__item--active" show-tab="tab-description">Описание</li>
									<li class="product-details-navigation__item tabs-navigation__item" show-tab="tab-characteristics">Характеристики</li>
									<!-- <li class="product-details-navigation__item tabs-navigation__item" show-tab="tab-reviews"><span>Отзывы</span><span class="product-details-navigation__count">3</span></li>
									<li class="product-details-navigation__item tabs-navigation__item"><a class="scroll-link" href="#l-sam-goods">Похожие товары</a></li> -->
								</ul>
							</div>
							<div class="tabs__body product-details__body">
								<div class="tab tab-description tab--active">
									<div class="content-block">

										<h2 class="title-section">Описание</h2>
										<p class="text"><?= $data['content'] ?></p>

									</div>
								</div>
								<div class="tab tab-characteristics">
									<div class="content-block">
										<h2 class="title-section">Характеристики</h2>

										<?php if (!empty($data['filters'])) : ?>

											<div class="product-table__wrapper"><span class="product-table__title">Основное </span>

												<table class="product-table">

													<tbody>

														<?php foreach ($data['filters'] as $item) : ?>

															<tr class="product-table__row">
																<td class="product-table__cell"><?= $item['name'] ?></td>
																<td class="product-table__cell"><?= implode(', ', array_column($item['values'], 'name')) ?></td>
															</tr>

														<?php endforeach; ?>

													</tbody>

												</table>

											</div>

										<?php endif; ?>

									</div>
								</div>

							</div>
						</div>
					</div>

					<div class="product-info__footer">
						<div class="product-info-advantages">
							<div class="product-info-advantage">
								<div class="product-info-advantage__header">
									<svg class="svg-sprite-icon icon-pay product-info-advantage__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#pay"></use>
									</svg><span class="product-info-advantage__title">Оплата</span>
								</div>
								<div class="product-info-advantage__body">
									<ul class="product-list product-list--advantage">
										<li class="product-list__item" style="font-size: 14px;">Наличные</li>
									</ul>
								</div>
							</div>
							<div class="product-info-advantage">
								<div class="product-info-advantage__header">
									<svg class="svg-sprite-icon icon-fast-delivery product-info-advantage__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#fast-delivery"></use>
									</svg><span class="product-info-advantage__title">Доставка</span>
								</div>
								<div class="product-info-advantage__body">
									<p class="product__text"><?= !empty($deliveryInfo['content']) ? $deliveryInfo['content'] : '' ?></p>

								</div>
							</div>

						</div>
					</div>

				</div>
			</div>
		</section>

		<!-- <section class="s-slider" id="l-sam-goods">
			<div class="container">
				<div class="products-border-line-slider">
					<div class="products-border-line-slider__header">
						<h2 class="title-page">Похожие товары</h2>
						<div class="products-border-line-slider__navigation">
							<div class="products-border-line-slider__btn products-border-line-slider__btn--prev">
								<svg class="svg-sprite-icon icon-arrow products-border-line-slider__icon">
									<use xlink:href="static/images/svg/symbol/sprite.svg#arrow"></use>
								</svg>
							</div>
							<div class="products-border-line-slider__btn products-border-line-slider__btn--next">
								<svg class="svg-sprite-icon icon-arrow products-border-line-slider__icon">
									<use xlink:href="static/images/svg/symbol/sprite.svg#arrow"></use>
								</svg>
							</div>
						</div>
					</div>
					<div class="products-border-line-slider__body">
						<div class="js-products-border-line-slider">
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#FFFF00"><img class="product-prev__img" src="static/images/content/products/product-1/img-1.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#00FF00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-2.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-3.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-1/img-4.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-1/img-5.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"> <img class="product-prev__img" src="static/images/content/products/product-1/img-6.png" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Mini Micro 3 в 1 желтый</span><span class="product-prev__country">Россия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">3 990 руб.</span><span class="product-prev__price-old">4 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="product.html" data-color="#fff"><img class="product-prev__img" src="static/images/content/products/product-2/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-2/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#000"> <img class="product-prev__img" src="static/images/content/products/product-2/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-2/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Самокат Puky R 07 L AIR (с надувными колесами) белый</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">17 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-3/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#30D5C8"> <img class="product-prev__img" src="static/images/content/products/product-3/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-3/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-3/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Роликовые коньки Hudora Rollschuh Roller Disco orange, 36(13201)</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">2 990 руб.</span><span class="product-prev__price-old">3 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-4/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-4/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#8a2be2"> <img class="product-prev__img" src="static/images/content/products/product-4/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-4/img-4.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-4/img-5.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Беговел Puky LR M Blue</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">7 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#FFFF00"><img class="product-prev__img" src="static/images/content/products/product-1/img-1.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#00FF00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-2.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-3.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-1/img-4.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-1/img-5.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"> <img class="product-prev__img" src="static/images/content/products/product-1/img-6.png" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Mini Micro 3 в 1 желтый</span><span class="product-prev__country">Россия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">3 990 руб.</span><span class="product-prev__price-old">4 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="product.html" data-color="#fff"><img class="product-prev__img" src="static/images/content/products/product-2/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-2/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#000"> <img class="product-prev__img" src="static/images/content/products/product-2/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-2/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Самокат Puky R 07 L AIR (с надувными колесами) белый</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">17 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-3/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#30D5C8"> <img class="product-prev__img" src="static/images/content/products/product-3/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-3/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-3/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Роликовые коньки Hudora Rollschuh Roller Disco orange, 36(13201)</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">2 990 руб.</span><span class="product-prev__price-old">3 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-4/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-4/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#8a2be2"> <img class="product-prev__img" src="static/images/content/products/product-4/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-4/img-4.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-4/img-5.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Беговел Puky LR M Blue</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">7 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#FFFF00"><img class="product-prev__img" src="static/images/content/products/product-1/img-1.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#00FF00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-2.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-1/img-3.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-1/img-4.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-1/img-5.png" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"> <img class="product-prev__img" src="static/images/content/products/product-1/img-6.png" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Mini Micro 3 в 1 желтый</span><span class="product-prev__country">Россия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">3 990 руб.</span><span class="product-prev__price-old">4 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="product.html" data-color="#fff"><img class="product-prev__img" src="static/images/content/products/product-2/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-2/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#000"> <img class="product-prev__img" src="static/images/content/products/product-2/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="product.html" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-2/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Самокат Puky R 07 L AIR (с надувными колесами) белый</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">17 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-3/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#30D5C8"> <img class="product-prev__img" src="static/images/content/products/product-3/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-3/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#de5216"> <img class="product-prev__img" src="static/images/content/products/product-3/img-4.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Роликовые коньки Hudora Rollschuh Roller Disco orange, 36(13201)</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">2 990 руб.</span><span class="product-prev__price-old">3 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
							<div class="product-prev">
								<div class="product-prev__header">
									<div class="js-product-prev__slider"><a class="product-prev__img-wrapper" href="#" data-color="#1089ff"><img class="product-prev__img" src="static/images/content/products/product-4/img-1.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ace147"> <img class="product-prev__img" src="static/images/content/products/product-4/img-2.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#8a2be2"> <img class="product-prev__img" src="static/images/content/products/product-4/img-3.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#ff69b4"> <img class="product-prev__img" src="static/images/content/products/product-4/img-4.jpg" alt="Изображение товара"></a><a class="product-prev__img-wrapper" href="#" data-color="#f00"> <img class="product-prev__img" src="static/images/content/products/product-4/img-5.jpg" alt="Изображение товара"></a></div>
								</div>
								<div class="product-prev__body">
									<div class="product-prev__info"><span class="product-prev__title">Беговел Puky LR M Blue</span><span class="product-prev__country">Германия</span></div>
									<div class="product-prev__price"><span class="product-prev__price-current">7 990 руб.</span></div>
									<div class="product-prev__colors"> </div>
								</div>
								<div class="product-prev__footer">
									<button class="btn">Купить</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section> -->
	</div>
<?php endif; ?>