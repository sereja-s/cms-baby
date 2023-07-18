<?php if (!empty($data)) : ?>
	<div class="content">

		<?= $this->breadcrumbs ?>

		<section class="s-product">
			<div class="container">
				<div class="product">
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

										<button class="amount__down down">
											<i class="fas fa-minus"></i>
										</button>

										<input type="text" name="amount_input" aria-label="Количество данного товара" class="amount_input" data-max-count="1" data-increment-count="1" value="1" />

										<button class="amount__up up">
											<i class="fas fa-plus"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="product-info__body">
								<div class="product-info__row">
									<div class="product-rating">
										<div class="product-rating__stars">
											<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#star"></use>
											</svg>
											<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#star"></use>
											</svg>
											<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#star"></use>
											</svg>
											<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#star"></use>
											</svg>
											<svg class="svg-sprite-icon icon-star product-rating__icon">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#star"></use>
											</svg>
										</div><a class="product-info__link" href="#">3 отзыва</a>
									</div>
									<div class="product-info__articul"> <span class="product__text">Артикул: <b>3014</b> </span></div>
								</div>
								<div class="product-info__row">
									<div class="product-color"><span class="product__text">Выберите-цвет</span>
										<ul class="color-list">
											<li class="color-list__item" style="background-color:#c0c0c0"> </li>
											<li class="color-list__item" style="background-color:#00FF00"> </li>
											<li class="color-list__item" style="background-color:#ff69b4"> </li>
											<li class="color-list__item" style="background-color:#1089ff"> </li>
											<li class="color-list__item" style="background-color:#ff0000"> </li>
										</ul>
									</div>
									<div class="product-available"><span class="product__text">Наличие:</span>
										<div class="product-available-view">
											<div class="product-available-view__item"></div>
											<div class="product-available-view__item"></div>
											<div class="product-available-view__item"></div>
											<div class="product-available-view__item"></div>
											<div class="product-available-view__item"></div>
										</div>
									</div>
								</div>
								<div class="product-info__row">
									<div class="product-price"> <span class="product-price__old">4 9900 руб.</span><span class="product-price__current">3 990 руб. </span><a class="product-info__link" href="#">Нашли дешевле?</a></div>
									<div class="product-actions">
										<button class="btn btn--bg-orange btn--big">Купить</button><a class="btn btn--transparent-gray btn--big" href="#">Купить в 1 клик </a>
									</div>
								</div>
							</div>
							<div class="product-info__footer">
								<div class="product-info-advantages">
									<div class="product-info-advantage">
										<div class="product-info-advantage__header">
											<svg class="svg-sprite-icon icon-pay product-info-advantage__icon">
												<use xlink:href="static/images/svg/symbol/sprite.svg#pay"></use>
											</svg><span class="product-info-advantage__title">Оплата</span>
										</div>
										<div class="product-info-advantage__body">
											<ul class="product-list product-list--advantage">
												<li class="product-list__item">Наличные</li>
												<li class="product-list__item">Электронные деньги</li>
												<li class="product-list__item">Сбербанк</li>
												<li class="product-list__item">Безналичная оплата</li>
											</ul>
										</div>
									</div>
									<div class="product-info-advantage">
										<div class="product-info-advantage__header">
											<svg class="svg-sprite-icon icon-fast-delivery product-info-advantage__icon">
												<use xlink:href="static/images/svg/symbol/sprite.svg#fast-delivery"></use>
											</svg><span class="product-info-advantage__title">Доставка</span>
										</div>
										<div class="product-info-advantage__body">
											<p class="product__text">По Москве сегодня курьером - <b>бесплатно</b> </p>
											<p class="product__text">Самовывоз с нашего магазина - <b>бесплатно</b> </p>
										</div>
									</div>
									<div class="product-info-advantage">
										<div class="product-info-advantage__header">
											<svg class="svg-sprite-icon icon-map product-info-advantage__icon">
												<use xlink:href="static/images/svg/symbol/sprite.svg#map"></use>
											</svg><span class="product-info-advantage__title">Самовывоз</span>
										</div>
										<div class="product-info-advantage__body">
											<p class="product__text">г. Москва, проспект Андропова, д. 11, к. 2, павильон № 1/2 </p><a class="product-info__link" href="#">Яндекс карты </a>
										</div>
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
									<li class="product-details-navigation__item tabs-navigation__item" show-tab="tab-reviews"><span>Отзывы</span><span class="product-details-navigation__count">3</span></li>
									<li class="product-details-navigation__item tabs-navigation__item"><a class="scroll-link" href="#l-sam-goods">Похожие товары</a></li>
								</ul>
							</div>
							<div class="tabs__body product-details__body">
								<div class="tab tab-description tab--active">
									<div class="content-block">
										<h2 class="title-section">Описание</h2>
										<p class="text">Яркий и безопасный беговел Puky Pukylino создан для самых маленьких ездоков. Уникальный беговел-каталка знаменитого немецкого бренда помогает улучшить координацию движений и чувство равновесия. Стимулирует развитие двигательных функций, приучает малыша к самостоятельности и готовит к освоению более «сложного» транспорта в будущем. Модель очень устойчива за счет наличия 4 колес и имеет небольшой вес — всего 2,65 кг. Яркая расцветка заряжает позитивом и нравится юным исследователям!</p>
										<h4 class="title-small">Особенности беговела Pukylino:</h4>
										<ul class="product-list">
											<li class="product-list__item">Можно использовать с 1 года (минимальный рост — 75 см).</li>
											<li class="product-list__item">Колеса из прочного пластика.</li>
											<li class="product-list__item">Четыре варианта расцветки на выбор.</li>
											<li class="product-list__item">Максимально допустимый вес ездока — 20 кг.</li>
											<li class="product-list__item">Четыре крупных бесшумных колеса.</li>
											<li class="product-list__item">Легкость управления.</li>
											<li class="product-list__item">Алюминиевый корпус.</li>
											<li class="product-list__item">Удобные не скользящие ручки с расширением по краям.</li>
											<li class="product-list__item">Размеры модели — 51x26x22 см.</li>
											<li class="product-list__item">Спроектирован и изготовлен в Германии.</li>
											<li class="product-list__item">Гарантия на транспортное средство — 2 года.</li>
										</ul>
										<p class="text">Возьмите с собой на прогулку красивый беговел. Сын или дочка будут кататься и с любопытством изучать окружающий мир! </p>
									</div>
								</div>
								<div class="tab tab-characteristics">
									<div class="content-block">
										<h2 class="title-section">Характеристики</h2>
										<div class="product-table__wrapper"><span class="product-table__title">Основное </span>
											<table class="product-table">
												<tbody>
													<tr class="product-table__row">
														<td class="product-table__cell">Производитель</td>
														<td class="product-table__cell">Puky</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Мкс. выдерживаемый вес, кг</td>
														<td class="product-table__cell">20</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Вес, кг</td>
														<td class="product-table__cell">2,65</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Страна</td>
														<td class="product-table__cell">Германия</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Место сборки</td>
														<td class="product-table__cell">Германия</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Гарантия</td>
														<td class="product-table__cell">2 года</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Габариты (ДхШхВ), см</td>
														<td class="product-table__cell">51х26х22</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="product-table__wrapper"><span class="product-table__title">Технические данные </span>
											<table class="product-table">
												<tbody>
													<tr class="product-table__row">
														<td class="product-table__cell">Материалы рамы</td>
														<td class="product-table__cell">сталь</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Материал ручек</td>
														<td class="product-table__cell">резина, комфортные</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Материал колес</td>
														<td class="product-table__cell">EVA (вспененный полиэтилен)</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Регулировка сиденья высотег</td>
														<td class="product-table__cell">нет</td>
													</tr>
													<tr class="product-table__row">
														<td class="product-table__cell">Регулировка руля по высоте</td>
														<td class="product-table__cell">есть</td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="product-table__wrapper"><span class="product-table__title">Разное </span>
											<table class="product-table">
												<tbody>
													<tr class="product-table__row">
														<td class="product-table__cell">Артикул</td>
														<td class="product-table__cell">3014</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<div class="tab tab-reviews">
									<div class="reviews">
										<div class="reviews__header">
											<h2 class="title-section">Отзывы</h2>
											<div class="product-rating">
												<div class="product-rating__stars">
													<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
														<use xlink:href="static/images/svg/symbol/sprite.svg#star"></use>
													</svg>
													<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
														<use xlink:href="static/images/svg/symbol/sprite.svg#star"></use>
													</svg>
													<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
														<use xlink:href="static/images/svg/symbol/sprite.svg#star"></use>
													</svg>
													<svg class="svg-sprite-icon icon-star product-rating__icon product-rating__icon--active">
														<use xlink:href="static/images/svg/symbol/sprite.svg#star"></use>
													</svg>
													<svg class="svg-sprite-icon icon-star product-rating__icon">
														<use xlink:href="static/images/svg/symbol/sprite.svg#star"></use>
													</svg>
												</div><span class="product__text">4.0 бала на основе 3 оценок</span>
											</div><a class="btn btn--bg-orange btn--inline" href="#">Оставить отзыв</a>
										</div>
										<div class="reviews__body">
											<div class="review">
												<div class="review__header">
													<div class="review-author__photo-wrapper"><img class="review-author__photo" src="static/images/content/review/photo.jpg" alt="Фото автора отзыва"></div>
													<div class="review-author__info"><span class="review-author__name">Диана Старикова</span><span class="review-author__mark">Оценка: 5</span></div>
												</div>
												<div class="review__body">
													<div class="review__row"> <span class="review__label">Достоинства</span><span class="review__value">Хороший беговел</span></div>
													<div class="review__row"> <span class="review__label">Недостатки</span><span class="review__value">Нет</span></div>
													<div class="review__row"> <span class="review__label">Комментарий</span><span class="review__value">У меня два мальчика и оба в восторге от беговелов. Безопасный и устойчивый</span></div>
												</div>
											</div>
											<div class="review">
												<div class="review__header">
													<div class="review-author__photo-wrapper"><span class="review-author__photo-text">Е</span></div>
													<div class="review-author__info"><span class="review-author__name">Елена</span><span class="review-author__mark">Оценка: 3</span></div>
												</div>
												<div class="review__body">
													<div class="review__row"> <span class="review__label">Достоинства</span><span class="review__value">Неплохой беговел</span></div>
													<div class="review__row"> <span class="review__label">Недостатки</span><span class="review__value">Сломался через месяц</span></div>
													<div class="review__row"> <span class="review__label">Комментарий</span><span class="review__value">Пришлось сдавать в сервисный центр</span></div>
												</div>
											</div>
											<div class="review">
												<div class="review__header">
													<div class="review-author__photo-wrapper"><span class="review-author__photo-text">П</span></div>
													<div class="review-author__info"><span class="review-author__name">Павел</span><span class="review-author__mark">Оценка: 4</span></div>
												</div>
												<div class="review__body">
													<div class="review__row"> <span class="review__label">Достоинства</span><span class="review__value">Нормальный детский велик</span></div>
													<div class="review__row"> <span class="review__label">Недостатки</span><span class="review__value">Не обнаружил</span></div>
													<div class="review__row"> <span class="review__label">Комментарий</span><span class="review__value">Довольно устойчивый и приятно выглядящий. Без излишеств.</span></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="s-advantages">
			<div class="container">
				<div class="advantages">
					<div class="advantage">
						<svg class="svg-sprite-icon icon-guarantee advantage__icon">
							<use xlink:href="static/images/svg/symbol/sprite.svg#guarantee"></use>
						</svg>
						<div class="advantage__body"><span class="advantage__title">Гарантия</span><span class="advantage__descr">качества всех товаров</span></div>
					</div>
					<div class="advantage">
						<svg class="svg-sprite-icon icon-delivery advantage__icon">
							<use xlink:href="static/images/svg/symbol/sprite.svg#delivery"></use>
						</svg>
						<div class="advantage__body"><span class="advantage__title">Доставка</span><span class="advantage__descr">по Москве и области</span></div>
					</div>
					<div class="advantage">
						<svg class="svg-sprite-icon icon-pay advantage__icon">
							<use xlink:href="static/images/svg/symbol/sprite.svg#pay"></use>
						</svg>
						<div class="advantage__body"><span class="advantage__title">Оплата</span><span class="advantage__descr">онлайн и наличными </span></div>
					</div>
				</div>
			</div>
		</section>
		<section class="s-slider" id="l-sam-goods">
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
		</section>
	</div>
<?php endif; ?>