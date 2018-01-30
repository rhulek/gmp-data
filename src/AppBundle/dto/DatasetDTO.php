<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:29
 */
class DatasetDTO
{

    private $fileIdentifier;

    private $language;

    private $characterSet;

    private $hierarchyLevel;



    /**
     * @var MetaMetaDTO
     */
    private $metaMeta;

    /**
     * @var IdentificationDTO
     */
    private $identification;

    /**
     * @var ClassificationDTO
     */
    private $classification;

    /**
     * @var KeywordDTO
     */
    private $keyword;

    /**
     * @var GeographicDTO
     */
    private $geographic;

    /**
     * @var TemporalDTO
     */
    private $temporal;

    /**
     * @var QualityValidityDTO
     */
    private $qualityValidity;

    /**
     * @var ConformityDTO
     */
    private $conformity;

    /**
     * @var ConstraintsDTO
     */
    private $constraints;

    /**
     * @var ResponsiblePartyDTO
     */
    private $resposibleParty;

    /**
     * @return MetaMetaDTO
     */
    public function getMetaMeta()
    {
        return $this->metaMeta;
    }

    /**
     * @param MetaMetaDTO $metaMeta
     */
    public function setMetaMeta($metaMeta)
    {
        $this->metaMeta = $metaMeta;
    }

    /**
     * @return IdentificationDTO
     */
    public function getIdentification()
    {
        return $this->identification;
    }

    /**
     * @param IdentificationDTO $identification
     */
    public function setIdentification($identification)
    {
        $this->identification = $identification;
    }

    /**
     * @return ClassificationDTO
     */
    public function getClassification()
    {
        return $this->classification;
    }

    /**
     * @param ClassificationDTO $classification
     */
    public function setClassification($classification)
    {
        $this->classification = $classification;
    }

    /**
     * @return KeywordDTO
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param KeywordDTO $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return GeographicDTO
     */
    public function getGeographic()
    {
        return $this->geographic;
    }

    /**
     * @param GeographicDTO $geographic
     */
    public function setGeographic($geographic)
    {
        $this->geographic = $geographic;
    }

    /**
     * @return TemporalDTO
     */
    public function getTemporal()
    {
        return $this->temporal;
    }

    /**
     * @param TemporalDTO $temporal
     */
    public function setTemporal($temporal)
    {
        $this->temporal = $temporal;
    }

    /**
     * @return QualityValidityDTO
     */
    public function getQualityValidity()
    {
        return $this->qualityValidity;
    }

    /**
     * @param QualityValidityDTO $qualityValidity
     */
    public function setQualityValidity($qualityValidity)
    {
        $this->qualityValidity = $qualityValidity;
    }

    /**
     * @return ConformityDTO
     */
    public function getConformity()
    {
        return $this->conformity;
    }

    /**
     * @param ConformityDTO $conformity
     */
    public function setConformity($conformity)
    {
        $this->conformity = $conformity;
    }

    /**
     * @return ConstraintsDTO
     */
    public function getConstraints()
    {
        return $this->constraints;
    }

    /**
     * @param ConstraintsDTO $constraints
     */
    public function setConstraints($constraints)
    {
        $this->constraints = $constraints;
    }

    /**
     * @return ResponsiblePartyDTO
     */
    public function getResposibleParty()
    {
        return $this->resposibleParty;
    }

    /**
     * @param ResponsiblePartyDTO $resposibleParty
     */
    public function setResposibleParty($resposibleParty)
    {
        $this->resposibleParty = $resposibleParty;
    }



}