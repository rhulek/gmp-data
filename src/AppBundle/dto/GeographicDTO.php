<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:27
 */
class GeographicDTO
{

    /**
     * @var GeoBoundingBoxDTO[]
     */
    private $boundingBoxes;

    /**
     * @return GeoBoundingBoxDTO[]
     */
    public function getBoundingBoxes()
    {
        return $this->boundingBoxes;
    }

    /**
     * @param GeoBoundingBoxDTO[] $boundingBoxes
     */
    public function setBoundingBoxes($boundingBoxes)
    {
        $this->boundingBoxes = $boundingBoxes;
    }



}