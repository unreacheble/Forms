<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.18.5
 * Time: 23:33
 */
namespace Validators;

use Fields\AbstractField;

abstract class AbstractValidator implements ValidatorInterface{

    private $error;

    /**
     * @param mixed $error
     */
    public function setError($error)
    {
        $this->error = $error;
    }

    /**
     * @return mixed
     */
    public function getError()
    {
        return $this->error;
    }

    public function isValid($value)
    {
        return true;
    }
}