
        function validateForm() {
            const mobile = document.getElementById('mobile').value;
            const time = document.getElementById('time').value;
            const checkboxes = document.querySelectorAll('input[name="appointment_mode"]:checked');

            if (mobile.length !== 10) {
                alert("Please enter a valid 10-digit mobile number.");
                return false;
            }

            if (checkboxes.length === 0) {
                alert("Please select at least one mode of appointment (Online or In-person).");
                return false;
            }

            const selectedTime = new Date(`1970-01-01T${time}:00Z`);
            const startTime = new Date("1970-01-01T09:00:00Z");
            const endTime = new Date("1970-01-01T17:00:00Z");

            if(selectedTime < startTime || selectedTime > endTime) {
                alert("Appointment time must be between 9:00 AM and 5:00 PM.");
                return false;
            }

            return true;
        }

         // Function to open modal
         function openModal(modalId) {
            document.getElementById(modalId).style.display = "block";
        }

        // Function to close modal
        function closeModal(modalId) {
            document.getElementById(modalId).style.display = "none";
        }

        // Close modal when clicking outside the modal content
        window.onclick = function(event) {
            let modals = document.getElementsByClassName("modal");
            for (let i = 0; i < modals.length; i++) {
                if (event.target == modals[i]) {
                    modals[i].style.display = "none";
                }
            }
        }
       
    function logout() {
        // Display the message and redirect to another page
        alert("You have been logged out successfully.");
        window.location.href = "login.php"; // Replace with your target page URL
    }
