<?php 
/*
Template Name: Test Booking
*/
get_header();
?>

<!-- Title Bar -->
<div class="pbmit-title-bar-wrapper">
    <div class="container">
        <div class="pbmit-title-bar-content">
            <div class="pbmit-title-bar-content-inner">
                <div class="pbmit-tbar">
                    <div class="pbmit-tbar-inner container">
                        <h1 class="pbmit-tbar-title"><?php the_title(); ?></h1>
                    </div>
                </div>
                
            </div>
        </div> 
    </div> 
</div>

		<!-- Title Bar End-->

		<!-- Page Content -->
		<div class="page-content">

			<!-- Make An Appointment Start -->
			<section class="section-xl">
    <div class="container">
        <div class="pbmit-heading-subheading text-center">
            <h4 class="pbmit-subtitle"><?php echo get_field('appointment_title') ?></h4>
            <h2 class="pbmit-title"><?php echo get_field('appintment_sub_title') ?></h2>
            <div class="pbmit-heading-desc">
               <?php echo get_field('appointment_description') ?>
            </div>
        </div>
        <div class="appointment_box">
            <h4 class="text-center mb-3">Make An Appointment</h4>
			<?php echo do_shortcode('[contact-form-7 id="7191de2" title="Contact form 1"]') ?>
            <!-- <form id="appointmentForm">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" class="form-control" placeholder="Your Name *" name="name" id="name" required>
                    </div>
                    <div class="col-md-6">
                        <input type="email" class="form-control" placeholder="Your Email *" name="email" id="email" required>
                    </div>
                    <div class="col-md-6">
                        <input type="tel" class="form-control" placeholder="Your Phone *" name="phone" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <input class="form-control wpcf7-form-control wpcf7-date wpcf7-validates-as-date" aria-invalid="false" type="date" name="date" id="date" required>
                    </div>
					<div class="col-md-6">
                        <select class="form-select form-control" name="time-slot" id="time-slot" aria-label="Choose Time Slot" required>
                            <option value="">Choose Time Slot</option>
                            <option value="08:00-09:00">08:00-09:00</option>
                            <option value="09:00-10:00">09:00-10:00</option>
                            <option value="10:00-11:00">10:00-11:00</option>
                            <option value="11:00-12:00">11:00-12:00</option>
                            <option value="12:00-13:00">12:00-13:00</option>
                            <option value="13:00-14:00">13:00-14:00</option>
                            <option value="14:00-15:00">14:00-15:00</option>
                            <option value="15:00-16:00">15:00-16:00</option>
                            <option value="16:00-17:00">16:00-17:00</option>
                            <option value="17:00-18:00">17:00-18:00</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select form-control" name="department" id="department" aria-label="Choose Department" required>
                            <option value="">Choose Department</option>
                            <option value="Cardiology">Cardiology</option>
                            <option value="Dental Care">Dental Care</option>
                            <option value="Ophthalmology">Ophthalmology</option>
                            <option value="Gastrologist">Gastrologist</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <select class="form-select form-control" name="doctor" id="doctor" aria-label="Choose Doctor" required>
                            <option value="">Choose Doctor</option>
                            <option value="Jordan Peele">Jordan Peele</option>
                            <option value="Norton Berry">Norton Berry</option>
                            <option value="Clare Smyth">Clare Smyth</option>
                            <option value="Jamie Oliver">Jamie Oliver</option>
                            <option value="Carla Hall">Carla Hall</option>
                        </select>
                    </div>
					<div class="col-md-6">
                        <select class="form-select form-control" name="appointment" id="appointment" aria-label="Choose Appointment" required>
                            <option value="">Appointment Type</option>
                            <option value="Jordan Peele">Physical</option>
                            <option value="Norton Berry">Online</option>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <textarea name="message" id="message" cols="40" rows="10" class="form-control" placeholder="Type Appointment Note...." required></textarea>
                    </div>
                    <div class="col-md-12">
                        <button class="pbmit-btn" type="submit">
                            <span class="pbmit-button-text">Submit Now</span>
                            <span class="pbmit-button-icon-wrapper">
                                <span class="pbmit-button-icon">
                                    <i class="pbmit-base-icon-black-arrow-1"></i>
                                </span>
                            </span>
                        </button>
                    </div>
                </div>
            </form> -->
        </div>
    </div>
</section>


			<!-- Make An Appointment End --> 

			
			<!-- Client End -->

		</div>
		<!-- Page Content End -->
<!-- <script>
		document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('appointmentForm');

    form.addEventListener('submit', function (event) {
        event.preventDefault();
        let isValid = true;

        // Clear previous error messages
        document.querySelectorAll('.error-message').forEach(function (el) {
            el.remove();
        });

        // Validation functions
        function showError(input, message) {
            const errorElement = document.createElement('div');
            errorElement.className = 'error-message';
            errorElement.style.color = 'red';
            errorElement.innerText = message;
            if (input.nextSibling) {
                input.parentNode.insertBefore(errorElement, input.nextSibling);
            } else {
                input.parentNode.appendChild(errorElement);
            }
            isValid = false;
        }

        function validateField(input, message) {
            if (input.value.trim() === '') {
                showError(input, message);
            }
        }

        // Validate each field
        validateField(document.getElementById('name'), 'Name is required.');
        validateField(document.getElementById('email'), 'Email is required.');
        validateField(document.getElementById('phone'), 'Phone is required.');
        validateField(document.getElementById('date'), 'Date is required.');
        validateField(document.getElementById('department'), 'Department is required.');
        validateField(document.getElementById('doctor'), 'Doctor is required.');
        validateField(document.getElementById('time-slot'), 'Time slot is required.');
		validateField(document.getElementById('appointment'), 'Appointment is required.');
        validateField(document.getElementById('message'), 'Appointment note is required.');

        // Email validation
        const email = document.getElementById('email');
        const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
        if (!emailPattern.test(email.value.trim())) {
            showError(email, 'Please enter a valid email address.');
        }

        // Phone validation
        const phone = document.getElementById('phone');
        const phonePattern = /^\d{10}$/; // Adjust pattern as per your requirements
        if (!phonePattern.test(phone.value.trim())) {
            showError(phone, 'Please enter a valid 10-digit phone number.');
        }

        if (isValid) {
            // If form is valid, submit the form
            form.submit();
        }
    });
});

</script> -->

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var phoneNumberInput = document.getElementById('phoneNumber');

        phoneNumberInput.addEventListener('input', function() {
            var inputValue = this.value.trim();
            var digitsOnly = inputValue.replace(/\D/g, ''); // Remove non-digit characters

            // Update the value with only digits
            this.value = digitsOnly;

            // Limit to minimum 10 digits
            if (digitsOnly.length < 10) {
                this.setCustomValidity('Please enter at least 10 digits.');
            } else {
                this.setCustomValidity('');
            }
        });

        phoneNumberInput.addEventListener('invalid', function() {
            if (this.value.length < 10) {
                this.setCustomValidity('Please enter at least 10 digits.');
            }
        });
    });
</script>


<?php 
 get_footer();
 ?>