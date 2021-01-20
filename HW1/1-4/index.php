<?php
include 'prod.php';
include 'Tv.php';
include 'Computer.php';
echo 'В корзине:<br/><br/>';
$basket = [
    $first = new Computer('08902', ' Ноутбук', 'LG', '15000'),
    $second = new Tv('0893221', ' Телевизор', '42', '5000'),
    $third= new Tv('0893221500', ' Телевизор', '50', '5000'),
    $four= new Computer('0891503014', ' Ноутбук', 'Huawei', '15000'),
];
$sum = 0;
foreach ($basket as $product) {
    $product->about();
    $sum += $product->getCost();
}
echo 'Итого: ' . $sum . ' руб';
