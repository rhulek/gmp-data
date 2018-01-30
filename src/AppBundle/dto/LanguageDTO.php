<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:24
 */
class LanguageDTO
{

    private $language;

    /**
     * @return mixed
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param mixed $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }



}