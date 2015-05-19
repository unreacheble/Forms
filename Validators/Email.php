<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 01:35
 */

namespace Validators;


class Email extends AbstractValidator{
    public function isValid($value)
    {
        if( preg_match('/([a-zA-Z0-9_\-\.]+@[a-zA-Z0-9\-]+\.[a-zA-Z]+)/',$value) == 0){
            $this->setError("Invalid Email.");
            return false;
        }
        return true;
    }
} 