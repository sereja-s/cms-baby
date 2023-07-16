<?php if (!empty($data)) : ?>

	<div class="content">

		<?= $this->breadcrumbs ?>

		<div class="category">
			<div class="container">

				<?php if (empty($goods)) : ?>

					<h3 style="padding-bottom: 25px;">по Вашему запросу ничего не найдено</h3>

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

									<?php if (!empty($order)) : ?>

										<div class="select__header select__header--multi"><span class="select__description">Сортировать по:</span><span class="select__current"></span>
											<svg class="svg-sprite-icon icon-arrow select__icon">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
											</svg>
										</div>
										<div class="select__body">

											<div class="select-list">

												<?php

												$GET = $_GET ?? [];

												?>

												<?php foreach ($order as $name => $item) : ?>

													<a href="<?= $this->alias('catalog/' .  ($this->parameters['alias'] ?? ''), array_merge($GET, ['order' => $item])) ?>" class="select-list__item <?= preg_match('/_desc$/', $item) ? 'order-desc' : '' ?>">
														<?= $name ?>
													</a>

												<?php endforeach; ?>

											</div>

										</div>

									<?php endif; ?>

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

												<div class="filter__buttons">

													<button class="btn btn--bg-orange">Подбор</button>
												</div>

											</div>

										<?php endif; ?>

									</div>

								</form>

								<button class="btn btn--transparent-gray" style="margin-top: 5px;" onclick="location.href = location.pathname">Сброс</button>

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
											<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
										</svg></a>
									<ul class="pagination__list">
										<li class="pagination__item pagination__item--active"><a class="pagination__link" href="#">1</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">2</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">3</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">4</a></li>
										<li class="pagination__item"><a class="pagination__link" href="#">5</a></li>
									</ul><a class="pagination__btn" href="#">
										<svg class="svg-sprite-icon icon-arrow pagination__icon">
											<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
										</svg></a>
								</div>

								<?php if (!empty($quantities)) : ?>

									<div class="pagination__count">
										<h4 class="pagination__text">Показывать по:</h4>
										<div class="select">
											<div class="select__header"><span class="select__current"><?= $_SESSION['quantities'] ?? QTY ?></span>
												<svg class="svg-sprite-icon icon-arrow select__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
												</svg>
											</div>
											<div class="select__body">
												<ul class="select-list qtyitems">

													<?php foreach ($quantities as $item) : ?>

														<li class="select-list__item"><?= $item ?></li>

													<?php endforeach; ?>

												</ul>
											</div>
										</div>
									</div>

								<?php endif; ?>

							</div>
							<section class="s-content">
								<div class="content-block">
									<p class="text-attention"><?= ($data['name'] !== 'Каталог') ? $data['name'] : $this->set['keywords'] ?> в Донецке - есть в нашем магазине по адресу: <?= $this->set['address'] ?>. Сделать заказ можно на этом сайте. Цены доступные. В ассортименте есть большое количество моделей от известных производителей. Все товары соответствуют европейским стандартам. Есть возможность доставки по Донецку и прилегающей территории</p>
									<!-- <h3 class="title-block">Беговелы для детей</h3> -->
									<p class="text"> Вся информация на сайте о товарах носит справочный характер и не является публичной офертой в соответствии с пунктом 2 статьи 437 ГК РФ. Убедительно просим Вас при покупке уточнять наличие желаемых функций и характеристик у нашего сотрудника по тел. <?= $this->set['phone'] ?>. После оформления заказа, мы свяжемся с вами для уточнения деталей заказа. Предложение по продаже товара действительно в течение срока наличия этого товара на складе. </p>
								</div>
							</section>
						</main>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</div>

<?php endif; ?>