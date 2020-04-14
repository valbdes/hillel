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
        return $this->fields[$name]->getRule();
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
    public function getRule()
    {
        return $this->rule;
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
        foreach ($this->data as $field => $value) {
            $rule = $this->form->getRule($field);
            if (!preg_match($rule, $value)) {
                array_push($invalid, $field);
            };
        }
        $result = !count($invalid);
        $this->getMessage($result, $invalid);
        return $result;
    }
    public function getMessage($result, $invalid = [])
    {
        if ($result) {
            echo 'Form is valid' . '<br>';
        } else {
            echo 'The following fields are not valid: ' . implode(',', $invalid) . '<br>';
        }
    }
}

$userData = $_POST;
$fields = ['login', 'password', 'email', 'info'];
$rules = [
    'login'     => '/^.{1,15}$/m',
    'password'  => '/[a-zA-Zа-яА-Я,\-_\d]{8,}/m',
    'email'     => '/[a-zA-Z0-9._-]{2,}[@]{1}[a-z-A-Z]+[.]{1}[a-zA-Z]+/',
    'info'      => '/[A-ZА-Я]+/m'
];
$callBack = function ($match) {
    return mb_strtolower($match[0]);
};
$form = new Form($fields, $rules);


if (isset($userData)) {
    $validator = new Validator($userData, $form);
    $validator->validate();
}

$info = preg_replace_callback($form->getRule('info'), $callBack, $userData['info']);
echo 'Lowercase letters : ' . $info;
