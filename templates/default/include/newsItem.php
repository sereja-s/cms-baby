<?php if (!empty($data)) : ?>

	<?php $date = $this->dateFormat($data['date']) ?>

	<a class="news-prev" href="#">
		<img src="<?= $this->img($data['img']) ?>" class="news-prev__img"></img>
		<div class="news-prev__body"><span class="news-prev__title"><?= $data['name'] ?></span>
			<span><?= $data['short_content'] ?></span><br>
			<span class="news-prev__date"><?= $date['day'] ?>&nbsp;<?= $date['monthFormat'] ?>&nbsp;<?= $date['year'] ?>г.</span>
		</div>
	</a>

<?php endif; ?>