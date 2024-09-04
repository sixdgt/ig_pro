<?php
include __DIR__ . '/../layouts/header.php';
?>
<section class="container-fluid">
    <div class="row">
        <div class="col-md-12 p-5">
            <div class="card shadow-lg">
                <div class="card-header bg-secondary text-white border-0">
                    <h2 class="card-title">Student Application Form</h1>
                </div>
                <div class="card-body">
                    <div id="loader" style="display:none;">
                        <!-- Simple CSS spinner -->
                        <div class="spinner" role="status">
                            <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    <form action="#" method="POST" id="applicationForm">
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="first_name">First Name:</label>
                                <input type="text" class="form-control" id="first_name" name="first_name">
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="middle_name">Middle Name:</label>
                                <input type="text" class="form-control" id="middle_name" name="middle_name">
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="last_name">Last Name:</label>
                                <input type="text" class="form-control" id="last_name" name="last_name">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="email">Email:</label>
                                <input type="email" class="form-control" id="email" name="email">
                                <span id="email-error"></span>
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="contact">Contact:</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="mb-3">Temporary Address:</label>
                            <div class="row mt-3">
                                <div class="form-group col">
                                    <label for="temp_state">State/Province:</label>
                                    <input type="text" class="form-control" id="temp_state" name="temp_state">
                                </div>
                                <div class="form-group col">
                                    <label for="temp_city_village">City/Village:</label>
                                    <input type="text" class="form-control" id="temp_city_village" name="temp_city_village">
                                </div>
                                <div class="form-group col">
                                    <label for="temp_tole">Tole/Chowk:</label>
                                    <input type="text" class="form-control" id="temp_tole" name="temp_tole">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="mb-3">Permanent Address:</label>
                            <div class="row mt-3">
                                <div class="form-group col">
                                    <label for="permanent_state">State/Province:</label>
                                    <input type="text" class="form-control" id="permanent_state" name="permanent_state">
                                </div>
                                <div class="form-group col">
                                    <label for="permanent_city_village">City/Village:</label>
                                    <input type="text" class="form-control" id="permanent_city_village" name="permanent_city_village">
                                </div>
                                <div class="form-group col">
                                    <label for="permanent_tole">Tole/Chowk:</label>
                                    <input type="text" class="form-control" id="permanent_tole" name="permanent_tole">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="guardian_name">Guardian Name:</label>
                                <input type="text" class="form-control" id="guardian_name" name="guardian_name">
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="relation">Relation:</label>
                                <input type="text" class="form-control" id="relation" name="relation">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group mb-4 col">
                                <label for="english_test_type">English Test Type:</label>
                                <select name="english_test_type" id="english_test_type"  class="form-control">
                                    <option value="IELTS" class="form-control">IELTS</option>
                                    <option value="PTE" class="form-control">PTE</option>
                                    <option value="TOEFL" class="form-control">TOEFL</option>
                                </select>
                            </div>
                            <div class="form-group mb-4 col">
                                <label for="secured_score">Secured Score:</label>
                                <input type="number" class="form-control" id="secured_score" name="secured_score">
                            </div>
                            <div class="row">
                                <div class="form-group mb-4 col">
                                    <label for="reading">Reading:</label>
                                    <input type="number" class="form-control" id="reading" name="reading">
                                </div>
                                <div class="form-group mb-4 col">
                                    <label for="listening">Listening:</label>
                                    <input type="number" class="form-control" id="listening" name="listening">
                                </div>
                                <div class="form-group mb-4 col">
                                    <label for="writing">Writing:</label>
                                    <input type="number" class="form-control" id="writing" name="writing">
                                </div>
                                <div class="form-group mb-4 col">
                                    <label for="speaking">Speaking:</label>
                                    <input type="number" class="form-control" id="speaking" name="speaking">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="academic_level">Academic Level:</label>
                            <button type="button" class="btn btn-success">Add Academic</button>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="academic_level_name">Academic Level:</label>
                                    <input type="text" class="form-control" id="academic_level_name" name="academic_level_name">
                                </div>
                                <div class="form-group col">
                                    <label for="institute_name">Institute/College Name:</label>
                                    <input type="text" class="form-control" id="institute_name" name="institute_name">
                                </div>
                                <div class="form-group col">
                                    <label for="university_name">Board/University Name:</label>
                                    <input type="text" class="form-control" id="university_name" name="university_name">
                                </div>
                                <div class="form-group col">
                                    <label for="academic_score">Academic (%, GPA):</label>
                                    <input type="text" class="form-control" id="academic_score" name="academic_score">
                                </div>
                                <div class="form-group col">
                                    <label for="passed_year">Passed Year:</label>
                                    <input type="number" class="form-control" id="passed_year" name="passed_year">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="interested_country">Interested Country:</label>
                            <div class="row">
                                <div class="col">
                                    1. <label for="uk">UK:</label>
                                    <input type="checkbox" name="interested_country[]" value="UK" id="uk">
                                </div>
                                <div class="col">
                                    2. <label for="usa">USA:</label>
                                    <input type="checkbox" name="interested_country[]" value="USA" id="usa">
                                </div>
                                <div class="col">
                                    3. <label for="canada">Canada:</label>
                                    <input type="checkbox" name="interested_country[]" value="Canada" id="canada">
                                </div>
                                <div class="col">
                                    4. <label for="australia">Australia:</label>
                                    <input type="checkbox" name="interested_country[]" value="Australia" id="australia">
                                </div>
                                <div class="col">
                                    5. <label for="france">France:</label>
                                    <input type="checkbox" name="interested_country[]" value="France" id="france">
                                </div>
                                <div class="col">
                                    6. <label for="denmark">Denmark:</label>
                                    <input type="checkbox" name="interested_country[]" value="Denmark" id="denmark">
                                </div>
                                <div class="col">
                                    7. <label for="germany">Germany:</label>
                                    <input type="checkbox" name="interested_country[]" value="Germany" id="germany">
                                </div>
                                <div class="col">
                                    8. <label for="india">India:</label>
                                    <input type="checkbox" name="interested_country[]" value="India" id="india">
                                </div>
                                <div class="col">
                                    9. <label for="japan">Japan:</label>
                                    <input type="checkbox" name="interested_country[]" value="Japan" id="japan">
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="about_ig">How do you know about Iron Gate?</label>
                            <input type="text" class="form-control" id="about_ig" name="about_ig">
                        </div>
                        <div class="form-group mb-4">
                            <label for="term">Accept the Terms & Conditions:</label>
                            <input type="checkbox" name="term" id="term">
                            <div class="card p-3 mt-3">
                                <h5>Rules & Regulations:</h5>
                                <ol>
                                    <li>IELTS/Service Fee is non-refundable in any circumstances. We will not be compelled to refund to the students who discontinue their class/process themselves.
                                    P</li>
                                    <li>Any student, who breaks or damages an Institution's property they will be fined the maximum up to
                                    the actual cost of that,</li>
                                    <li>
                                    Finally, I understand that the counselling of IGIES and the institute as an entity are not responsible for the failure to procure admissions or scholarships to any institution or visa rejection by the concerned embassy. I also realize that 1 am not eligible for reimbursement of any deposit paid to IGIES under any circumstances.
                                    </li>
                                </ol>
                                <h5>I promise to abide by the rules and regulations of the institution until I remain a part of it.</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary col-6">Submit</input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
include __DIR__ . '/../layouts/footer.php';
?>
<!-- external js -->
<script src="/../../public/js/student-application.js"></script>
    
