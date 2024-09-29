<?php

namespace App\Core;

class Validator
{
    private $errors = [];

    public static function make(array $data, array $rules)
    {
        foreach ($rules as $field => $rulesArray) {
            $value = $data[$field] ?? null;
            foreach ($rulesArray as $rule) {
                if (str_contains($rule, ':')) {
                    [$ruleName, $ruleValue] = explode(':', $rule);
                    (new Validator)->$ruleName($field, $value, $ruleValue);
                } else {
                    (new Validator)->$rule($field, $value);
                }
            }
        }
        return new Validator;
    }

    public function fails()
    {
        return !empty($this->errors);
    }

    public function errors()
    {
        return $this->errors;
    }

    private function required($field, $value)
    {
        if (empty($value)) {
            $this->errors[$field][] = "$field is required.";
        }
    }

    private function min($field, $value, $min)
    {
        if (strlen($value) < $min) {
            $this->errors[$field][] = "$field must be at least $min characters.";
        }
    }

    private function max($field, $value, $max)
    {
        if (strlen($value) > $max) {
            $this->errors[$field][] = "$field must not exceed $max characters.";
        }
    }

    private function email($field, $value)
    {
        if (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
            $this->errors[$field][] = "$field must be a valid email address.";
        }
    }

    private function numeric($field, $value)
    {
        if (!is_numeric($value)) {
            $this->errors[$field][] = "$field must be a number.";
        }
    }

}
