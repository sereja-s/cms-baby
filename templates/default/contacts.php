<div class="content">

	<?= $this->breadcrumbs ?>

	<section class="s-static-page">
		<div class="container">
			<h1 class="title-page">Контакты</h1>
			<div class="content-block">
				<p class="text">Задать вопросы о покупке можно по эл.почте: <a class="header__phone" href="mailto:<?= $this->set['email'] ?>"><?= $this->set['email'] ?></a> кроме того, наши специалисты готовы дать консультацию по телефонному номеру: <a class="header__phone" href="tel:<?= preg_replace('/[^+\d]/', '', $this->set['phone']) ?>"><?= $this->set['phone'] ?></a></p>
				<p class="text">Мы приглашаем в наш розничный магазин: <br><b>г.Донецк, ТЦ золотое кольцо</b></p>
				<!-- <div class="content-block__row">
					<div class="content-block__col">
						<h4 class="title-small">Сертификаты:</h4><a href="static/images/content/certificates/img-1.jpg"> <img class="content-block__img" src="static/images/content/certificates/img-1.jpg" alt="Сертификат"></a>
					</div>
					<div class="content-block__col">
						<h4 class="title-small">Юридические данные</h4>
						<ul class="no-dots">
							<li>Юридические данные:</li>
							<li>ООО "Спорт-Юнити"</li>
							<li>ИНН: 77231646464</li>
							<li>ОГРН: 13464641164 </li>
							<li>Юридический адресс: 109144, г. Москва, ул. Новочеркасский 6-р, д.36 </li>
						</ul>
					</div>
				</div> -->
			</div>
		</div>
	</section>

</div>