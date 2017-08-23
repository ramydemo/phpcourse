<?php

class Product
{
	// properties (variables)
	//methods (functions)
	//public, private, protected 
	//static non-static

	public $title;
	private $count;
	protected $price;

	public function setPrice($price) {
		$this->price = $price;
	}

	public function getPrice() {
		return $this->price;
	}


	public function getTitle()
	{
		return $this->title;
	}

	public function setTitle($title)
	{
		$this->title = $title;
	}

	private function getCurrency() {
		return 'USD';
	}

	public function preparePrice()
	{
		$this->getCurrency() . $this->count;
	}
}

$product1 = new Product;
$product1->setPrice(150);

echo $product1->getPrice() . ' <br>';
echo $product1->price;




