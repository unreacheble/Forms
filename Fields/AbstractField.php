<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.19.5
 * Time: 00:22
 */
namespace Fields;

abstract class AbstractField {
    private $type;
    private $value;
    private $validateRules;
    private $name;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        if(empty($type)){
            $this->type = 'text'; // По умолчанию тип поля текст
        }
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getValidateRules()
    {

        if( !is_array($this->validateRules) ){
            $this->validateRules = []; //Вернуть пустой массив если правила валидации не заданы или заданы неверно
        }
        return $this->validateRules;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @param mixed $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    public function addValidateRule($rule)
    {
        if( !is_array($rule) || !isset($rule['validator']) ){
            throw new \Exception("Incorrect validate rules format");
        }
        $this->validateRules[] = $rule;
    }
} 