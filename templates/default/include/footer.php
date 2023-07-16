</main>

<footer class="footer">
	<div class="footer__main">
		<div class="container">

			<div class="footer__navigation">

				<?php if (!empty($this->category)) : ?>

					<div class="footer__item">
						<ul class="footer-nav">

							<li class="footer-nav__item" style="padding-bottom: 15px;"><a class="footer-nav__link" href="<?= $this->alias('catalog') ?>">Все товары</a></li>

						</ul>

						<div class="footer__address" style="display: flex;">

							<svg class="svg-sprite-icon icon-location header-address__icon">
								<use xlink:href="<?= PATH . TEMPLATE ?>assets/images/svg/symbol/sprite.svg#location"></use>
							</svg><span class="footer-address__text"><?= $this->set['address'] ?></span>

						</div>
					</div>

				<?php endif; ?>

				<div class="footer__item">

					<?php if (!empty($this->menu['information'])) : ?>

						<ul class="footer-nav">

							<?php foreach ($this->menu['information'] as $item) : ?>

								<li class="footer-nav__item"><a class="footer-nav__link" href="<?= $this->alias(['information' => $item['alias']]) ?>"><?= $item['name'] ?></a></li>

							<?php endforeach; ?>

						</ul>

					<?php endif; ?>

				</div>
				<div class="footer__item footer__item--wide">
					<ul class="footer-nav">
						<li class="footer-nav__item"><a class="footer-nav__link" href="<?= $this->alias('news') ?>">Новости</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="<?= $this->alias('contacts') ?>">Контакты</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Карта сайта</a></li>
					</ul>

				</div>
			</div>
			<div class="footer__contacts">
				<div class="footer__phones"><a class="footer__phone" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a><!-- <span class="footer__text">Звонок бесплатный</span> --><!-- <span class="footer__text">+7 (495) 120-30-34</span> --></div><a class="footer__mail" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a>
			</div>
			<div class="footer__contacts-mobile">
				<div class="footer__item"><a class="footer__phone" href="tel:8<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a><!-- <span class="footer__text">Звонок бесплатный</span> --></div>
				<div class="footer__item"><!-- <span class="footer__text">+7 (495) 120-30-34</span> --><a class="footer__mail" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a></div>
				<!-- <div class="footer__item footer__item--full">
					<div class="yandex-market"><img src="<?= PATH .  TEMPLATE ?>assets/images/general/yandex.svg" alt="Yandex-market"><a class="btn btn--small btn--transparent-gray" href="#">Оставить отзыв </a></div>
				</div> -->
			</div>
		</div>
	</div>

	<div class="footer__socials">
		<div class="container">

			<?php if (!empty($this->socials)) : ?>

				<ul class="socials">

					<?php foreach ($this->socials as $item) : ?>

						<li class="socials__item"><a class="socials__link" href="<?= $this->alias($item['external_alias']) ?>"><img class="socials__icon" src="<?= $this->img($item['img']) ?>" alt="<?= $item['name'] ?>"><span class="socials__name"><?= $item['name'] ?></span></a></li>

					<?php endforeach; ?>

				</ul>

			<?php endif; ?>

			<!-- <div class="yandex-market"><img src="<?= PATH .  TEMPLATE ?>assets/images/general/yandex.svg" alt="Yandex-market"><a class="btn btn--small btn--transparent-gray" href="#">Оставить отзыв </a></div> -->
		</div>
	</div>

	<div class="footer__bottom">
		<div class="container"><span class="copyright">сделано в &nbsp<a class="footer__personal-data" href="<?= $this->set['external_alias'] ?>">САЙТ ПОСТРОЕН</a></span><a class="footer__personal-data" href="#">Политика обработки персональных данных</a></div>
	</div>
</footer>
</div>

<!-- <script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU"></script> -->

<?php $this->getScripts() ?>

<!-- Выпуск №147 -->
<!-- Выпуск №148 | Пользовательская часть | показ уведомлений пользователю -->
<?php if (!empty($_SESSION['res']['answer'])) : ?>

	<div class="wq-message__wrap"><?= $_SESSION['res']['answer'] ?></div>

<?php endif; ?>

<?php unset($_SESSION['res']); ?>

</body>

</html>