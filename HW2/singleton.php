<?php
trait Singleton
{
    private static $instance;
    public static function getInstance()
    {
        if (null === self::$instance) {
            self::$instance = new self();
        }
    }
    private function __construct()
    {
    }
    private function __clone()
    {
    }
    private function __wakeup()
    {
    }
}

final class Uti
{
    use Singleton;
    public function echoArray(array $array)
    {
        print_r($array);
    }
}
$u = Uti::getInstance();
$u->echoArray([1, 2, 3]);
