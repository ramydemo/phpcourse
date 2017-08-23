<?php

class Product
{
	public $title;
	
	public function __construct()
	{
		echo'Class Product intialized <br>';
		$this->title = 'Default title';
	}

	public function processCart() {
		$t = $this->title;
		echo 'cart has' . $t;
	}
	public function getTitle() {
		return $this->title;
	}

	public function setTitle($title) {
		$this->title = trim($title);
	}
}

class ProductReview extends Product 
{
	public $review;

	public function __construct() {
		
		parent::__construct();

		echo 'Class Product Review Initialized <br>';
	}

	public function getReview() {
		$this->review;
	}

	public function getTitle2() {
		$this->title = 'fdjfdhkjfdh';
		return $this->title;
	}
}
/*
$object1 = new Product;
echo $object1->title . ' <br>';
$object1->setTitle('My title');
echo $object1->title . ' <br>';
*/

$object2 = new ProductReview;
echo $object2->title;
