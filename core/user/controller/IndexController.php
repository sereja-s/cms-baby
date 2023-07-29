<?php

namespace core\user\controller;

/** 
 * Индексный контроллер пользовательской части
 */
class IndexController extends BaseUser
{
	protected $name;

	protected function inputData()
	{

		// Выпуск №120
		parent::inputData();

		// Выпуск №124- Пользовательская часть | вывод акций (слайдер под верхним меню)
		$sales = $this->model->get('sales', [
			'where' => ['visible' => 1],
			'order' => ['menu_position']
		]);

		// Выпуск №128 - массив преимуществ
		$advantages = $this->model->get('advantages', [
			'where' => ['visible' => 1],
			'order' => ['menu_position'],
			'limit' => 6
		]);

		// Выпуск №128 | Вывод новостей
		$news = $this->model->get('news', [
			'where' => ['visible' => 1],
			'order' => ['date'],
			'order_direction' => ['DESC'],
			'limit' => 2
		]);

		$reviews = $this->model->get('reviews', [
			'where' => ['visible' => 1],
			'order' => ['datetime'],
			'order_direction' => ['DESC'],
			'limit' => 2
		]);

		$aboutUs = $this->model->get('about_us', ['where' => ['visible' => 1],]);

		// Выпуск №126
		// массив предложений (главная страница) +Выпуск №127
		$arrHits = [

			'new' => [
				'name' => 'Новинки',
				'show-tab' => 'tab-new'
			],
			'sale' => [
				'name' => 'Распродажа',
				'show-tab' => 'tab-sale'
			],
			'hot' => [
				'name' => 'Горячие предложения',
				'show-tab' => 'tab-hot'
			],
			'hit' => [
				'name' => 'Хиты продаж',
				'show-tab' => 'tab-hit'
			],
		];

		$goods = [];

		// получим товары (с учётом их типа)
		foreach ($arrHits as $type => $item) {

			$goods[$type] = $this->model->getGoods([
				'where' => [$type => 1, 'visible' => 1], // +Выпуск №127
				'order' => ['datetime'],
				'order_direction' => ['DESC'],
				'limit' => 7 // выводим не более 8 товаров у которых включены соответствующие предложения
			]);
		}

		// Выпуск №125
		//$goods = $this->model->getGoods();		

		//$goods = $this->model->getGoods(['where' => ['parent_id' => 1]]);		

		// собираем переменные в массив и возвращаем в шаблон, что бы они стали доступными при выводе
		return compact('sales', 'arrHits', 'goods', 'advantages', 'news', 'reviews', 'aboutUs');
	}
}
