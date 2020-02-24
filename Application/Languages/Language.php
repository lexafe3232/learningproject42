<?php


namespace Application\Languages;


abstract class Language
{
    protected $strings;

    public function getString($string_name)
    {
        if (key_exists($string_name, $this->strings)) {
            return $this->strings[$string_name];
        }

        return 'undefined';
    }

    public static function changeLanguage($lang)
    {
        if (class_exists("\Application\Languages\\$lang")) {
            setcookie('lang', $lang, 0, '/');
            return true;
        } else {
            return false;
        }
    }
}