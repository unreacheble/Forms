<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 00:57
 */

namespace Validators;


class ValidatorFactory {
    public static function build($validator){
        if( is_array($validator) ){
            $params = false;
            if( isset($validator[1]) ){
                $params = $validator[1];
            }
            $validator = $validator['validator'];
            $className = "\\Validators\\" . ucfirst($validator);
            if(!class_exists($className)){
                throw new \Exception("Unknown validator type");
            }
            return new $className($params);
        }else{
            throw new \InvalidArgumentException();
        }
    }
} 