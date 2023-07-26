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

<!-- Выпуск №153 | Пользовательская часть | форма регистрации пользователя -->

<?php if (!$this->userData) : ?>

	<div class="login-popup">

		<div class="order-popup__inner">

			<p style="text-align: center; padding-bottom: 15px;">Выберите необходимую форму для заполнения</p>

			<h3><span>Регистрация</span> <span>Вход</span></h3>

			<form action="<?= $this->alias(['login' => 'registration']) ?>" method="post">

				<input type="text" name="name" required placeholder="Ваше имя" value="<?= $this->setFormValues('name') ?>">
				<input type="tel" name="phone" required placeholder="Телефон" value="<?= $this->setFormValues('phone') ?>">
				<input type="email" name="email" required placeholder="E-mail" value="<?= $this->setFormValues('email') ?>">

				<input type="password" name="password" required placeholder="Пароль">
				<input type="password" name="confirm_password" required placeholder="Подтверждение пароля">


				<div class="send-order">
					<button class="execute-order_btn short-item__add-cart" type="submit"><span>Регистрация</span></button>
				</div>

			</form>
			<form action="<?= $this->alias(['login' => 'login']) ?>" method="post" style='display: none'>

				<input type="text" name="name" required placeholder="Ваше имя" value="<?= $this->setFormValues('name') ?>">
				<input type="password" name="password" required placeholder="Пароль">

				<div class="send-order">
					<button class="execute-order_btn short-item__add-cart" type="submit"><span>Вход</span></button>
				</div>

			</form>

		</div>

	</div>

<?php endif; ?>

<div class="inp-popup">

	<div class="order-popup__inner">

		<h3><span>Вход</span></h3>

		<form action="<?= $this->alias(['login' => 'login']) ?>" method="post">

			<input type="text" name="name" required placeholder="Ваше имя" value="<?= $this->setFormValues('name') ?>">
			<input type="password" name="password" required placeholder="Пароль">

			<div class="send-order">
				<button class="execute-order_btn short-item__add-cart" type="submit"><span>Вход</span></button>
			</div>

		</form>

	</div>

</div>
<div class="registration-popup">

	<div class="order-popup__inner">

		<h3><span>Регистрация</span></h3>

		<form action="<?= $this->alias(['login' => 'registration']) ?>" method="post">

			<input type="text" name="name" required placeholder="Ваше имя" value="<?= $this->setFormValues('name') ?>">
			<input type="tel" name="phone" required placeholder="Телефон" value="<?= $this->setFormValues('phone') ?>">
			<input type="email" name="email" required placeholder="E-mail" value="<?= $this->setFormValues('email') ?>">

			<input type="password" name="password" required placeholder="Пароль">
			<input type="password" name="confirm_password" required placeholder="Подтверждение пароля">


			<div class="send-order">
				<button class="execute-order_btn short-item__add-cart" type="submit"><span>Регистрация</span></button>
			</div>

		</form>
	</div>

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