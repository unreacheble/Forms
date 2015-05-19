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
        if( preg_match('/([\w_\-\.]+@[\w\-]+\.[\w]+)/',$value) == 0){
            $this->setError("Invalid Email.");
            return false;
        }
        return true;
    }
} 