<?php
class FormInfoClass {
    private $lastName;
    private $firstName;
    private $middleInitial;
    private $age;
    private $contactNo;
    private $email;
    private $address;

    public function setLastName($lastName) {
        $this->lastName = $lastName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
    }

    public function setMiddleInitial($middleInitial) {
        $this->middleInitial = $middleInitial;
    }

    public function setAge($age) {
        $this->age = $age;
    }

    public function setContactNo($contactNo) {
        $this->contactNo = $contactNo;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setAddress($address) {
        $this->address = $address;
    }

    public function getLastName() {
        return $this->lastName;
    }

    public function getFirstName() {
        return $this->firstName;
    }

    public function getMiddleInitial() {
        return $this->middleInitial;
    }

    public function getAge() {
        return $this->age;
    }

    public function getContactNo() {
        return $this->contactNo;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getAddress() {
        return $this->address;
    }
}
?>
