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
								<li class="inform-nav__item"><a class="inform-nav__link" href="static-page.html">О компании</a></li>
								<li class="inform-nav__item"><a class="inform-nav__link" href="">Доставка и оплата</a></li>
								<li class="inform-nav__tablet-hide inform-nav__item"><a class="inform-nav__link" href="">Акции</a></li>
								<li class="inform-nav__tablet-hide inform-nav__item"><a class="inform-nav__link" href="">Поставщикам</a></li>
								<li class="inform-nav__tablet-hide inform-nav__item"><a class="inform-nav__link" href="">Новости</a></li>
								<li class="inform-nav__tablet-hide inform-nav__item"><a class="inform-nav__link" href="">Гарантии</a></li>
								<li class="inform-nav__item"><a class="inform-nav__link" href="">Контакты</a></li>
								<li class="inform-nav__tablet-toggle">
									<svg class="svg-sprite-icon icon-dots inform-nav__tablet-icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#dots"></use>
									</svg>
									<div class="inform-subnav">
										<div class="inform-subnav__arrow"></div>
										<ul class="inform-subnav__list">
											<li class="inform-subnav__item"><a class="inform-subnav__link" href="#">Акции</a></li>
											<li class="inform-subnav__item"><a class="inform-subnav__link" href="#">Поставщикам</a></li>
											<li class="inform-subnav__item"><a class="inform-subnav__link" href="#">Новости</a></li>
											<li class="inform-subnav__item"><a class="inform-subnav__link" href="#">Гарантии</a></li>
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
							</svg><span class="header-address__text">Москва, пр-т Андропова, 11 к.2 павильон №1/2</span>
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
						<nav class="header__main-nav main-nav">
							<ul class="main-nav__list">
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Самокаты </a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Двухколесные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трехколесные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С большими колесами</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С надувными колесами</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">3 в 1</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">4 в 1</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">5 в 1</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text"> Со светящимися колесами </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Взрослые и подростки</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Двухколесные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трехколесные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С большими колесами</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С надувными колесами </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Городские</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С большими колесами</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С надувными колесами </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Внедорожные</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С надувными колесами</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трюковые</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для начинающих</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для профессионалов </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Электросамокаты</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Городские</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Двухколесные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С большими колесами</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Чемоданы-самокаты</span></a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Беговелы</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Беговелы 2 в 1</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Беговелы-каталки</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Беговелы-самокаты</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Спортивные</span></a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Велосипеды</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Двухколесные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трехколесные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Велосипеды-коляски</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Скоростные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трансформеры</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Четырехколесные</span></a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Скейты</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Круизеры</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Лонгборды</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Пениборды </span></a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Роликовые коньки</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Квады</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Раздвижные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Фитнес</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Взрослые и подростки</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Квады</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Раздвижные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Фитнес</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Ледовые коньки</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Прогулочные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Раздвижные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Фигурные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Хоккейные </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Взрослые и подростки</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Прогулочные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Фигурные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Хоккейные</span></a></li>
													</ul>
												</li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Батуты</a>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Большие</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для взрослых</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для дачи</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для дома</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для улицы</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Каркасные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Мини-батуты</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">С сеткой</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Складные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Спортивные</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Фитнес-батуты</span></a></li>
											</ul>
										</div>
									</div>
								</li>
								<li class="main-nav__item"><a class="main-nav__link" href="category.html">Еще</a>
									<svg class="svg-sprite-icon icon-shevron-right main-nav__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
									</svg>
									<div class="main-nav__dropdown-wrapper">
										<div class="main-nav__dropdown">
											<ul class="catalog-nav__list">
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Каталки</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Развивающие</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Снегокаты</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Взрослые</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для двоих</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Трюковые</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Тюбинги</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Детские</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Для взрослых</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Одноместные</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Тюбинг-машинка</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Спортивный инвентарь</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Батминтон</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Качели и спорткомплексы</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Надувные доски (SUP board)</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Товары для фитнеса</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Футбольные ворота</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Аксессуары</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Шлемы и защита</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Сумки и чехлы</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К беговелам</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К велосипедам</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К настольным играм</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К самокатам</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Запчасти</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К велосипедам</span></a></li>
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">К самокатам</span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Рапродажа</span>
														<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
															<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
														</svg></a>
													<ul class="catalog-nav__list">
														<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Зимний спорт </span></a></li>
													</ul>
												</li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Веломобили</span></a></li>
												<li class="catalog-nav__item"><a class="catalog-nav__link" href="#"> <span class="catalog-nav__text">Настольные игры </span></a></li>
											</ul>
										</div>
									</div>
								</li>
							</ul>
						</nav>
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
								<nav class="catalog-nav">
									<ul class="catalog-nav__list">
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Самокаты</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Беговелы</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Велосипеды</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Ролики</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Скейты</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Батуты</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Аксессуары и запчасти</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Зимний спорт</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
										<li class="catalog-nav__item"><a class="catalog-nav__link" href="category.html"><span class="catalog-nav__text">Настольные игры</span>
												<svg class="svg-sprite-icon icon-shevron-right catalog-nav__icon">
													<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#shevron-right"></use>
												</svg></a></li>
									</ul>
								</nav>
								<nav class="inform-nav inform-nav--col">
									<ul class="inform-nav__list">
										<li class="inform-nav__item"><a class="inform-nav__link" href="static-page.html">О компании</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Доставка и оплата</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Акции</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Поставщикам</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Новости</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Гарантии</a></li>
										<li class="inform-nav__item"><a class="inform-nav__link" href="">Контакты</a></li>
									</ul>
								</nav>
							</div>
							<div class="mobile-menu__footer">
								<div class="mobile-menu__phone"><a class="mobile-menu__phone-number" href="tel:84951203034">+7 (495) 120-30-34</a><a class="mobile-menu__phone-link" href="#">Заказать звонок</a></div>
								<div class="mobile-menu__phone"><a class="mobile-menu__phone-number" href="tel:88007077518">8 (800) 707-75-18</a><span class="mobile-menu__phone-text">Звонок бесплатный </span></div>
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
							<li class="mobile-user-nav__item"><a class="mobile-user-nav__link" href="#">
									<svg class="svg-sprite-icon icon-basket mobile-user-nav__icon">
										<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#basket"></use>
									</svg></a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<main class="main">