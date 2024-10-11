<?php
session_start();

include("dbconnection.php");
include("functions.php");

$user_data = check_login($conn);

?>

<!DOCTYPE html>
<html>

<head>
  <title>Counsellor - HogHeaven</title>
  <link rel="shortcut icon" href="./assets/favicon/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="./assets/css/admin.css">
  <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.6.0/css/all.css">
  <script src="./assets/js/app.js" defer></script>
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
          <li><a href="dashboard.php">Dashboard</a></li>
          <li><a href="counsellor.php" class="active">Counsellor</a></li>
          <li><a href="patient.php">Patients</a></li>
          <li><a href="appointments.php">Appointments</a></li>
        </ul>
      </div>
    </nav>
  </header>

  <main>


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
    
  </main>


  <button class="open-button" onclick="openForm()">Add Counsellor</button>

  <div class="form-popup" id="myForm">
    <form action="add.php" method="POST" class="form-container">


      <label for="name"><b>First Name</b></label>
      <input type="text" placeholder="First Name" name="fname" id="fname" required>
      <label for="name"><b>Last Name</b></label>
      <input type="text" placeholder="Last Name" name="lname" id="lname" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" id="email" required>

      <label for="mobile"><b>Mobile Number</b></label>
      <input type="tel" placeholder="Enter Mobile" pattern="[0-9]{10}" name="mobile" id="mobile" required>

      <label for="available"><b>Gender</b></label>

      <select id="gender" name="gender" id="gender">
        <option value="Male">Male</option>
        <option value="Female">Female</option>
        <option value="Others">Others</option>
      </select>
      <label for="available">Availability</label>
      <select id="available" name="available" id="available">
        <option value="Available">Available</option>
        <option value="Not-Available">Not-Available</option>
      </select>

      <button type="submit" name="submit" class="btn">Add Now</button>
      <button type="button" class="btn cancel" onclick="closeForm()">Cancel</button>
    </form>
  </div>

  <script>
    function openForm() {
      document.getElementById("myForm").style.display = "block";
    }

    function closeForm() {
      document.getElementById("myForm").style.display = "none";
    }
  </script>

</body>

</html>