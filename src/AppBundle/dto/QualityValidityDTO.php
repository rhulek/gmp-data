<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:28
 */
class QualityValidityDTO
{

    /**
     * @var string
     */
    private $lineage;

    /**
     * @var SpatialResolutionDTO[]
     */
    private $spatialResolutions;

    /**
     * @return string
     */
    public function getLineage()
    {
        return $this->lineage;
    }

    /**
     * @param string $lineage
     */
    public function setLineage($lineage)
    {
        $this->lineage = $lineage;
    }

    /**
     * @return SpatialResolutionDTO[]
     */
    public function getSpatialResolutions()
    {
        return $this->spatialResolutions;
    }

    /**
     * @param SpatialResolutionDTO[] $spatialResolutions
     */
    public function setSpatialResolutions($spatialResolutions)
    {
        $this->spatialResolutions = $spatialResolutions;
    }




}