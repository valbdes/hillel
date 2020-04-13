<?php

error_reporting(E_ALL);
error_reporting(-1);
ini_set('error_reporting', E_ALL);


class Form
{
    private $fields;
    public function __construct(array $fields, $rules)
    {
        foreach ($fields as $field) {
            $this->fields[$field] = new Field($field, $rules[$field]);
        }
    }
    public function getRule($name)
    {
        return $this->fields[$name];
    }
}
class Field
{
    private $name;
    private $rule;

    public function __construct($name, $rule)
    {
        $this->name = $name;
        $this->rule = $rule;
    }
}



class Validator
{
    private  $data;
    private  $form;

    public  function __construct($data, $form)
    {
        $this->data = $data;
        $this->form = $form;
    }
    public  function validate()
    {
        $invalid = [];
        foreach ($this->data as $field=>$value) {
            $rule = $this->form->getRule($field);
            if (!preg_match($rule, $this->data[$field])) {
                array_push($invalid, $field);
            };
        }
        return !!count($invalid);
    }
}

$fields = ['login', 'password', 'email'];
$rules = [
    'login'     => '/^.{1,15}$/m',
    'password'  => '/[a-zA-Zа-яА-Я,\-_\d]{8,}/m',
    'email'     => '/[a-zA-Z0-9._-]{2,}[@]{1}[a-z-A-Z]+[.]{1}[a-zA-Z]+/'
];
$form = new Form($fields, $rules);
$userData = $_POST;

if (isset($userData)) {
    $validator = new Validator($userData, $form);
    $validator->validate();
}
