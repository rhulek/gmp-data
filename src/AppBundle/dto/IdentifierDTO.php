<?php

namespace AppBundle\dto;

/**
 * Created by PhpStorm.
 * User: richardhulek
 * Date: 29.01.18
 * Time: 17:38
 */
class IdentifierDTO
{

    private $code;

    private $codespace;

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code)
    {
        $this->code = $code;
    }

    /**
     * @return mixed
     */
    public function getCodespace()
    {
        return $this->codespace;
    }

    /**
     * @param mixed $codespace
     */
    public function setCodespace($codespace)
    {
        $this->codespace = $codespace;
    }


}