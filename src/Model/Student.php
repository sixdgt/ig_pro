<?php
namespace Ig\IgPro\Model;

class Student {
    private $id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $email;
    private $contact;
    private $temp_address;
    private $permanent_address;
    private $guardian_name;
    private $relation;
    private $english_test_type;
    private $secured_score;
    private $each_band_score;
    private $academic_level;
    private $interested_country;
    private $about_ig;
    private $is_rule_accept;

    // Getters and Setters
    public function getId() {
        return $this->id;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function getFirstName() {
        return $this->first_name;
    }

    public function setFirstName($first_name) {
        $this->first_name = $first_name;
    }

    public function getMiddleName() {
        return $this->middle_name;
    }

    public function setMiddleName($middle_name) {
        $this->middle_name = $middle_name;
    }

    public function getLastName() {
        return $this->last_name;
    }

    public function setLastName($last_name) {
        $this->last_name = $last_name;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getContact() {
        return $this->contact;
    }

    public function setContact($contact) {
        $this->contact = $contact;
    }

    public function getTemporaryAddress() {
        return json_decode($this->temp_address, true);
    }

    public function setTemporaryAddress($data) {
        $this->temp_address = json_encode($data);
    }

    public function getPermanentAddress() {
        return json_decode($this->permanent_address, true);
    }

    public function setPermanentAddress($data) {
        $this->permanent_address = json_encode($data);
    }

    public function getGuardianName() {
        return $this->guardian_name;
    }

    public function setGuardianName($guardian_name) {
        $this->guardian_name = $guardian_name;
    }

    public function getRelation() {
        return $this->relation;
    }

    public function setRelation($relation) {
        $this->relation = $relation;
    }

    public function getEnglishTestType() {
        return $this->english_test_type;
    }

    public function setEnglishTestType($english_test_type) {
        $this->english_test_type = $english_test_type;
    }

    public function getSecuredScore() {
        return $this->secured_score;
    }

    public function setSecuredScore($secured_score) {
        $this->secured_score = $secured_score;
    }

    public function getAcademicLevel()
    {
        return json_decode($this->academic_level, true);
    }

    public function setAcademicLevel($data)
    {
        $this->academic_level = json_encode($data);
    }

    public function getEachBandScore()
    {
        return json_decode($this->each_band_score, true);
    }

    public function setEachBandScore($data)
    {
        $this->each_band_score = json_encode($data);
    }
    
    public function getInterestedCountry() {
        return json_decode($this->interested_country, true);
    }

    public function setInterestedCountry($data) {
        $this->interested_country = json_encode($data);
    }

    public function getAboutIg() {
        return $this->about_ig;
    }

    public function setAboutIg($about_ig) {
        $this->about_ig = $about_ig;
    }

    public function getTerm() {
        return $this->is_rule_accept;
    }

    public function setTerm($is_rule_accept) {
        $this->is_rule_accept = $is_rule_accept;
    }
}
