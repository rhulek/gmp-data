<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:27
 */
class KeywordDTO
{

    /**
     * @var KeywordItemDTO[]
     */
    private $keywords;

    /**
     * @return KeywordItemDTO[]
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param KeywordItemDTO[] $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }


}