<?php
/**
 * Created by PhpStorm.
 * User: unreacheble
 * Date: 15.18.5
 * Time: 23:29
 */
namespace Forms;

interface FormInterface {
    public function validate();
    public function isValid();
    public function submit();
    public function addField($type, $name);
} 