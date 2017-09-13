<?php
/**
* 1. Придумать класс, который описывает любую сущность из предметной области интернет-магазинов: 
* продукт, ценник, посылка и т.п.
* 2. Описать свойства класса из п.1 (состояние).
* 3. Описать поведение класса из п.1 (методы).
* 4. Придумать наследников класса из п.1. Чем они будут отличаться?
*/
class Product {	
	public $name;                         //название товара
	public $price;                        //стоимость товара

	function __construct($name, $price) { //конструктор класса
		$this->name = $name;              //присваевает значения объектов
		$this->price = $price;            //переменным этого класса
	} 

	public function show() {              //ф-ия просто выводит строку текста подставляя                               
		echo $this->name . " стоит " . $this->price . " руб.</br>";  // нужные переменные
	}
}

$pr = new Product('Крем для попы "мазь"', 200);
$pr->show();

/**
* класс картриджей для принтера, имеет дополнительное свойство - 
* номер картриджа
*/
class PrinterCartridge extends Product {
	public $cartridgeNumber;

	function __construct($name, $price, $cartridgeNumber) {
		parent:: __construct($name, $price);
		$this->cartridgeNumber = $cartridgeNumber;
	}
	public function show() {
		echo "Картридж " . $this->name . " стоит " . $this->price . " руб.</br>";
		echo "Номер картриджа " . $this->cartridgeNumber . "</br>";
	}
}

$pc = new PrinterCartridge("НР", 1500, 944);
$pc->show();

/**
* класс книга, дополнительное свойство - количество страниц
*/
class Book extends Product {
	public $pages;

	function __construct($name, $price, $pages) {
		parent:: __construct($name, $price);
		$this->pages = $pages;
	}
	public function show() {
		echo 'Книга "' . $this->name . '" стоит ' . $this->price . " руб. В ней " . $this->pages . " страниц</br>";
	}
}

$book = new PrinterCartridge('Почувствуй класс', 900, 776);
$book->show();