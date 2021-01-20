<?php

class Tv extends Product
{
    private $diagonal;
    public function __construct($article, $name, $diagonal, $cost)
    {
        $this->diagonal = $diagonal; //Передаем diagonal
        parent::__construct($article, $name, $cost); //Переходим в конструктор родителя

    }
    public function about()
    {
        parent::about();
        echo ' c диагональю ' . $this->diagonal . '<br/>Цена: ' . $this->cost . ' руб<br/><br/>';
    }
}
