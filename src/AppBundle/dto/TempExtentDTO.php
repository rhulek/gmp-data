<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 18:02
 */
class TempExtentDTO
{

    /**
     * @var DateTime
     */
    private $startingDate;

    /**
     * @var DateTime
     */
    private $endingDate;

    /**
     * @return DateTime
     */
    public function getStartingDate()
    {
        return $this->startingDate;
    }

    /**
     * @param DateTime $startingDate
     */
    public function setStartingDate($startingDate)
    {
        $this->startingDate = $startingDate;
    }

    /**
     * @return DateTime
     */
    public function getEndingDate()
    {
        return $this->endingDate;
    }

    /**
     * @param DateTime $endingDate
     */
    public function setEndingDate($endingDate)
    {
        $this->endingDate = $endingDate;
    }




}