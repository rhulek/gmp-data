<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:27
 */
class TemporalDTO
{

    /**
     * @var TempExtentDTO[]
     */
    private $temporalExtents;

    /**
     * @var DateTime
     */
    private $creationDate;

    /**
     * @var DateTime
     */
    private $publicationDate;

    /**
     * @var DateTime
     */
    private $revisionDate;

    /**
     * @return TempExtentDTO[]
     */
    public function getTemporalExtents()
    {
        return $this->temporalExtents;
    }

    /**
     * @param TempExtentDTO[] $temporalExtents
     */
    public function setTemporalExtents($temporalExtents)
    {
        $this->temporalExtents = $temporalExtents;
    }

    /**
     * @return DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * @param DateTime $creationDate
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;
    }

    /**
     * @return DateTime
     */
    public function getPublicationDate()
    {
        return $this->publicationDate;
    }

    /**
     * @param DateTime $publicationDate
     */
    public function setPublicationDate($publicationDate)
    {
        $this->publicationDate = $publicationDate;
    }

    /**
     * @return DateTime
     */
    public function getRevisionDate()
    {
        return $this->revisionDate;
    }

    /**
     * @param DateTime $revisionDate
     */
    public function setRevisionDate($revisionDate)
    {
        $this->revisionDate = $revisionDate;
    }



}