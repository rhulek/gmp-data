<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:27
 */
class ClassificationDTO
{

    /**
     * @var string
     */
    private $topicCategory;

    /**
     * @return string
     */
    public function getTopicCategory()
    {
        return $this->topicCategory;
    }

    /**
     * @param string $topicCategory
     */
    public function setTopicCategory($topicCategory)
    {
        $this->topicCategory = $topicCategory;
    }



}