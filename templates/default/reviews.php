      <div class="content">

      	<?= $this->breadcrumbs ?>

      	<?php if (!empty($this->reviews)) : ?>

      		<section class="s-brand">
      			<div class="container">
      				<h1 class="title-page">Отзывы</h1>
      				<?php foreach ($this->reviews as $item) {

							$this->showGoods($item, [], 'reviewsItem');
						} ?>
      			</div>
      		</section>

      	<?php endif; ?>

      </div>