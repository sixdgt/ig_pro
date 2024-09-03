<?php
namespace Ig\IgPro\Dao;

use Ig\IgPro\Model\Student;

interface StudentDAO {
    public function getStudentById(Student $student);
    public function getAllStudents();
    public function createStudent(Student $student);
    public function updateStudent(Student $student);
    public function deleteStudent(Student $student);
    public function getStudentByEmail(Student $student);
}