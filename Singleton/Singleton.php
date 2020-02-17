<?php namespace Singleton;

class Singleton
{
    private static $object;
    private $string;

    private function __construct($string)
    {
        $this->string = $string;
    }

    public static function getSingleton($string)
    {
        if(!self::$object)
        {
           return self::$object = new self($string);
        }
        return null;
    }

    public function getString()
    {
        return $this->string;
    } 
}