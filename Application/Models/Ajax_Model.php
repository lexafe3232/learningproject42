<?php


namespace Application\Models;


use Application\Languages\Language;

class Ajax_Model
{
    public function getClientSideStrings($params)
    {
        $language = Language::getObject($params['lang']);
        $strings = $language->getClientStrings();

        return ['success' => true, 'data' => $strings];
    }
}