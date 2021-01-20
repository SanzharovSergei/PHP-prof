<?php
class Product
{   //Свойства
    private static $num = 1;
    private $article;
    private $name;
    private $brand;
    protected $cost;


    //Методы
    public function __construct($article, $name,  $cost)
    {
        $this->article = $article;
        $this->name = $name;
        $this->cost = $cost;
    }
    public function getCost()
    {
        return $this->cost;
    }
    public function about()
    {
        echo '№' . Product::$num++ . ' арт. #' . $this->article . "<br/> Товар:" . $this->name;
    }
}
