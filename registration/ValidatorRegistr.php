<?php
class Validate {
    public $listoferrors = [];
    public $data = [];

    public function __construct($datafield)
    {
        $this->data = $datafield;
    }
    public function required($field)
    {
        if (empty($this->data[$field]) ) {
            $this->listoferrors[] = 'Complete the required field' . '"' . $field . '"';

        }
    }

    public function email($field)
    {
        if (empty($this->data[$field]) ) {
            return;

        }
        if (!filter_var($this->data[$field], FILTER_VALIDATE_EMAIL)) {
            $this->listoferrors[] = "Invalid email format";
        }
    }

    public function emailminlenght($field,$lenght)
    {
        if (empty($this->data[$field]) ) {
            return;

        }
        if (strlen($this->data[$field]) < $lenght ) {
            $this->listoferrors[] = "Your email must be larger than " . $lenght . " symbols";
        }
    }
    public function getErrors()
    {
        return $this->listoferrors;
    }
    public function comparepasswords($password1, $password2)
    {
        if ($this->data[$password1] !== $this->data[$password2]) {
            $this->listoferrors[] = "Your passwords must be same";
        }
    }
    public function hasErrors()
    {
        if (count($this->listoferrors) > 0){
            return true;
        }
        else {
            return False;
        }
    }

}