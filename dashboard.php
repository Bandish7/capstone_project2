<?php
session_start();

include("dbconnection.php");
include("functions.php");

$user_data = check_login($conn);

?>


<!DOCTYPE html>
<html>

<head>
  <title>HogHeaven - Admin Portal</title>
  <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/admin.css">
  <script src="./assets/js/app.js" defer></script>
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-regular.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-light.css">


</head>

<body>
  <header>

    <nav>
      <div class="topbar">
        <div class="logo">
          <img src="./assets/images/Logo.png" alt="HogHeaven Logo">
        </div>
        <div class="user">
          <p class="username"><?php echo $user_data['user_name']; ?> <br>
            <span class="role">Admin</span>
          </p>
          <img class="avatar" src="./assets/images/android-chrome-192x192.png" alt="avatar">
          <button style="background-color: #B51F60; border:none; border-radius:5px;padding:10px; color:white;" onclick="logout()">Logout</button>
        </div>
      </div>

      <div class="bottombar">
        <ul class="menu">
          <li><a href="dashboard.php" class="active">Dashboard</a></li>
          <li><a href="counsellor.php">Counsellor</a></li>
          <li><a href="patient.php">Patients</a></li>
          <li><a href="appointments.php">Appointments</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
    <!-- Side Nav menus -->
    <!-- Greetings Bar Start -->
    <div class="greetings-wrapper">
      <div class="greetings">
        <h2>Good Morning, <span class="primary-status"><?php echo $user_data['user_name']; ?> </span></h2>
        <p class="status">Have a nice day</p>
      </div>
    </div>
    <!-- Greetings Bar End -->

    <div class="status-card-wrapper">
      <div class="status-card-inside">
        <div class="status-card">
          <i class="fa-duotone fa-solid fa-calendar-clock "></i>
          <h6 class="status-number">2</h6>
          <p class="status-title">Appointments</p>
        </div>
        <div class="status-card">
        <i class="fa-duotone fa-solid fa-user-doctor"></i>
          <h6 class="status-number">9</h6>
          <p class="status-title">Counsellor</p>
        </div>
        <div class="status-card">
        <i class="fa-duotone fa-solid fa-users-medical"></i>
          <h6 class="status-number">2</h6>
          <p class="status-title">Patients</p>
        </div>
        <div class="status-card">
          <i class="fa-duotone fa-solid fa-calendar-clock "></i>
          <h6 class="status-number">5</h6>
          <p class="status-title">Appointments</p>

        </div>
      </div>
    </div>
<!-- Upcmoning appointments Table -->
    <div class="patients-table">
      <div class="table-container">
        <p class="table-title">Upcoming Appointments</p>
        <table>
          <thead>
            <th>Ref No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Date</th>
            <th>Time</th>
            <th>Mode</th>
            <th>Reason</th>
            <th>Comment</th>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM appointments";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
                      <td>" . $row["id"] . "</td>
                      <td>" . $row["fname"] . "</td>
                      <td>" . $row["lname"] . "</td>
                      <td>" . $row["mobile"] . "</td>
                      <td>" . $row["email"] . "</td>
                      <td>" . $row["date"] . "</td>
                      <td>" . $row["time"] . "</td>
                      <td><button class='" . getModeClass($row["mode"])  . "'>" . $row["mode"] . "</button></td>
                     <td>" . $row["reason"] . "</td>
                     <td>" . $row["msg"] . "</td>

                    </tr>";
              }
            } else {
              echo "0 results";
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
<!-- Upcmoning appointments Table -->
 <!-- Counsellor  Table -->
    <div class="patients-table">
      <div class="table-container">
        <p class="table-title">Our Counsellor</p>
        <table>
          <thead>
            <th>Ref No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
            <th>Available</th>
            <th>Gender</th>
          </thead>
          <tbody>
            <?php
            $sql = "SELECT * FROM counsellor";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
              // output data of each row
              while ($row = $result->fetch_assoc()) {
                echo "<tr>
                      <td>" . $row["id"] . "</td>
                      <td>" . $row["fname"] . "</td>
                      <td>" . $row["lname"] . "</td>
                      <td>" . $row["mobile"] . "</td>
                      <td>" . $row["email"] . "</td>
                      <td><button class='" . getModeClass($row["available"])  . "'>" . $row["available"] . "</button></td>
                      <td>" . $row["gender"] . "</td>
                    </tr>";
              }
            } else {
              echo "0 results";
            }

            ?>
          </tbody>
        </table>
      </div>
    </div>
 <!-- Counsellor  Table -->
  <!-- Patient table -->
    <div class="patients-table">
      <div class="table-container">
        <p class="table-title">Our Patients</p>
        <table>
          <thead>
            <th>Ref No</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Mobile Number</th>
            <th>Email</th>
          </thead>
          <tbody>
              <?php
              $sql = "SELECT * FROM appointments";
              $result = $conn->query($sql);
              if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                  echo "<tr>
                      <td>" . $row["id"] . "</td>
                      <td>" . $row["fname"] ."</td>
                      <td>" . $row["lname"] . "</td>
                      <td>" . $row["mobile"] . "</td>
                      <td>" . $row["email"] . "</td>
                    </tr>";
                }
              } else {
                echo "0 results";
              }

              ?>
            </tbody>
        </table>
      </div>
    </div>

  </main>
</body>

</html>