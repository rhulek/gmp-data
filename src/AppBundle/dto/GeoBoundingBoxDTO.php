<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 18:01
 */
class GeoBoundingBoxDTO
{

    /**
     * @var float
     */
    private $north;

    /**
     * @var float
     */
    private $south;

    /**
     * @var float
     */
    private $east;

    /**
     * @var float
     */
    private $west;

    /**
     * @return float
     */
    public function getNorth()
    {
        return $this->north;
    }

    /**
     * @param float $north
     */
    public function setNorth($north)
    {
        $this->north = $north;
    }

    /**
     * @return float
     */
    public function getSouth()
    {
        return $this->south;
    }

    /**
     * @param float $south
     */
    public function setSouth($south)
    {
        $this->south = $south;
    }

    /**
     * @return float
     */
    public function getEast()
    {
        return $this->east;
    }

    /**
     * @param float $east
     */
    public function setEast($east)
    {
        $this->east = $east;
    }

    /**
     * @return float
     */
    public function getWest()
    {
        return $this->west;
    }

    /**
     * @param float $west
     */
    public function setWest($west)
    {
        $this->west = $west;
    }



}