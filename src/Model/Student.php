<?php
namespace Ig\IgPro\Model;

class Student {
    private $id;
    private $first_name;
    private $middle_name;
    private $last_name;
    private $email;
    private $contact;
    private $temp_state;
    private $temp_city_village;
    private $temp_tole;
    private $permanent_state;
    private $permanent_city_village;
    private $permanent_tole;
    private $guardian_name;
    private $relation;
    private $english_test_type;
    private $secured_score;
    private $reading;
    private $listening;
    private $writing;
    private $speaking;
    private $academic_level_name;
    private $institute_name;
    private $university_name;
    private $academic_score;
    private $passed_year;
    private $interested_country;
    private $about_ig;
    private $term;

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

    public function getTempState() {
        return $this->temp_state;
    }

    public function setTempState($temp_state) {
        $this->temp_state = $temp_state;
    }

    public function getTempCityVillage() {
        return $this->temp_city_village;
    }

    public function setTempCityVillage($temp_city_village) {
        $this->temp_city_village = $temp_city_village;
    }

    public function getTempTole() {
        return $this->temp_tole;
    }

    public function setTempTole($temp_tole) {
        $this->temp_tole = $temp_tole;
    }

    public function getPermanentState() {
        return $this->permanent_state;
    }

    public function setPermanentState($permanent_state) {
        $this->permanent_state = $permanent_state;
    }

    public function getPermanentCityVillage() {
        return $this->permanent_city_village;
    }

    public function setPermanentCityVillage($permanent_city_village) {
        $this->permanent_city_village = $permanent_city_village;
    }

    public function getPermanentTole() {
        return $this->permanent_tole;
    }

    public function setPermanentTole($permanent_tole) {
        $this->permanent_tole = $permanent_tole;
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

    public function getReading() {
        return $this->reading;
    }

    public function setReading($reading) {
        $this->reading = $reading;
    }

    public function getListening() {
        return $this->listening;
    }

    public function setListening($listening) {
        $this->listening = $listening;
    }

    public function getWriting() {
        return $this->writing;
    }

    public function setWriting($writing) {
        $this->writing = $writing;
    }

    public function getSpeaking() {
        return $this->speaking;
    }

    public function setSpeaking($speaking) {
        $this->speaking = $speaking;
    }

    public function getAcademicLevelName() {
        return $this->academic_level_name;
    }

    public function setAcademicLevelName($academic_level_name) {
        $this->academic_level_name = $academic_level_name;
    }

    public function getInstituteName() {
        return $this->institute_name;
    }

    public function setInstituteName($institute_name) {
        $this->institute_name = $institute_name;
    }

    public function getUniversityName() {
        return $this->university_name;
    }

    public function setUniversityName($university_name) {
        $this->university_name = $university_name;
    }

    public function getAcademicScore() {
        return $this->academic_score;
    }

    public function setAcademicScore($academic_score) {
        $this->academic_score = $academic_score;
    }

    public function getPassedYear() {
        return $this->passed_year;
    }

    public function setPassedYear($passed_year) {
        $this->passed_year = $passed_year;
    }

    public function getInterestedCountry() {
        return $this->interested_country;
    }

    public function setInterestedCountry($interested_country) {
        $this->interested_country = $interested_country;
    }

    public function getAboutIg() {
        return $this->about_ig;
    }

    public function setAboutIg($about_ig) {
        $this->about_ig = $about_ig;
    }

    public function getTerm() {
        return $this->term;
    }

    public function setTerm($term) {
        $this->term = $term;
    }
}
