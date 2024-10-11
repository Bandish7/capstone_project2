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
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-duotone-solid.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-thin.css">

  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/sharp-solid.css">
  <script src="./assets/js/app.js" defer></script>
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
        <li><a href="dashboard.php" >Dashboard</a></li>
        <li><a href="counsellor.php">Counsellor</a></li>
        <li><a href="patient.php">Patients</a></li>
          <li><a href="appointments.php" class="active">Appointments</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>
  
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
                      <td>" . $row["fname"] ."</td>
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
            
  </main>
</body>

</html>