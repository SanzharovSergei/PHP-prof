<?php

class Computer extends Product
{
    private $diagonal;
    public function __construct($article, $name, $brand, $cost)
    {
        $this->brand = $brand; //Передаем brand
        parent::__construct($article, $name, $cost); //Переходим в конструктор родителя

    }
    public function about()
    {
        parent::about();
        echo ' ' . $this->brand . '<br/>Цена: ' . $this->cost . ' руб<br/><br/>';
    }
}
