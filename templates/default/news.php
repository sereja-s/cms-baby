      <div class="content">

      	<?= $this->breadcrumbs ?>

      	<?php if (!empty($this->news)) : ?>

      		<section class="s-brand">
      			<div class="container">
      				<h1 class="title-page">Новости и обзоры</h1>
      				<?php foreach ($this->news as $item) {

							$this->showGoods($item, [], 'newsItem');
						} ?>
      			</div>
      		</section>

      	<?php endif; ?>

      </div>