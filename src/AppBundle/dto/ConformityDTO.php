<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:28
 */
class ConformityDTO
{

    /**
     * @var ConformityItemDTO[]
     */
    private $conformities;

    /**
     * @return ConformityItemDTO[]
     */
    public function getConformities()
    {
        return $this->conformities;
    }

    /**
     * @param ConformityItemDTO[] $conformities
     */
    public function setConformities($conformities)
    {
        $this->conformities = $conformities;
    }

}