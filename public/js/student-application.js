$(document).ready(function(){
    // email validation
    $('#email').on('blur', function() {
        var email = $(this).val();

        $.ajax({
            url: '/check-email-availability/', // Replace with your validation endpoint
            type: 'POST',
            data: { email: email },
            dataType: 'json',
            success: function(response) {
                // Access properties and handle response
                if (response.isEmailAvailable === "Yes") {
                    $('#email').removeClass('is-invalid').addClass('is-valid');
                    $('#email-error').text(''); // Clear any previous error messages
                } else {
                    $('#email').removeClass('is-valid').addClass('is-invalid');
                    $('#email-error').text('Email is available.'); // Show error message
                }
            },
            error: function(xhr, status, error) {
                $('#email-error').text('An error occurred. Please try again.');
            }
        });
    });


    $('#applicationForm').validate({
        rules: {
            first_name: {
                required: true,
                minlength: 2
            },
            last_name: {
                required: true,
                minlength: 2
            },
            email: {
                required: true,
                email: true
            },
            contact: {
                required: true,
                minlength: 8
            },
            temp_state: {
                required: true,
                minlength: 3,
            },
            temp_city_village: {
                required: true,
                minlength: 3,
            },
            temp_tole: {
                required: true,
                minlength: 3,
            },
            permanent_state: {
                required: true,
                minlength: 3,
            },
            permanent_city_village: {
                required: true,
                minlength: 3,
            },
            permanent_tole: {
                required: true,
                minlength: 3,
            },
            guardian_name: {
                required: true,
                minlength: 3,
            },
            relation: {
                required: true,
                minlength: 2
            },
            secured_score: {
                required: true,
            },
            reading: {
                required: true,
            },
            listening: {
                required: true,
            },
            writing: {
                required: true,
            },
            speaking: {
                required: true,
            },
            academic_level_name: {
                required: true,
                minlength: 3,
            },
            institute_name: {
                required: true,
                minlength: 3,
            },
            university_name: {
                required: true,
                minlength: 3,
            },
            academic_score: {
                required: true,
                minlength: 3,
            },
            passed_year: {
                required: true,
                minlength: 3,
            },
            about_ig: {
                required: true,
                minlength: 3,
            },
            term: {
                required: true,
            }
        },
        messages: {
            first_name: {
                required: "Please enter first name",
                minlength: "Your first name must be at least 2 characters long"
            },
            last_name: {
                required: "Please enter last name",
                minlength: "Your first name must be at least 2 characters long"
            },
            email: {
                required: "Please enter your email address",
                email: "Please enter a valid email address"
            },
            contact: {
                required: "Please enter contact",
                minlength: "Your first name must be at least 8 characters long"
            },
            temp_state: {
                required: "Please enter temporary state",
                minlength: "Your first name must be at least 3 characters long",
            },
            temp_city_village: {
                required: "Please enter city village",
                minlength: "Your first name must be at least 3 characters long",
            },
            temp_tole: {
                required: "Please enter temporary tole",
                minlength: "Your first name must be at least 3 characters long",
            },
            permanent_state: {
                required: "Please enter permanent state",
                minlength: "Your first name must be at least 3 characters long",
            },
            permanent_city_village: {
                required: "Please enter permanent city/village",
                minlength: "Your first name must be at least 3 characters long",
            },
            permanent_tole: {
                required: "Please enter permanent tole",
                minlength: "Your first name must be at least 3 characters long",
            },
            guardian_name: {
                required: "Please enter guardian name",
                minlength: "Your first name must be at least 3 characters long",
            },
            relation: {
                required: "Please enter relationship",
                minlength: "Your first name must be at least 2 characters long"
            },
            secured_score: {
                required: "Please enter secured score",
            },
            reading: {
                required: "Please enter reading score",
            },
            listening: {
                required: "Please enter listening score",
            },
            writing: {
                required: "Please enter writing score",
            },
            speaking: {
                required: "Please enter speaking score",
            },
            academic_level_name: {
                required: "Please enter academic level name",
                minlength: "Your first name must be at least 3 characters long",
            },
            institute_name: {
                required: "Please enter institution name",
                minlength: "Your first name must be at least 3 characters long",
            },
            university_name: {
                required: "Please enter university name",
                minlength: "Your first name must be at least 3 characters long",
            },
            academic_score: {
                required: "Please enter academic score",
                minlength: "Your first name must be at least 3 characters long",
            },
            passed_year: {
                required: "Please enter passed year",
                minlength: "Your first name must be at least 3 characters long",
            },
            about_ig: {
                required: "Please enter how you know about us?",
                minlength: "Your first name must be at least 3 characters long",
            },
            term: {
                required: "Please accept the term",
            }
        },
        highlight: function(element) {
            $(element).removeClass('is-valid').addClass('is-invalid');
        },
        unhighlight: function(element) {
            $(element).removeClass('is-invalid').addClass('is-valid');
        },
        submitHandler: function (form) {

            // Collect checked values
            var interestedCountry = [];
            $('input[name="interested_country[]"]:checked').each(function() {
                interestedCountry.push($(this).val());
            });

            let isTermAccepted = $('#term').is(':checked') ? 1 : 0;

            // Add checked values to form data
            var formData = $(form).serializeArray();
            formData.push({ name: 'interested_country', value: JSON.stringify(interestedCountry)});
            formData.push({ name: 'is_rule_accept', value: isTermAccepted });
            
            // Show the loader
            $('#loader').show();

            $.ajax({
                url: '/create-std-application/', // Replace with your server endpoint
                type: 'POST',
                data: $.param(formData),
                dataType: 'json',
                success: function(response) {
                    $('#loader').hide();
                    // Show a success message using Toastr
                    toastr.success('Your operation was successful!', 'Success');

                    // Redirect after a short delay (e.g., 3 seconds)
                    setTimeout(function() {
                        window.location.href = 'https://irongate.edu.np/'; // Replace with your target URL
                    }, 3000); // 3000 milliseconds = 3 seconds
                },
                error: function(xhr, status, error) {
                    $('#loader').hide();
                    toastr.error('There was an error submitting the data.', 'Error');
                }
            });
        }
    });
});