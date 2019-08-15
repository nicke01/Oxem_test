<?php 
class Animal {
	protected $name;
	protected $product;
	protected $animalsAmount;
	protected $productsAmount;

	public function getAnimalName() {
		return $this->name;
	}
	public function getProductName() {
		return $this->product;
	}
	public function addAnimal() {
		$this->animalsAmount += 1; 
	}
	public function getAnimalsAmount() {
		return $this->animalsAmount;
	}
	public function checkProducts() {
		return $this->product;
	}
	public function getProducts() {
		return $this->productsAmount;
	}
}

class Cows extends Animal {
	protected $name = "cow";
	protected $product = "milk";
	protected $animalsAmount = 10;
	protected $productsAmount = 10;
}

class Chicken extends Animal {
	protected $name = "chicken";
	protected $product = "eggs";
	protected $animalsAmount = 20;
	protected $productsAmount = 1;
}

$milk = 0;
$eggs = 0;-

$cow = new Cows();
$chicken = new Chicken();

echo "Animals" . "<br>";
echo "Cows: " . $cow->getAnimalsAmount() . "<br>";  
echo "Chicken: " . $chicken->getAnimalsAmount() . "<br><br>"; 
echo "How many products gave us each animal?" . "<br>";
for ( $i = 1; $i <= $cow->getAnimalsAmount(); $i++) {
	$cowRand = rand(8, 12);
	$milk = $milk + $cowRand;
	echo "Cow #". $i . " " . $cowRand . "<br>";
}
for ( $j = 0; $j < $chicken->getAnimalsAmount(); $j++, $i++) {
	$chickenRand = rand(0, 1);
	$eggs = $eggs + $chickenRand;
	echo "Chicken #". $i . " " . $chickenRand . "<br>";
}

echo "<br>";

echo "Milk collected: " . $milk . "l" . "<br>;
echo "Eggs collected: " . $eggs;