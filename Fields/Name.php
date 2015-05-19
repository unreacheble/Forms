<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 00:34
 */

namespace Fields;


class Name extends AbstractField{
    public function __construct(){
        $this->setType('text');
        $this->addValidateRule(['validator'=>'notEmpty']);
    }


} 