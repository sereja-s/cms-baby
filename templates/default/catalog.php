<?php if (!empty($data)) : ?>

	<div class="content">

		<?= $this->breadcrumbs ?>

		<div class="category">
			<div class="container">

				<?php if (empty($goods)) : ?>

					<h3>по Вашему запросу ничего не найдено</h3>

				<?php else : ?>

					<div class="category__header">

						<?php if (!empty($catalogFilters) || !empty($catalogPrices)) : ?>

							<h2 class="title-page"><?= $data['name'] ?></h2>
							<div class="filter-mobile__toggle"><span>Фильтры</span>
								<svg class="svg-sprite-icon icon-arrow filter-mobile__toggle-icon">
									<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
								</svg>
							</div>
							<div class="category__sort">
								<div class="select">
									<div class="select__header select__header--multi"><span class="select__description">Сортировать по:</span><span class="select__current">популярности</span>
										<svg class="svg-sprite-icon icon-arrow select__icon">
											<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
										</svg>
									</div>
									<div class="select__body">
										<ul class="select-list">
											<li class="select-list__item">цене </li>
											<li class="select-list__item">рейтингу </li>
											<li class="select-list__item">популярности </li>
										</ul>
									</div>
								</div>
							</div>

						<?php endif; ?>

					</div>
					<div class="category__body">

						<aside class="filter category__filter">

							<?php if (!empty($catalogFilters) || !empty($catalogPrices)) : ?>

								<div class="filter-mobile__close">
									<img src="<?= PATH . TEMPLATE ?>assets/images/icons8-закрыть-64.png" class="filter-mobile__close-icon"></img>
								</div>


								<form action="<?= $this->alias('catalog' . (!empty($this->parameters['alias']) ? '/' . $this->parameters['alias'] : '')) ?>" class="filter__body">

									<div class="category-filter _spollers">

										<?php if (!empty($catalogPrices)) : ?>

											<h4 class="category-filter__title category-filter__title" style="padding:10px 10px 50px 5px; color: #ff6d00; font-weight: 700;">Цена</h4>
											<div class="section-filter__body" style="padding-bottom: 35px;">
												<div class="filters-price__slider" id="range-slider" style="margin-left: 5px;"></div>
												<div class="filters-price__inputs">
													<label class="filters-price__label">
														<span class="filters-price__text">от</span>
														<input type="text" name="min_price" value="<?= $catalogPrices['min_price'] ?>" class="filters-price__input" id="input-0">
														<span class="filters-price__text">₽</span>
													</label>
													<label class="filters-price__label">
														<span class="filters-price__text">до</span>
														<input type="text" name="max_price" value="<?= $catalogPrices['max_price'] ?>" class="filters-price__input" id="input-1">
														<span class="filters-price__text">₽</span>
													</label>
												</div>
											</div>

										<?php endif; ?>



										<?php if (!empty($catalogFilters)) : ?>

											<div class="filter__block"><span class="filter__title">Подбор параметров </span>

												<?php foreach ($catalogFilters as $item) : ?>

													<div class="filter__row">
														<div class="select">
															<div class="select__header _spoller"><?= $item['name'] ?>
																<svg class="svg-sprite-icon icon-arrow select__icon">
																	<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
																</svg>
															</div>
															<div class="select__body">

																<?php foreach ($item['values'] as $value) : ?>

																	<div class="select-list__item--mod"><input type="checkbox" name="filters[]" value="<?= $value['id'] ?>" <?= !empty($_GET['filters']) && in_array($value['id'], $_GET['filters']) ? 'checked' : '' ?>>&nbsp<?= $value['name'] ?>&nbsp(<?= $value['count'] ?? 0 ?>)</div>

																<?php endforeach; ?>

															</div>
														</div>
													</div>

												<?php endforeach; ?>

												<!-- <div class="filter__row">
													<div class="filter-color"><span class="filter__label">Цвет</span>
														<ul class="color-list">
															<li class="color-list__item" style="background-color:#000000"></li>
															<li class="color-list__item" style="background-color:#666666"></li>
															<li class="color-list__item color-list__item--white" style="background-color:#ffffff"></li>
															<li class="color-list__item" style="background-color:#84d6ff"></li>
															<li class="color-list__item" style="background-color:#3333ff"></li>
															<li class="color-list__item" style="background-color:#666666"></li>
															<li class="color-list__item" style="background-color:#ff0500"></li>
															<li class="color-list__item" style="background-color:#ff6500"></li>
															<li class="color-list__item" style="background-color:#663300"></li>
															<li class="color-list__item" style="background-color:#ffd701"></li>
															<li class="color-list__item" style="background-color:#009900"></li>
															<li class="color-list__item" style="background-color:#99ff9a"></li>
															<li class="color-list__item" style="background-color:#30d5c8"></li>
															<li class="color-list__item" style="background-color:#103090"></li>
														</ul>
													</div>
												</div> -->

												<div class="filter__buttons">
													<button class="btn btn--transparent-gray">Сброс</button>
													<button class="btn btn--bg-orange">Подбор</button>
												</div>
											</div>

									</div>

								<?php endif; ?>

								</form>

							<?php endif; ?>

						</aside>

						<main class="category-main">
							<div class="products-prev__wrapper products-prev__wrapper--small">

								<?php foreach ($goods as $item) {

									$this->showGoods($item, [], 'goodsItem');
								} ?>

							</div>

							<div class="pagination__wrapper">
								<div class="pagination"><a class="pagination__btn pagination__btn--prev" href="#">
										<svg class="svg-sprite-icon icon-arrow pagination__icon">
											<use xlink:href="static/images/svg/symbol/sprite.svg#arrow"></use>
										</svg></a>
									<ul class="pagination__list">
										<li class="pagination__item pagination__item--active"><a class="pagination__link" href="#">1</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">5</a></li>
									</ul><a class="pagination__btn" href="#">
										<svg class="svg-sprite-icon icon-arrow pagination__icon">
											<use xlink:href="static/images/svg/symbol/sprite.svg#arrow"></use>
										</svg></a>
								</div>
								<div class="pagination__count"><span class="pagination__text">Выводить по:</span>
									<div class="select">
										<div class="select__header"><span class="select__current">12</span>
											<svg class="svg-sprite-icon icon-arrow select__icon">
												<use xlink:href="static/images/svg/symbol/sprite.svg#arrow"></use>
											</svg>
										</div>
										<div class="select__body">
											<ul class="select-list">
												<li class="select-list__item">24 </li>
												<li class="select-list__item">36 </li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<section class="s-content">
								<div class="content-block">
									<p class="text-attention">Беговел или безпедальный велосипед - это одно из популярнейших транспортных средств для детей. В нашем интернет-магазине "Baby-Toys" представлены в широком ассортименте велобеги для детей от 1 года. Это новое но уже завоевавшее большую популярность транспортное средство для детей. Малыши, освоившие езду на беговеле без проблем, пересаживаются на двухколосные велосипеды, минуя сложную стадию обучения с неизбежными падениями. Вся продукция магазина сертифицированная и разрешена для использования маленькими детьми.</p>
									<h3 class="title-block">Беговелы для детей</h3>
									<p class="text">Конструкция очень схожа на обыкновенный двухколесный велосипед без педалей. Управление происходит при помощи руля. Купить велобег можно малышу, которому уже исполнился 1 год. Основным елементом велобега является рама, которая очень похожа на велосипедную. она может быть из металла или пластика.</p>
									<p class="text">К раме часто крепят ручной тормоз. Однако существуют модели и без тормозов. Беговел может иметь подставку для ног и упор. Руль и сиденье регулируемые. Таким образом, одного беговела вполне хватит на 1-3 года. После чего ребенок сможет пересесть на двухколесный велосипед.</p>
									<p class="text">Одним из преимуществ подобной конструкции является то, что скорость езды ребенок может устанавливать по своему усмотрению. Ситуация, когда разогнавшись на беговеле малыш не сможет остановится, полностью исключена. Для того чтобы затормозить нужно просто уперется ногами в землю или воспользоватся ручным тормозом. Оба варианта достаточно надежны. Падение детей с велобегов случаются крайне редко.</p>
									<h3 class="title-block">Купить велобег в Москве</h3>
									<p class="text">Купить беговел можно в нашем интернет-магазине. Это обойдется недорого. В ассортименте есть большое количество моделей от известных производителей. Все товары соответствуют европейским стандартам безопасности.</p>
									<p class="text">Интернет-магазин обслуживает покупателей из всех районов России. Можно покупать товар партиями или поштучно. Доставка осуществляется в кротчайшие срокине зависимо от количества приобретаемого товара. В случае необходимости магазин оказывает бесплатные консультации.</p>
								</div>
							</section>
						</main>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</div>

<?php endif; ?>