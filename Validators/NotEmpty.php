<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 01:35
 */

namespace Validators;


class NotEmpty extends AbstractValidator{
    public function isValid($value)
    {
        if( preg_match('/(\S)/',$value) == 0){
            $this->setError("Can't be empty");
            return false;
        }
        return true;
    }
} 