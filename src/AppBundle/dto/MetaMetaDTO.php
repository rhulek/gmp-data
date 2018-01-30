<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:22
 */
class MetaMetaDTO
{

    /**
     * @var ContactDTO[]
     */
    private $pointOfContacts;

    /**
     * Metadata date
     *
     * @var DateTime
     */
    private $date;

    /**
     * @var LanguageDTO
     */
    private $language;

    /**
     * @return ContactDTO[]
     */
    public function getPointOfContacts()
    {
        return $this->pointOfContacts;
    }

    /**
     * @param ContactDTO[] $pointOfContacts
     */
    public function setPointOfContacts($pointOfContacts)
    {
        $this->pointOfContacts = $pointOfContacts;
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