<?php


namespace Application\Languages;


abstract class Language
{
    protected $strings = [];
    protected $stringsClient = [];

    public function getString($string_name)
    {
        if (key_exists($string_name, $this->strings)) {
            return $this->strings[$string_name];
        }

        return 'undefined';
    }

    public function getClientStrings()
    {
        return $this->stringsClient;
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

    public static function getObject($choised_lang = null)
    {
        $lang = DEFAULT_LANGUAGE;
        $lang_class_ns = '\Application\Languages\\';

        if (is_string($choised_lang) && class_exists($lang_class_ns.$choised_lang)) {
            $lang = $choised_lang;
        }

        $class_name = $lang_class_ns.$lang;
        return new $class_name();
    }
}