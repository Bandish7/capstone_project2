<?php 
include('header.php') 
?>

<div class="form-container">
    <h2>Book an Appointment</h2>
    <form action="process.php" method="POST" class="appointment-form">
        <div class="form-group">
            <label for="first-name">First Name</label>
            <input type="text" id="first-name" name="first_name" required>
        </div>
        <div class="form-group">
            <label for="last-name">Last Name</label>
            <input type="text" id="last-name" name="last_name" required>
        </div>
        <div class="form-group">
            <label for="mobile">Mobile</label>
            <input type="tel" id="mobile" name="mobile" pattern="[0-9]{10}" placeholder="10-digit number" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="date">Appointment Date</label>
            <input type="date" id="date" name="date" required>
        </div>
        <div class="form-group">
            <label for="start-time">Select Time</label>
            <input type="time" id="time" name="time" min="09:00" max="17:00" required>
            <span style="font-size: 12px;">*Appointments are between 9:00 AM and 5:00 PM only</span>
        </div>
        <div class="form-group">
            <label for="mode">Mode of Appointment</label>
            <select id="mode" name="mode">
                <option value="Online">Online</option>
                <option value="In-person">In-person</option>
                <option value="call">Call</option>
            </select>
        </div>
        <div class="form-group">
            <label for="appointment_reason">Reason for Appointment</label>
            <select id="appointment_reason" name="appointment_reason">
                <option value="consultation">Consultation</option>
                <option value="follow-up">Follow-up</option>
                <option value="other">Other</option>
            </select>
        </div>
        <div class="form-group">
            <label for="comment">Message to Counsellor</label>
            <textarea id="comment" name="comment" rows="4" placeholder="Any additional information to counsellor"></textarea>
        </div>
        <div class="form-group">
            <button type="submit" name="submit" class="submit-btn">Submit Appointment</button>
        </div>
    </form>
</div>

<!-- JavaScript to disable past dates -->
<script>
    // Get today's date in the format YYYY-MM-DD
    let today = new Date().toISOString().split('T')[0];
    document.getElementById("date").setAttribute("min", today);
</script>

<?php include('footer.php') ?>
