<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:28
 */
class ConstraintsDTO
{

    /**
     * @var AccessConditionDTO[]
     */
    private $accessConditions;

    /**
     * @var AccessLimitationDTO[]
     */
    private $accessLimitations;

    /**
     * @return AccessConditionDTO[]
     */
    public function getAccessConditions()
    {
        return $this->accessConditions;
    }

    /**
     * @param AccessConditionDTO[] $accessConditions
     */
    public function setAccessConditions($accessConditions)
    {
        $this->accessConditions = $accessConditions;
    }

    /**
     * @return AccessLimitationDTO[]
     */
    public function getAccessLimitations()
    {
        return $this->accessLimitations;
    }

    /**
     * @param AccessLimitationDTO[] $accessLimitations
     */
    public function setAccessLimitations($accessLimitations)
    {
        $this->accessLimitations = $accessLimitations;
    }



}