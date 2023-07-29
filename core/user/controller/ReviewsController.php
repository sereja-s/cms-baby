<?php

namespace core\user\controller;

use core\admin\model\Model;
use core\base\controller\BaseController;


class ReviewsController extends BaseUser
{

	protected $reviews;

	protected function inputData()
	{

		parent::inputData();

		$this->reviews = $this->model->get('reviews', [
			'where' => ['visible' => 1],
			'order' => ['datetime'],
			'order_direction' => ['DESC'],
			'limit' => 10
		]);
	}
}
