<?php


namespace Application\Core;


class View
{
    protected $errors = [];
    protected $language = null;

    function __construct()
    {
        $this->language = $this->getLanguageObject();
    }

    public function generate($content_view, $template_view = 'default.php', $data = null)
    {
        if (isset($data['errors'])) {
            $this->errors = $data['errors'];
        }
        if (is_array($data)) {
            extract($data);
        }

        include APP_ROOT.'/Views/templates/'.$template_view;
    }

    public function isActiveError($error_code)
    {


        if (is_int(array_search($error_code, $this->errors))) {
            return true;
        } else {
            return false;
        }
    }

    public function getStr($string_name)
    {
        return $this->language->getString($string_name);
    }

    protected function getLanguageObject()
    {
        $lang = 'Russian';
        $lang_class_ns = '\Application\Languages\\';

        if (isset($_COOKIE['lang'])) {
            if (class_exists($lang_class_ns.$_COOKIE['lang'])) {
                $lang = $_COOKIE['lang'];
            }
        }

        $class_name = $lang_class_ns.$lang;
        return new $class_name();
    }
}