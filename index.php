<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body style="width: 700px; margin: 100px auto;">
	<h1>ПОЛИМОРФИЗМ И НАСЛЕДОВАНИЕ</h1>
	<h3>1) Распишите своё понимание полиморфизма и наследования своими словами. Представьте, что вас спрашивают на собеседовании.</h3>
	<p><strong>Наследование</strong> - это свойство классов расширяться. Например, у нас есть класс животное. У животных есть глаза и нос. Класс собака - унаследован от объекта животное. Это значит, что у собаки также есть глаза и нос, но в добавок она еще и может гавкать, чего не может другое животное (не собака). Класс кошка, например, также унаследован от объекта животное.<br><strong>Полиморфизм</strong> - это следствие наследования. Это свойство унаследованных классов иметь одинаковые методы, которые будут работать по-разному в контексте объектов. Например, у нас есть класс фигура и классы квадрат, треугольник и трапеция - унаследованные от фигуры. Каждая фигура содержит функционал для вычисления площади, но у каждой фигуры он свой.</p>
	<h3>2) Своими словами распишите отличие интерфейсов и абстрактных классов. В чём отличие? Когда лучше использовать одно, когда другое?</h3>
	<p><strong>Абстрактные классы</strong> могут содержать описание абстрактных методов. Для таких методов указывается лишь заголовок с ключевым словом abstract и всеми прочими атрибутами, указываемыми при объявлении метода. Абстрактные методы не имеют тела или реализации, они лишь описывают, что должен уметь делать объект, а как он это будет делать – проблема наследников абстрактного класса.<br>
	<strong>Интерфейс</strong>, в отличие от абстрактного класса, не может содержать поля и методы, имеющие реализацию – он описывает только чистый функционал в виде абстрактных методов, которые должны реализовать его наследники. Для объявления интерфейса используется ключевое слово interface.В отличие от абстрактных классов про интерфейсы чаще говорят, что классы их не наследуют, а имплементируют или реализуют. Если в классе, который реализует интерфейс, не реализованы все методы интерфейса, то он должен быть абстрактным.</p>
	<br>
	<hr>
</body>
</html>
<?php 

interface Items {
	public function GetParameters() ;
}

class Car implements Items {
	public $color;
	public $transmission;
	public $model;
	public function GetParameters() {
		echo 'Это ' . $this->color . ' ' . $this->model . ' с ' . $this->transmission . ' коробкой передач</br>';
	}
}

class Tv implements Items {
	public $display;
	public $screensize;
	public $model;
	public function GetParameters() {
		echo 'Это телевизор ' . $this->model . ' с ' . $this->display . ' матрицей и разрешением ' . $this->screensize . '</br>';
	}
}
class BallpointPen implements Items {
	public $color;
	public $type;
	public function GetParameters() {
		echo 'Это ' . $this->type . ' ручка с ' . $this->color . ' чернилами </br>';
	}

}
class Duck implements Items {
	public $color;
	public $beak;
	public function GetParameters() {
		echo 'Это ' . $this->color . ' утка с ' . $this->beak . ' клювом </br>';
	}

}
class Producted implements Items {
	public $price;
	public $name;
	public $description;
	public $article;
	public function GetParameters() {
		echo '</br>Товар: ' . $this->name . '</br>Описание: ' . $this->description . '</br>Цена: ' . $this->price . ' RUB</br>Артикул №: ' . $this->article . '</br>';
	}
}

$car1 = new Car();
$car1->color = 'крассная';
$car1->transmission = 'автоматической';
$car1->model = 'AUDI';
$car1->GetParameters();

$car2 = new Car();
$car2->color = 'зеленая';
$car2->transmission = 'ручной';
$car2->model = 'BMW';
$car2->GetParameters();

$Tv1 = new Tv();
$Tv1->model = 'SONY';
$Tv1->display = 'IPS';
$Tv1->screensize = '1920 X 1080';
$Tv1->GetParameters();

$Tv2 = new Tv();
$Tv2->model = 'SAMSUNG';
$Tv2->display = 'AMOLED';
$Tv2->screensize = '1280 X 720';
$Tv2->GetParameters();

$BallpointPen1 = new BallpointPen();
$BallpointPen1->type = 'атоматическая';
$BallpointPen1->color = 'черными';
$BallpointPen1->GetParameters();

$BallpointPen2 = new BallpointPen();
$BallpointPen2->type = 'полу-атоматическая';
$BallpointPen2->color = 'синими';
$BallpointPen2->GetParameters();

$Duck1 = new Duck();
$Duck1->beak = 'длинным';
$Duck1->color = 'белая';
$Duck1->GetParameters();

$Duck2 = new Duck();
$Duck2->beak = 'коротким';
$Duck2->color = 'серая';
$Duck2->GetParameters();

$Producted1 = new Producted();
$Producted1->name = 'Аккумулятор';
$Producted1->description = 'портативный на 10000 mAh';
$Producted1->price = 1200;
$Producted1->article = 797865;
$Producted1->GetParameters();

$Producted2 = new Producted();
$Producted2->name = 'Зарядное устройство';
$Producted2->description = 'длиннй кабель, подстветка, USB 3.0';
$Producted2->price = 700;
$Producted2->article = 796115;
$Producted2->GetParameters();

echo "<br><hr><br><br><br><br><br>";


//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////



interface ProductScreen 
{
	public function GetParam();
}

abstract class Product implements ProductScreen
{
	public $price;
	public $title;
	public $desc;
	public $delivery;
	public function __construct ($price, $title, $desc, $delivery) 
	{
		$this->price = $price;
		$this->title = $title;
		$this->desc = $desc;
		$this->delivery = $delivery;
	}

	abstract public function GetParam();

	public function GetFullParam () 
	{
		echo 'Наименование: ' . $this->title . '<br>Цена: ' . $this->price . '<br>Описание: ' . $this->desc . '<br>Доставка: ' . $this->delivery . $this->GetParam();
	}
}

class Phone extends Product implements ProductScreen
{
	public $net;
	public $firmware;
	public function __construct ($price, $title, $desc, $delivery, $net, $firmware) 
	{
		parent:: __construct ($price, $title, $desc, $delivery);
		$this->net = $net;
		$this->firmware = $firmware;
	}
	public function GetParam () 
	{
		echo '<br>Поддержка сетей: ' . $this->net . '<br>Прошивка: ' . $this->firmware . '<hr>';
	}
}

class Notebook extends Product implements ProductScreen
{
	protected $weight;
	public $Os;
	public function __construct ($price, $title, $desc, $delivery, $weight, $Os) 
	{
		parent:: __construct ($price, $title, $desc, $delivery);
		$this->weight = $weight;
		$this->Os = $Os;
		if ($weight >= 10000) {
			$this->delivery = 300;
			$this->price = $this->price * 0.9 . ' СКИДКА 10% (но доставка дороже=))';
			return $this->price . $this->delivery;
		}
	}
	public function GetParam () 
	{
		echo '<br>Операционная система: ' . $this->Os . '<hr>';
	}

}

class Tablet extends Product implements ProductScreen
{
	public $diagonal;
	public $dockstation;
	public function __construct ($price, $title, $desc, $delivery, $diagonal, $dockstation) 
	{
		parent:: __construct ($price, $title, $desc, $delivery);
		$this->diagonal = $diagonal;
		$this->dockstation = $dockstation;
	}
		public function GetParam () 
	{
		echo '<br>Диагональ: ' . $this->diagonal . '<br>Док. Станция: ' . $this->dockstation . '<hr>';
	}
}

$productitems = [$phone1 = new Phone(8900, 'Lenovo P2', 'Стильный Octa-Core смартфон с отличной камерой', 250, '4G', 'Глобальная'), $phone2 = new Phone(2400, 'Motorola C380', 'Проверенный телефон из 00-х, до сих пор рабочий', 250, '3G', 'Локальная'), $Notebook1 = new Notebook(34000, 'Aser Prime 10', 'Мощьный ноутбук 15"6 дюйма Intel Core i5 Kaby Lake' , 250, 8000, 'WINDOWS 7'), $Notebook2 = new Notebook(65200, 'Dell Alienware', 'Игроаой ноутбук 20"7 дюйма Intel Core i7 Kaby Lake 16GB SSD', 250, 11000, 'WINDOWS 10'), $Tablet1 = new Tablet(9900, 'Asus One 10', 'Планшет с 4 GB оперативной памяти, безрамочный', 250, '9"', 'Есть'), $Tablet2 = new Tablet(7300, 'Doogee X230', 'Планшет с 2 GB оперативной памяти, c OS Ubuntu Mobile', 250, '11"', 'Нет')];

// $phone1->GetFullParam ();
// $phone2->GetFullParam ();
// $Notebook1->GetFullParam ();
// $Notebook2->GetFullParam ();
// $Tablet1->GetFullParam ();
// $Tablet2->GetFullParam ();

foreach ($productitems as $product) 
{
	echo $product->GetFullParam ();
}