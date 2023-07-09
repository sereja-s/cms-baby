<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title><?= $this->set['name'] ?></title>

	<?php $this->getStyles() ?>

</head>

<body class="fixed index-page">

	<div class="wrapper">
		<header class="header">
			<div class="header__top">
				<div class="container">
					<div class="header__content">
						<nav class="header__nav inform-nav">
							<ul class="inform-nav__list">
								<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('catalog') ?>">Все товары</a></li>
								<!-- <li class="inform-nav__item"><a class="inform-nav__link" href="static-page.html">О компании</a></li> -->

								<?php if (!empty($this->menu['information'])) : ?>

									<?php foreach ($this->menu['information'] as $item) : ?>

										<li class="inform-nav__tablet-hide inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias(['information' => $item['alias']]) ?>"><?= $item['name'] ?></a></li>

									<?php endforeach; ?>

								<?php endif; ?>


								<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('news') ?>">Новости</a></li>
								<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('contacts') ?>">Контакты</a></li>
								<li class="inform-nav__tablet-toggle">
									<svg class="svg-sprite-icon icon-dots inform-nav__tablet-icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#dots"></use>
									</svg>
									<div class="inform-subnav">
										<div class="inform-subnav__arrow"></div>
										<ul class="inform-subnav__list">

											<?php if (!empty($this->menu['information'])) : ?>

												<?php foreach ($this->menu['information'] as $item) : ?>

													<li class="inform-subnav__item"><a class="inform-subnav__link" href="<?= $this->alias(['information' => $item['alias']]) ?>"><?= $item['name'] ?></a></li>

												<?php endforeach; ?>

											<?php endif; ?>

										</ul>
									</div>
								</li>
							</ul>
						</nav>
						<nav class="header__nav header__nav--right inform-nav">
							<ul class="inform-nav__list">
								<li class="inform-nav__item"><a class="inform-nav__link" href="">Регистрация</a></li>
								<li class="inform-nav__item"><a class="inform-nav__link" href="">Вход</a></li>
							</ul>
						</nav>
					</div>
				</div>
			</div>
			<div class="header__main">
				<div class="container">
					<div class="header__content">
						<a href="<?= $this->alias() ?>" class="header__logo logo"><img class="logo__img" src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>"></a>
						<div class="header__phones">
							<div class="header__item header__item--mobile"><a class="header__phone" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a><a class="header__link" href="">Заказать звонок</a></div>
							<div class="header__item"><a class="header__phone" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a><span class="header__description"></span></div>
						</div>
						<div class="header__address header-address">
							<svg class="svg-sprite-icon icon-location header-address__icon">
								<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#location"></use>
							</svg><span class="header-address__text"><?= $this->set['address'] ?></span>
						</div>
						<div class="header__shop">
							<div class="header-goods"><span class="header-goods__price">0 &#8381;</span><span class="header-goods__count">0 товаров</span></div>
						</div>
						<div class="header-basket">

							<a href="<?= $this->alias('cart') ?>">

								<svg class="svg-sprite-icon icon-basket header-basket__icon">
									<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#basket"></use>
								</svg><span class="header-basket__text">Корзина</span>

							</a>

						</div>
					</div>
				</div>
			</div>
			<div class="header__menu">
				<div class="container">
					<div class="header__content">

						<?php if (!empty($this->category)) : ?>

							<nav class="header__main-nav main-nav">
								<ul class="main-nav__list">

									<?php foreach ($this->recurseAllSort($this->category) as $item) : ?>

										<li class="main-nav__item">

											<a class="main-nav__link" href="<?= !empty($item['sub']) ? '#' : $this->alias(['catalog' => $item['alias']]) ?>"><?= $item['name'] ?></a>
											<div class="main-nav__dropdown-wrapper">
												<div class="main-nav__dropdown">

													<?php if (!empty($item['sub'])) : ?>

														<ul class="catalog-nav__list">

															<?php foreach ($item['sub'] as $sub) : ?>

																<li class="catalog-nav__item">
																	<a class="catalog-nav__link" href="<?= $this->alias(['catalog' => $sub['alias']]) ?>"> <span class="catalog-nav__text"><?= $sub['name'] ?></span>

																		<?php if (!empty($sub['sub'])) : ?>

																			<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
																				<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
																			</svg>

																		<?php endif; ?>

																	</a>

																	<?php if (!empty($sub['sub'])) : ?>

																		<ul class="catalog-nav__list">

																			<?php foreach ($sub['sub'] as $subsub) : ?>

																				<li class="catalog-nav__item"><a class="catalog-nav__link" href="<?= $this->alias(['catalog' => $subsub['alias']]) ?>"> <span class="catalog-nav__text"><?= $subsub['name'] ?></span></a></li>

																			<?php endforeach; ?>

																		</ul>

																	<?php endif; ?>

																</li>

															<?php endforeach; ?>

														</ul>

													<?php endif; ?>

												</div>
											</div>
										</li>

									<?php endforeach; ?>

								</ul>
							</nav>

						<?php endif; ?>

						<div class="header__search search">
							<svg class="svg-sprite-icon icon-search search__icon">
								<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#search"></use>
							</svg>
							<div class="search__body">
								<form class="search__form">
									<div class="search__input-wrapper">
										<input class="search__input" placeholder="Я хочу купить...">
										<div class="search__clear">
											<svg class="svg-sprite-icon icon-close search__clear-icon">
												<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#close"></use>
											</svg>
										</div>
									</div>
									<input class="search__btn" type="submit" value="Найти">
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header__mobile">
				<div class="container">
					<div class="mobile-menu">
						<div class="mobile-menu__toggle">
							<div class="mobile-menu__sandwich sandwich">
								<div class="sandwich__line sandwich__line--top"></div>
								<div class="sandwich__line sandwich__line--middle"></div>
								<div class="sandwich__line sandwich__line--bottom"></div>
							</div><span class="mobile-menu__title">Каталог товаров</span>
						</div>
						<div class="mobile-menu__content">
							<div class="mobile-menu__header"><span class="mobile-menu__title">Меню</span>
								<div class="mobile-menu__close">
									<svg class="svg-sprite-icon icon-close mobile-menu__close-icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#close"></use>
									</svg>
								</div>
							</div>
							<div class="mobile-menu__body">

								<?php if (!empty($this->category)) : ?>

									<nav class="catalog-nav">
										<ul class="catalog-nav__list">

											<?php foreach ($this->recurseAllSort($this->category) as $item) : ?>

												<li class="catalog-nav__item">

													<a class="catalog-nav__link" href="<?= !empty($item['sub']) ? '#' : $this->alias(['catalog' => $item['alias']]) ?>"><span class="catalog-nav__text" style="font-size: 18px; font-weight: 600"><?= $item['name'] ?></span>

														<?php if (!empty($item['sub'])) : ?>

															<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
																<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
															</svg>

														<?php endif; ?>

													</a>

													<?php if (!empty($item['sub'])) : ?>

														<ul class="sub-menu">

															<?php foreach ($item['sub'] as $sub) : ?>

																<li class="catalog-nav__item">
																	<a class="catalog-nav__link" href="<?= $this->alias(['catalog' => $sub['alias']]) ?>"> <span class="catalog-nav__text" style="font-size: 16px;"><?= $sub['name'] ?></span>

																		<?php if (!empty($sub['sub'])) : ?>

																			<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
																				<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
																			</svg>

																		<?php endif; ?>

																	</a>

																	<?php if (!empty($sub['sub'])) : ?>

																		<ul>

																			<?php foreach ($sub['sub'] as $subsub) : ?>

																				<li class="catalog-nav__item"><a class="catalog-nav__link" href="<?= $this->alias(['catalog' => $subsub['alias']]) ?>"> <span class="catalog-nav__text" style="font-size: 14px;"><?= $subsub['name'] ?></span></a></li>

																			<?php endforeach; ?>

																		</ul>

																	<?php endif; ?>

																</li>


															<?php endforeach; ?>

														</ul>

													<?php endif; ?>

												</li>

											<?php endforeach; ?>

										</ul>
									</nav>

								<?php endif; ?>

								<nav class="inform-nav inform-nav--col">
									<ul class="inform-nav__list">
										<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('catalog') ?>">Все товары</a></li>

										<?php if (!empty($this->menu['information'])) : ?>

											<?php foreach ($this->menu['information'] as $item) : ?>

												<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias(['information' => $item['alias']]) ?>"><?= $item['name'] ?></a></li>

											<?php endforeach; ?>

										<?php endif; ?>

										<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('news') ?>">Новости</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="<?= $this->alias('contacts') ?>">Контакты</a></li>
									</ul>
								</nav>

							</div>
							<div class="mobile-menu__footer" style="flex-wrap: wrap;">

								<div class="mobile-menu__phone"><a class="mobile-menu__phone-number" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a><!-- <a class="mobile-menu__phone-link" href="#">Заказать звонок</a> --></div>
								<div class="mobile-menu__phone"><a class="mobile-menu__phone-number" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a><!-- <span class="mobile-menu__phone-text">Звонок бесплатный </span> --></div>

								<?php if (!empty($this->socials)) : ?>

									<ul class="socials" style="display: flex;">

										<?php foreach ($this->socials as $item) : ?>

											<li class="socials__item" style="padding-top: 10px; width: 50px;"><a class="socials__link" href="<?= $this->alias($item['external_alias']) ?>"><img class="socials__icon" src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>"></a></li>

										<?php endforeach; ?>

									</ul>

								<?php endif; ?>

							</div>

						</div>
					</div>
					<div class="mobile__logo logo"><img class="logo__img" src="<?= $this->img($this->set['img']) ?>" alt="<?= $this->set['name'] ?>"></div>
					<div class="search">
						<form class="search__form">
							<div class="search__input-wrapper">
								<input class="search__input" placeholder="Я хочу купить...">
								<div class="search__clear">
									<svg class="svg-sprite-icon icon-close search__clear-icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#close"></use>
									</svg>
								</div>
							</div>
							<input class="search__btn" type="submit" value="Найти">
						</form>
					</div>
					<nav class="mobile-user-nav">
						<ul class="mobile-user-nav__list">
							<li class="mobile-user-nav__item"><a class="mobile-user-nav__link" href="search.html">
									<svg class="svg-sprite-icon icon-search mobile-user-nav__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#search"></use>
									</svg></a></li>
							<li class="mobile-user-nav__item"><a class="mobile-user-nav__link" href="#">
									<svg class="svg-sprite-icon icon-user mobile-user-nav__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#user"></use>
									</svg></a></li>
							<li class="mobile-user-nav__item"><a class="mobile-user-nav__link" href="<?= $this->alias('cart') ?>">
									<svg class="svg-sprite-icon icon-basket mobile-user-nav__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#basket"></use>
									</svg></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main class="main">