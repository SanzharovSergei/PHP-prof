<?php

interface ProductInterface
{
    public function getName(): string;
    public function getFinalCost(): float;
}

abstract class Product implements ProductInterface
{
    private $name;
    protected $cost;

    public function __construct($name, $cost)
    {
        $this->name = $name;
        $this->cost = $cost;
    }
    public function getName(): string
    {
        return $this->name;
    }
}

class PieceProduct extends Product
{
    public function getFinalCost(): float
    {
        return $this->cost;
    }
}
class DigitalProduct extends Product
{
    public function getFinalCost(): float
    {
        return $this->cost / 2;
    }
}
class WeightProduct extends Product
{
    private $weight;
    public function __construct($name, $cost, $weight)
    {
        parent::__construct($name, $cost);
        $this->weight = $weight;
    }
    public function getFinalCost(): float
    {
        return $this->cost * $this->weight;
    }
}

$piecePrice = 100;

$products = [
    new PieceProduct('Книга', $piecePrice),
    new DigitalProduct('Операционная система', $piecePrice),
    new WeightProduct('Картошка', 500, 1.5),
];

foreach ($products as $product) {
    echo $product->getName() . ' стоит: ' . $product->getFinalCost() . '<br/>';
}
