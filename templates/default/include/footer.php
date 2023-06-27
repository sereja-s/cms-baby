</main>

<footer class="footer">
	<div class="footer__main">
		<div class="container">
			<div class="footer__navigation">
				<div class="footer__item">
					<ul class="footer-nav">
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Самокаты</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="category.html">Беговелы</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Велосипеды</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Роликовые коньки</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Скейты</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Батуты</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Детский спорт и отдых</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Аксессуары и запчасти</a></li>
					</ul>
				</div>
				<div class="footer__item">
					<ul class="footer-nav">
						<li class="footer-nav__item"><a class="footer-nav__link" href="static-page.html">О компании</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Доставка</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Оплата</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Поставщикам</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Новости</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Отзывы</a></li>
					</ul>
				</div>
				<div class="footer__item footer__item--wide">
					<ul class="footer-nav">
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Контакты</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Вопросы и ответы</a></li>
						<li class="footer-nav__item"><a class="footer-nav__link" href="">Карта сайта</a></li>
					</ul><span class="footer__address">Москва, проспект Андропова, д. 11, к. 2, павильон № 1/2 </span>
				</div>
			</div>
			<div class="footer__contacts">
				<div class="footer__phones"><a class="footer__phone" href="tel:88007077518">8 (800) 707-75-18</a><span class="footer__text">Звонок бесплатный</span><span class="footer__text">+7 (495) 120-30-34</span></div><a class="footer__mail" href="mailto:sale@baby-toys.ru">sale@baby-toys.ru</a>
			</div>
			<div class="footer__contacts-mobile">
				<div class="footer__item"><a class="footer__phone" href="tel:88007077518">8 (800) 707-75-18</a><span class="footer__text">Звонок бесплатный</span></div>
				<div class="footer__item"><span class="footer__text">+7 (495) 120-30-34</span><a class="footer__mail" href="mailto:sale@baby-toys.ru">sale@baby-toys.ru </a></div>
				<div class="footer__item footer__item--full">
					<div class="yandex-market"><img src="<?= PATH .  TEMPLATE ?>assets/images/general/yandex.svg" alt="Yandex-market"><a class="btn btn--small btn--transparent-gray" href="#">Оставить отзыв </a></div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer__socials">
		<div class="container">
			<ul class="socials">
				<li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon" src="<?= PATH .  TEMPLATE ?>assets/images/general/socials/instagram.svg" alt="Instagram"><span class="socials__name">Instagram</span></a></li>
				<li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon" src="<?= PATH .  TEMPLATE ?>assets/images/general/socials/facebook.svg" alt="Facebook"><span class="socials__name">Facebook</span></a></li>
				<li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon" src="<?= PATH .  TEMPLATE ?>assets/images/general/socials/ok.svg" alt="Odnoklassniki"><span class="socials__name">Одноклассники</span></a></li>
				<li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon" src="<?= PATH .  TEMPLATE ?>assets/images/general/socials/vk.svg" alt="Vkontakte"><span class="socials__name">Вконтакте</span></a></li>
			</ul>
			<div class="yandex-market"><img src="<?= PATH .  TEMPLATE ?>assets/images/general/yandex.svg" alt="Yandex-market"><a class="btn btn--small btn--transparent-gray" href="#">Оставить отзыв </a></div>
		</div>
	</div>
	<div class="footer__bottom">
		<div class="container"><span class="copyright">© 2010-2020 «Baby-Toys». Все права защищены. Информация сайта защищена законом об авторских правах.</span><a class="footer__personal-data" href="#">Политика обработки персональных данных</a></div>
	</div>
</footer>
</div>

<script src="https://api-maps.yandex.ru/2.1/?lang=ru-RU"></script>

<?php $this->getScripts() ?>

<!-- Выпуск №147 -->
<!-- Выпуск №148 | Пользовательская часть | показ уведомлений пользователю -->
<?php if (!empty($_SESSION['res']['answer'])) : ?>

	<div class="wq-message__wrap"><?= $_SESSION['res']['answer'] ?></div>

<?php endif; ?>

<?php unset($_SESSION['res']); ?>

</body>

</html>