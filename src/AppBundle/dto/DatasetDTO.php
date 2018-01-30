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

    /**
     * @var string
     */
    private $fileIdentifier;

    /**
     * @var LanguageDTO
     */
    private $language;

    /**
     * @var string
     */
    private $characterSet;

    /**
     * @var string
     */
    private $hierarchyLevel;

    /**
     * @var string
     */
    private $metadataStandardName;

    /**
     * @var string
     */
    private $metadataStandardVersion;


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
     * @return string
     */
    public function getFileIdentifier()
    {
        return $this->fileIdentifier;
    }

    /**
     * @param string $fileIdentifier
     */
    public function setFileIdentifier($fileIdentifier)
    {
        $this->fileIdentifier = $fileIdentifier;
    }

    /**
     * @return LanguageDTO
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param LanguageDTO $language
     */
    public function setLanguage($language)
    {
        $this->language = $language;
    }

    /**
     * @return string
     */
    public function getCharacterSet()
    {
        return $this->characterSet;
    }

    /**
     * @param string $characterSet
     */
    public function setCharacterSet($characterSet)
    {
        $this->characterSet = $characterSet;
    }

    /**
     * @return string
     */
    public function getHierarchyLevel()
    {
        return $this->hierarchyLevel;
    }

    /**
     * @param string $hierarchyLevel
     */
    public function setHierarchyLevel($hierarchyLevel)
    {
        $this->hierarchyLevel = $hierarchyLevel;
    }

    /**
     * @return string
     */
    public function getMetadataStandardName()
    {
        return $this->metadataStandardName;
    }

    /**
     * @param string $metadataStandardName
     */
    public function setMetadataStandardName($metadataStandardName)
    {
        $this->metadataStandardName = $metadataStandardName;
    }

    /**
     * @return string
     */
    public function getMetadataStandardVersion()
    {
        return $this->metadataStandardVersion;
    }

    /**
     * @param string $metadataStandardVersion
     */
    public function setMetadataStandardVersion($metadataStandardVersion)
    {
        $this->metadataStandardVersion = $metadataStandardVersion;
    }

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