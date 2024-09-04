<?php
namespace Ig\IgPro\Controller;

use Ig\IgPro\Dao\Impl\StudentDAOImpl;
use Ig\IgPro\Dao\StudentDAO;
use Ig\IgPro\Model\Student;
use Ig\IgPro\View\View;

class StudentController {
    private $studentDAO;

    public function __construct() {
        $this->studentDAO = new StudentDAOImpl();
    }

    public function index() {
        require __DIR__ . '/../View/students/create_student.php';
    }

    public function checkEmailAvailability() {
        $email = $_POST['email'];
        $std = new Student();
        $std->setEmail($email);
        $isEmailAvailable = $this->studentDAO->getStudentByEmail($std);
        echo json_encode(['isEmailAvailable' => $isEmailAvailable == null ? "Yes": "No"]);
    }

    public function showAllStudents() {
        $students = $this->studentDAO->getAllStudents();
        View::render('students/index', ['students' => $students]);
    }

    public function showStudent($id) {
        $student = $this->studentDAO->getStudentById(new Student($id));
        if ($student) {
            View::render('students/show', ['student' => $student]);
        } else {
            View::render('404');
        }
    }

    public function createStudent() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $academic_level = [
                'academic_level_name' => $_POST['academic_level_name'],
                'institute_name' => $_POST['institute_name'],
                'university_name' => $_POST['university_name'],
                'academic_score' => $_POST['academic_score'],
                'passed_year' => $_POST['passed_year']
            ];

            $each_band_score = [
                'reading' => $_POST['reading'],
                'listening' => $_POST['listening'],
                'writing' => $_POST['writing'],
                'speaking' => $_POST['speaking']
            ];
            
            $temp_address = [
                'temp_state' => $_POST['temp_state'],
                'temp_city_village' => $_POST['temp_city_village'],
                'temp_tole' => $_POST['temp_tole']
            ];

            $permanent_address = [
                'permanent_state' => $_POST['permanent_state'],
                'permanent_city_village' => $_POST['permanent_city_village'],
                'permanent_tole' => $_POST['permanent_tole']
            ];

            $student = new Student();
            $student->setFirstName($_POST['first_name']);
            $student->setMiddleName($_POST['middle_name']);
            $student->setLastName($_POST['last_name']);
            $student->setEmail($_POST['email']);
            $student->setContact($_POST['contact']);
            $student->setTemporaryAddress(json_encode($temp_address));
            $student->setPermanentAddress(json_encode($permanent_address));
            $student->setGuardianName($_POST['guardian_name']);
            $student->setRelation($_POST['relation']);
            $student->setEnglishTestType($_POST['english_test_type']);
            $student->setSecuredScore($_POST['secured_score']);
            $student->setEachBandScore(json_encode($each_band_score));
            $student->setAcademicLevel(json_encode($academic_level));
            $student->setInterestedCountry(json_encode($_POST['interested_country']));
            $student->setAboutIg(json_encode($_POST['about_ig']));
            $student->setTerm($_POST['is_rule_accept']);
            
            header('Content-Type: application/json');
            if ($this->studentDAO->createStudent($student)) {
                $response = [
                    'status' => 'success',
                    'code' => 201,
                    'data' => json_encode($student),
                    'message' => 'Application submitted successfully!'
                ];
                echo json_encode($response);
            } else {
                $response = [
                    'status' => 'fail',
                    'code' => 401,
                    'message' => 'Failed submit the application!!'
                ];
                echo json_encode($response);
            }
        } else {
            $response = [
                'status' => 'Bad Request',
                'code' => 403,
                'message' => 'Bad request!!'
            ];
            echo json_encode($response);
        }
    }

    public function updateStudent($id) {
        $student = $this->studentDAO->getStudentById(new Student($id));
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $student->setFirstName($_POST['first_name']);
            $student->setMiddleName($_POST['middle_name']);
            $student->setLastName($_POST['last_name']);
            $student->setEmail($_POST['email']);
            $student->setContact($_POST['contact']);
            $student->setTempState($_POST['temp_state']);
            $student->setTempCityVillage($_POST['temp_city_village']);
            $student->setTempTole($_POST['temp_tole']);
            $student->setPermanentState($_POST['permanent_state']);
            $student->setPermanentCityVillage($_POST['permanent_city_village']);
            $student->setPermanentTole($_POST['permanent_tole']);
            $student->setGuardianName($_POST['guardian_name']);
            $student->setRelation($_POST['relation']);
            $student->setEnglishTestType($_POST['english_test_type']);
            $student->setSecuredScore($_POST['secured_score']);
            $student->setReading($_POST['reading']);
            $student->setListening($_POST['listening']);
            $student->setWriting($_POST['writing']);
            $student->setSpeaking($_POST['speaking']);
            $student->setAcademicLevelName($_POST['academic_level_name']);
            $student->setInstituteName($_POST['institute_name']);
            $student->setUniversityName($_POST['university_name']);
            $student->setAcademicScore($_POST['academic_score']);
            $student->setPassedYear($_POST['passed_year']);
            $student->setInterestedCountry($_POST['interested_country']);
            $student->setAboutIg($_POST['about_ig']);
            $student->setTerm($_POST['term']);
            
            if ($this->studentDAO->updateStudent($student)) {
                header('Location: /students');
                exit();
            } else {
                View::render('students/edit', ['student' => $student, 'error' => 'Failed to update student.']);
            }
        } else {
            View::render('students/edit', ['student' => $student]);
        }
    }

    public function deleteStudent($id) {
        $student = $this->studentDAO->getStudentById(new Student($id));
        if ($student) {
            if ($this->studentDAO->deleteStudent($student)) {
                header('Location: /students');
                exit();
            } else {
                View::render('students/show', ['student' => $student, 'error' => 'Failed to delete student.']);
            }
        } else {
            View::render('404');
        }
    }
}
