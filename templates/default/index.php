<div class="content">

	<?php if (!empty($sales)) : ?>

		<section class="s-banner">
			<div class="container">
				<div class="banner">
					<!-- <div class="banner__navigation banner__navigation--prev">
						<svg class="svg-sprite-icon icon-shevron-right banner__navigation-icon">
							<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
						</svg>
					</div> -->
					<!-- <div class="banner__navigation banner__navigation--next">
						<svg class="svg-sprite-icon icon-shevron-right banner__navigation-icon">
							<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
						</svg>
					</div> -->
					<div class="banner__dots"> </div>
					<div class="js-banner">

						<?php foreach ($sales as $item) : ?>

							<div class="banner__item">
								<div class="banner__content">
									<div class="banner__body"><span class="banner__title"><?= $item['name'] ?></span><span class="banner__derscr"><?= $item['sub_title'] ?></span><a class="btn btn--transparent-white btn--round btn--inline" href="#">Выбрать</a></div>
									<div class="banner__img-wrapper"><img class="banner__img" src="<?= $this->img($item['img']) ?>" alt="Картинка на баннере"></div>
								</div>
							</div>

						<?php endforeach; ?>


					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

	<?php if (!empty($advantages)) : ?>

		<section class="s-advantages">
			<div class="container">
				<div class="advantages">

					<?php foreach ($advantages as $item) : ?>

						<div class="advantage">
							<div class="svg-sprite-icon icon-guarantee advantage__icon">
								<img src="<?= $this->img($item['img']) ?>"></img>
							</div>
							<div class="advantage__body"><span class="advantage__title"><?= $item['name'] ?></span><span class="advantage__descr"><?= $item['short_content'] ?></span></div>
						</div>

					<?php endforeach; ?>

				</div>
			</div>
		</section>

	<?php endif; ?>

	<section class="s-hits">
		<div class="container">
			<h2 class="title-section"><?= $this->set['description'] ?></h2>

			<?php if (!empty($goods) && !empty($arrHits)) : ?>

				<div class="hits tabs">
					<div class="mobile-scroll-wrapper">
						<ul class="tabs-navigation hits-navigation">

							<?php $activeItem = -1 ?>

							<?php foreach ($arrHits as $key => $item) : ?>

								<?php if (!empty($goods[$key])) : ?>

									<li class="hits-navigation__item tabs-navigation__item <?= !++$activeItem ? 'tabs-navigation__item--active' : '' ?>" show-tab="<?= $item['show-tab'] ?>"><?= $item['name'] ?></li>

								<?php endif; ?>

							<?php endforeach; ?>

							<!-- <li class="hits-navigation__item tabs-navigation__item" show-tab="tab-benefits">Выгодно</li>
							<li class="hits-navigation__item tabs-navigation__item" show-tab="tab-new">Новинки</li> -->
						</ul>
					</div>
					<div class="tabs__body hits__body">

						<?php $activeItem = -1 ?>

						<?php foreach ($arrHits as $key => $value) : ?>

							<?php if (!empty($goods[$key])) : ?>

								<div class="tab <?= !++$activeItem ? 'tab--active' : '' ?> <?= $value['show-tab'] ?>">
									<div class="products-line-slider">
										<div class="js-products-line-slider">

											<?php foreach ($goods[$key] as $item) {

												$this->showGoods($item);
											} ?>

										</div>
										<div class="products-line-slider__navigation">
											<div class="products-line-slider__btn products-line-slider__btn--prev">
												<svg class="svg-sprite-icon icon-arrow products-line-slider__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
												</svg>
											</div>
											<div class="products-line-slider__dots"></div>
											<div class="products-line-slider__btn products-line-slider__btn--next">
												<svg class="svg-sprite-icon icon-arrow products-line-slider__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#arrow"></use>
												</svg>
											</div>
										</div>
									</div>
								</div>

							<?php endif; ?>

						<?php endforeach; ?>

					</div>
				</div>

			<?php endif; ?>

		</div>
	</section>
	<section class="s-information s-light-bg">
		<div class="container">
			<div class="information">

				<?php if (!empty($news)) : ?>

					<div class="information-item">

						<div class="information-item__header">
							<h2 class="title-section">Новости</h2>
						</div>
						<div class="information-item__body">
							<div class="news-prev__wrapper">

								<?php foreach ($news as $item) {

									$this->showGoods($item, [], 'newsItem');
								} ?>

							</div>
						</div>
						<div class="information-item__footer"><a class="information-item__link" href="<?= $this->alias('news') ?>">Все новости</a></div>
					</div>

				<?php endif; ?>

				<?php if (!empty($reviews)) : ?>

					<div class="information-item">
						<div class="information-item__header">
							<h2 class="title-section">Отзывы</h2>
						</div>
						<div class="information-item__body">

							<?php foreach ($reviews as $item) {

								$this->showGoods($item, [], 'reviewsItem');
							} ?>

						</div>
						<div class="information-item__footer"><a class="information-item__link" href="<?= $this->alias('reviews') ?>">Все отзывы </a></div>
					</div>

				<?php endif; ?>

			</div>
		</div>
	</section>

	<?php if (!empty($aboutUs)) : ?>

		<section class="s-about">
			<div class="container">
				<h2 class="title-section">О нас</h2>
				<div class="about tabs">
					<div class="tabs__body about__body">

						<?php $activeItem = -1 ?>

						<?php foreach ($aboutUs as $item) : ?>

							<div class="tab <?= !++$activeItem ? 'tab--active' : '' ?> tab-<?= $item['id'] ?>">

								<?= $item['content'] ?>

							</div>

						<?php endforeach; ?>

					</div>
					<div class="mobile-scroll-wrapper">
						<ul class="tabs-navigation about-navigation">

							<?php $activeItem = -1 ?>

							<?php foreach ($aboutUs as $value) : ?>

								<li class="about-navigation__item tabs-navigation__item <?= !++$activeItem ? 'tabs-navigation__item--active' : '' ?>" show-tab="tab-<?= $value['id'] ?>"><?= $value['name'] ?></li>

							<?php endforeach; ?>

						</ul>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

</div>

</body>

</html>