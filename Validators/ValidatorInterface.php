<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.18.5
 * Time: 23:32
 */
namespace Validators;

interface ValidatorInterface {
    public function getError();
    public function isValid($value);
} 