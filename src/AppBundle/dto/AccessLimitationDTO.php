<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 18:16
 */
class AccessLimitationDTO
{

    /**
     * @var string
     */
    private $limitation;

    /**
     * @return string
     */
    public function getLimitation()
    {
        return $this->limitation;
    }

    /**
     * @param string $limitation
     */
    public function setLimitation($limitation)
    {
        $this->limitation = $limitation;
    }

}