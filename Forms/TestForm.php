<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 01:44
 */

namespace Forms;


class TestForm extends AbstractForm{
    public function submit()
    {
        parent::submit();
        $fields = $this->getFields();
        if( is_array($fields) ){
            foreach ($fields as $field) {
                echo $field->getName() ." -> ".$field->getValue() ."\n";
            }

        }
    }
} 