<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:27
 */
class IdentificationDTO
{

    /**
     * @var string
     */
    private $resourceTitle;

    /**
     * @var IdentifierDTO;
     */
    private $identifiers;

    /**
     * @var string
     */
    private $resourceAbstract;

    /**
     * @var LanguageDTO
     */
    private $language;

    /**
     * @return string
     */
    public function getResourceTitle()
    {
        return $this->resourceTitle;
    }

    /**
     * @param string $resourceTitle
     */
    public function setResourceTitle($resourceTitle)
    {
        $this->resourceTitle = $resourceTitle;
    }

    /**
     * @return IdentifierDTO
     */
    public function getIdentifiers()
    {
        return $this->identifiers;
    }

    /**
     * @param IdentifierDTO $identifiers
     */
    public function setIdentifiers($identifiers)
    {
        $this->identifiers = $identifiers;
    }

    /**
     * @return string
     */
    public function getResourceAbstract()
    {
        return $this->resourceAbstract;
    }

    /**
     * @param string $resourceAbstract
     */
    public function setResourceAbstract($resourceAbstract)
    {
        $this->resourceAbstract = $resourceAbstract;
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





}