<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 18:10
 */
class SpatialResolutionDTO
{

    /**
     * @var string
     */
    private $equivalentScale;

    /**
     * @var string
     */
    private $resolutionDistance;

    /**
     * @var string
     */
    private $unitOfMeasure;

    /**
     * @return string
     */
    public function getEquivalentScale()
    {
        return $this->equivalentScale;
    }

    /**
     * @param string $equivalentScale
     */
    public function setEquivalentScale($equivalentScale)
    {
        $this->equivalentScale = $equivalentScale;
    }

    /**
     * @return string
     */
    public function getResolutionDistance()
    {
        return $this->resolutionDistance;
    }

    /**
     * @param string $resolutionDistance
     */
    public function setResolutionDistance($resolutionDistance)
    {
        $this->resolutionDistance = $resolutionDistance;
    }

    /**
     * @return string
     */
    public function getUnitOfMeasure()
    {
        return $this->unitOfMeasure;
    }

    /**
     * @param string $unitOfMeasure
     */
    public function setUnitOfMeasure($unitOfMeasure)
    {
        $this->unitOfMeasure = $unitOfMeasure;
    }



}