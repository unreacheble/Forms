<?php

function __autoload($className) {
    $parts = explode('\\', $className);
    $className = implode('/',$parts);
    if(is_file($className . '.php')){
        include $className . '.php';
    }else{
        throw new Exception("Cant find {$className}");
    }
}

$form = new \Forms\TestForm();
$form->addField('name', 'name');
$form->addField('name', 's_name');
$form->addField('name', 'f_name');

$form->name = "qwe";
$form->s_name = "ssss";
$form->f_name = "";
$form->submit();
?>