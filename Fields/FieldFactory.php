<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.18.5
 * Time: 23:38
 */
namespace Fields;

class FieldFactory {
    public static function build($fieldType){
        $field = "\\Fields\\" . ucfirst($fieldType);
        if(!class_exists($field)){
            throw new \Exception("Unknown field type");
        }
        return new $field;
    }
} 