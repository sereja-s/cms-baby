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

	<section class="s-advantages">
		<div class="container">
			<div class="advantages">
				<div class="advantage">
					<svg class="svg-sprite-icon icon-guarantee advantage__icon">
						<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#guarantee"></use>
					</svg>
					<div class="advantage__body"><span class="advantage__title">Гарантия</span><span class="advantage__descr">качества всех товаров</span></div>
				</div>
				<div class="advantage">
					<svg class="svg-sprite-icon icon-delivery advantage__icon">
						<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#delivery"></use>
					</svg>
					<div class="advantage__body"><span class="advantage__title">Доставка</span><span class="advantage__descr">по Москве и области</span></div>
				</div>
				<div class="advantage">
					<svg class="svg-sprite-icon icon-pay advantage__icon">
						<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#pay"></use>
					</svg>
					<div class="advantage__body"><span class="advantage__title">Оплата</span><span class="advantage__descr">онлайн и наличными </span></div>
				</div>
			</div>
		</div>
	</section>
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
				<div class="information-item">
					<div class="information-item__header">
						<h2 class="title-section">Новости</h2>
					</div>
					<div class="information-item__body">
						<div class="news-prev__wrapper">
							<a class="news-prev" href="#">
								<img src="<?= PATH . TEMPLATE ?>assets/images/content/news/img-1.jpg" class="news-prev__img"></img>
								<div class="news-prev__body"><span class="news-prev__title">Выставка в Германии</span><span class="news-prev__date">13 июля 2018</span></div>
							</a><a class="news-prev" href="#">
								<img src="<?= PATH . TEMPLATE ?>assets/images/content/news/img-2.jpg" class="news-prev__img"></img>
								<div class="news-prev__body"><span class="news-prev__title">Новинки в нашем магазине</span><span class="news-prev__date">2 июля 2018</span></div>
							</a>
						</div>
					</div>
					<div class="information-item__footer"><a class="information-item__link" href="#">Все новости</a></div>
				</div>
				<div class="information-item">
					<div class="information-item__header">
						<h2 class="title-section">Отзывы</h2>
					</div>
					<div class="information-item__body">
						<div class="review-prev">
							<p class="review-prev__text">Купил у вас в середине лета велосипеды для себя, жены и дочери. Понравился ваш выбор и цены. Мне все велосипеды обошлись не очень дорого. Катаемся на них постоянно, ни один пока что не поломался. И доставка у вас очень быстрая, приятно.</p><span class="review-prev__author">Павел</span>
						</div>
					</div>
					<div class="information-item__footer"><a class="information-item__link" href="#">Все отзывы </a></div>
				</div>
				<!-- <div class="information-item information-item--wide">
					<div class="information-item__header">
						<h2 class="title-section">Бренды</h2>
					</div>
					<div class="information-item__body">
						<div class="brands__wrapper">
							<div class="mobile-scroll-wrapper">
								<ul class="brands__list--small">
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-1.jpg"><span class="brand__name">Micro</span></a></li>
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-2.jpg"><span class="brand__name">HUDORA</span></a></li>
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-3.jpg"><span class="brand__name">Globber</span></a></li>
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-4.jpg"><span class="brand__name">Puky</span></a></li>
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-5.jpg"><span class="brand__name">KOKUA</span></a></li>
									<li class="brands__item"><a class="brand" href="brand.html"><img class="brand__img" src="<?= PATH .  TEMPLATE ?>assets/images/content/brands/img-6.jpg"><span class="brand__name">Stiga</span></a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="information-item__footer"><a class="information-item__link" href="brands.html">Все бренды</a><span class="information-item__count">(10) </span></div>
				</div> -->
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

						<!-- <div class="tab tab-advantages">
							<p class="text">Интернет-магазин Baby-Toys занимается продажей зимнего и летнего транспорта для детей и их родителей. Компания работает на рынке уже больше 15 лет. За это время мы составили уникальный ассортимент товаров на любой вкус и кошелек. От классических велосипедов и санок до оригинальных беговелов и приобретающих все большую популярность снегокатов!</p>
							<p class="text">Активный отдых — важная составляющая жизни современного человека. Совместные прогулки с детьми, катание на самокате или коньках повышает настроение, развивает силу и ловкость и способствует дружескому общению. Мы прекрасно понимаем это, поэтому предлагаем лучшие транспортные средства ведущих мировых производителей. Самые яркие, удобные, надежные и безопасные.</p>
						</div>
						<div class="tab tab-service">
							<p class="text">Интернет-магазин Baby-Toys предлагает широчайший выбор детского транспорта. В каталоге вы найдете лучшие велосипеды, самокаты, беговелы от ведущих производителей Европы и Китая по конкурентоспособным ценам. В наличии представлены модели самых разных типов, предназначенные для любого возраста. Подарите своему ребенку ни с чем не сравнимую радость движения!</p>
							<p class="text">Велосипеды по-прежнему остаются для детей одними из самых желанных подарков. И девочки и мальчики мечтают об одном из таких «друзей». Такая покупка подарит ребенку массу удовольствия и радости. Кроме того, это еще и полезный подарок. Велопрогулки помогают ребенку развиваться и поддерживают его в хорошей физической форме, тренируют сердце, оказывают положительное воздействие на формирование осанки. Детский велосипед помогает улучшить координацию, развивают мышцы, а еще дают выход для неуемной энергии ребенка.</p>
						</div>
						<div class="tab tab-delivery">
							<p class="text">Интернет-магазин Baby-Toys занимается продажей зимнего и летнего транспорта для детей и их родителей. Компания работает на рынке уже больше 15 лет. За это время мы составили уникальный ассортимент товаров на любой вкус и кошелек. От классических велосипедов и санок до оригинальных беговелов и приобретающих все большую популярность снегокатов!</p>
							<p class="text">Активный отдых — важная составляющая жизни современного человека. Совместные прогулки с детьми, катание на самокате или коньках повышает настроение, развивает силу и ловкость и способствует дружескому общению. Мы прекрасно понимаем это, поэтому предлагаем лучшие транспортные средства ведущих мировых производителей. Самые яркие, удобные, надежные и безопасные. </p>
						</div> -->
					</div>
					<div class="mobile-scroll-wrapper">
						<ul class="tabs-navigation about-navigation">

							<?php $activeItem = -1 ?>

							<?php foreach ($aboutUs as $value) : ?>

								<li class="about-navigation__item tabs-navigation__item <?= !++$activeItem ? 'tabs-navigation__item--active' : '' ?>" show-tab="tab-<?= $value['id'] ?>"><?= $value['name'] ?></li>

							<?php endforeach; ?>

							<!-- <li class=" about-navigation__item tabs-navigation__item" show-tab="tab-advantages">Наши преимущества</li>
							<li class="about-navigation__item tabs-navigation__item" show-tab="tab-service">Сервис</li>
							<li class="about-navigation__item tabs-navigation__item" show-tab="tab-delivery">Доставка </li> -->
						</ul>
					</div>
				</div>
			</div>
		</section>

	<?php endif; ?>

</div>

</body>

</html>