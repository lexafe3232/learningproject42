<?php


namespace Application\Core;


use Application\Languages\Language;

class View
{
    protected $errors = [];
    protected $language = null;

    function __construct()
    {
        $this->language = Language::getObject($_COOKIE['lang']);
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
}