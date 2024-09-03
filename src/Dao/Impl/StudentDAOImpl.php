<?php
namespace Ig\IgPro\Dao\Impl;

use Ig\IgPro\Dao\StudentDAO;
use Ig\IgPro\Model\Student;
use Ig\IgPro\Database\Database;
use PDO;

class StudentDAOImpl implements StudentDAO {
    private $pdo;

    public function __construct() {
        $this->pdo = Database::getInstance()->getPdo();
    }

    public function getStudentById(Student $student) {
        $stmt = $this->pdo->prepare('SELECT * FROM visitors WHERE id = :id');
        $stmt->bindValue(':id', $student->getId(), PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $this->mapRowToStudent($result) : null;
    }

    public function getAllStudents() {
        $stmt = $this->pdo->query('SELECT * FROM visitors');
        $students = [];
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $students[] = $this->mapRowToStudent($row);
        }
        return $students;
    }

    public function createStudent(Student $student) {
        $stmt = $this->pdo->prepare('INSERT INTO visitors (first_name, middle_name, last_name, email, contact, temp_state, temp_city_village, temp_tole, permanent_state, permanent_city_village, permanent_tole, guardian_name, relation, english_test_type, secured_score, reading, listening, writing, speaking, academic_level_name, institute_name, university_name, academic_score, passed_year, interested_country, about_ig, term) VALUES (:first_name, :middle_name, :last_name, :email, :contact, :temp_state, :temp_city_village, :temp_tole, :permanent_state, :permanent_city_village, :permanent_tole, :guardian_name, :relation, :english_test_type, :secured_score, :reading, :listening, :writing, :speaking, :academic_level_name, :institute_name, :university_name, :academic_score, :passed_year, :interested_country, :about_ig, :term)');
        
        $academic_level = [
            'academic_level_name' => $this->academic_level_name,
            'institute_name' => $this->institute_name,
            'university_name' => $this->university_name,
            'academic_score' => $this->academic_score,
            'passed_year' => $this->passed_year,
        ];

        $each_band_score = [
            'reading' => $this->reading,
            'listening' => $this->listening,
            'writing' => $this->writing,
            'speaking' => $this->speaking
        ];
        

        $academic_level_json = json_encode($academic_level);
        $each_band_score_json = json_encode($each_band_score);

        $stmt->bindValue(':first_name', $student->getFirstName());
        $stmt->bindValue(':middle_name', $student->getMiddleName());
        $stmt->bindValue(':last_name', $student->getLastName());
        $stmt->bindValue(':email', $student->getEmail());
        $stmt->bindValue(':contact', $student->getContact());
        $stmt->bindValue(':temp_state', $student->getTempState());
        $stmt->bindValue(':temp_city_village', $student->getTempCityVillage());
        $stmt->bindValue(':temp_tole', $student->getTempTole());
        $stmt->bindValue(':permanent_state', $student->getPermanentState());
        $stmt->bindValue(':permanent_city_village', $student->getPermanentCityVillage());
        $stmt->bindValue(':permanent_tole', $student->getPermanentTole());
        $stmt->bindValue(':guardian_name', $student->getGuardianName());
        $stmt->bindValue(':relation', $student->getRelation());
        $stmt->bindValue(':english_test_type', $student->getEnglishTestType());
        $stmt->bindValue(':secured_score', $student->getSecuredScore());
        $stmt->bindValue(':reading', $student->getReading());
        $stmt->bindValue(':listening', $student->getListening());
        $stmt->bindValue(':writing', $student->getWriting());
        $stmt->bindValue(':speaking', $student->getSpeaking());
        $stmt->bindValue(':academic_level_name', $student->getAcademicLevelName());
        $stmt->bindValue(':institute_name', $student->getInstituteName());
        $stmt->bindValue(':university_name', $student->getUniversityName());
        $stmt->bindValue(':academic_score', $student->getAcademicScore());
        $stmt->bindValue(':passed_year', $student->getPassedYear());
        $stmt->bindValue(':interested_country', $student->getInterestedCountry());
        $stmt->bindValue(':about_ig', $student->getAboutIg());
        $stmt->bindValue(':term', $student->getTerm());
        
        return $stmt->execute();
    }

    public function updateStudent(Student $student) {
        $stmt = $this->pdo->prepare('UPDATE visitors SET first_name = :first_name, middle_name = :middle_name, last_name = :last_name, email = :email, contact = :contact, temp_state = :temp_state, temp_city_village = :temp_city_village, temp_tole = :temp_tole, permanent_state = :permanent_state, permanent_city_village = :permanent_city_village, permanent_tole = :permanent_tole, guardian_name = :guardian_name, relation = :relation, english_test_type = :english_test_type, secured_score = :secured_score, reading = :reading, listening = :listening, writing = :writing, speaking = :speaking, academic_level_name = :academic_level_name, institute_name = :institute_name, university_name = :university_name, academic_score = :academic_score, passed_year = :passed_year, interested_country = :interested_country, about_ig = :about_ig, term = :term WHERE id = :id');
        
        $stmt->bindValue(':first_name', $student->getFirstName());
        $stmt->bindValue(':middle_name', $student->getMiddleName());
        $stmt->bindValue(':last_name', $student->getLastName());
        $stmt->bindValue(':email', $student->getEmail());
        $stmt->bindValue(':contact', $student->getContact());
        $stmt->bindValue(':temp_state', $student->getTempState());
        $stmt->bindValue(':temp_city_village', $student->getTempCityVillage());
        $stmt->bindValue(':temp_tole', $student->getTempTole());
        $stmt->bindValue(':permanent_state', $student->getPermanentState());
        $stmt->bindValue(':permanent_city_village', $student->getPermanentCityVillage());
        $stmt->bindValue(':permanent_tole', $student->getPermanentTole());
        $stmt->bindValue(':guardian_name', $student->getGuardianName());
        $stmt->bindValue(':relation', $student->getRelation());
        $stmt->bindValue(':english_test_type', $student->getEnglishTestType());
        $stmt->bindValue(':secured_score', $student->getSecuredScore());
        $stmt->bindValue(':reading', $student->getReading());
        $stmt->bindValue(':listening', $student->getListening());
        $stmt->bindValue(':writing', $student->getWriting());
        $stmt->bindValue(':speaking', $student->getSpeaking());
        $stmt->bindValue(':academic_level_name', $student->getAcademicLevelName());
        $stmt->bindValue(':institute_name', $student->getInstituteName());
        $stmt->bindValue(':university_name', $student->getUniversityName());
        $stmt->bindValue(':academic_score', $student->getAcademicScore());
        $stmt->bindValue(':passed_year', $student->getPassedYear());
        $stmt->bindValue(':interested_country', $student->getInterestedCountry());
        $stmt->bindValue(':about_ig', $student->getAboutIg());
        $stmt->bindValue(':term', $student->getTerm());
        $stmt->bindValue(':id', $student->getId(), PDO::PARAM_INT);
        
        return $stmt->execute();
    }

    public function deleteStudent(Student $student) {
        $stmt = $this->pdo->prepare('DELETE FROM visitors WHERE id = :id');
        $stmt->bindValue(':id', $student->getId(), PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function getStudentByEmail(Student $student) {
        $stmt = $this->pdo->prepare('SELECT * FROM visitors WHERE email = :email');
        $stmt->bindValue(':email', $student->getEmail());
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result ? $this->mapRowToStudent($result) : null;
    }

    private function mapRowToStudent(array $row) {
        $student = new Student();
        $student->setId($row['id']);
        $student->setFirstName($row['first_name']);
        $student->setMiddleName($row['middle_name']);
        $student->setLastName($row['last_name']);
        $student->setEmail($row['email']);
        $student->setContact($row['contact']);
        $student->setTempState($row['temp_state']);
        $student->setTempCityVillage($row['temp_city_village']);
        $student->setTempTole($row['temp_tole']);
        $student->setPermanentState($row['permanent_state']);
        $student->setPermanentCityVillage($row['permanent_city_village']);
        $student->setPermanentTole($row['permanent_tole']);
        $student->setGuardianName($row['guardian_name']);
        $student->setRelation($row['relation']);
        $student->setEnglishTestType($row['english_test_type']);
        $student->setSecuredScore($row['secured_score']);
        $student->setReading($row['reading']);
        $student->setListening($row['listening']);
        $student->setWriting($row['writing']);
        $student->setSpeaking($row['speaking']);
        $student->setAcademicLevelName($row['academic_level_name']);
        $student->setInstituteName($row['institute_name']);
        $student->setUniversityName($row['university_name']);
        $student->setAcademicScore($row['academic_score']);
        $student->setPassedYear($row['passed_year']);
        $student->setInterestedCountry($row['interested_country']);
        $student->setAboutIg($row['about_ig']);
        $student->setTerm($row['term']);
        return $student;
    }
}