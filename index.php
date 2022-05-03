<?php

class MyGroup{
    public $name;
    public $age;
    public $gender;
    
    public function __construct($name, $age, $gender) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }

    public function __get($key) {
        return $this->$key;
    }
}

$firstMember = new MyGroup(name: 'Max', age: 32, gender: 'male');

echo $firstMember->name . "<br>";
echo $firstMember->age . "<br>";
echo $firstMember->gender . "<br>";

$nextMember = new MyGroup(name: 'Katya', age: 30, gender: 'female');

echo $nextMember->name . "<br>";
echo $nextMember->age . "<br.";
echo $nextMember->gender . "<br>";

$nextMore = new MyGroup(name: 'Anya', age: 17, gender: 'female');

echo $nextMore->name . "<br>";
echo $nextMore->age . "<br>";
echo $nextMore->gender . "<br>";

$andNextMore = new MyGroup(name: 'Neit', age: 145, gender: 'male');

echo $andNextMore->name . "<br>";
echo $andNextMore->age . "<br>";
echo $andNextMore->gender . "<br>";
