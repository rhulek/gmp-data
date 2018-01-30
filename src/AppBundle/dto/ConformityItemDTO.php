<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 18:13
 */
class ConformityItemDTO
{

    /**
     * @var string
     */
    private $specifications;

    /**
     * @var DateTime
     */
    private $date;

    /**
     * @var string
     */
    private $dateType;

    /**
     * @var string
     */
    private $degree;

    /**
     * @return string
     */
    public function getSpecifications()
    {
        return $this->specifications;
    }

    /**
     * @param string $specifications
     */
    public function setSpecifications($specifications)
    {
        $this->specifications = $specifications;
    }

    /**
     * @return DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return string
     */
    public function getDateType()
    {
        return $this->dateType;
    }

    /**
     * @param string $dateType
     */
    public function setDateType($dateType)
    {
        $this->dateType = $dateType;
    }

    /**
     * @return string
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * @param string $degree
     */
    public function setDegree($degree)
    {
        $this->degree = $degree;
    }



}