<?php

class User {
  public $firstName;
  public $lastName;
  
  public function __construct(string $firstName, string $lastName) {
    $this->firstName = $firstName;
    $this->lastName = $lastName;
  }

  public function getFullName() {
    return $this->firstName.' '.$this->lastName;
  }

  public function print(string $text) {
    echo $text;
  }
}

$guest = new User(/*firstName*/'Ahmad', /*lastName*/'Karimzade');
$guestFullName = $guest->getFullName();

$guest->print($guestFullName);