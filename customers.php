<?php
  
  include('includes/config.php');

  // get id
  $id = $_GET['id'];

  // display customer by id
  $sql = "SELECT * FROM customer WHERE id='$id'";

  // get the result set
  $result = mysqli_query($conn, $sql);

  // fetch customer as array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Personal Information</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
</head>
<body>
    <div class="customer-name">
        <h3>
             <?php echo $customers[0]['first_name']; ?>
             <?php echo $customers[0]['last_name']; ?>
        </h3>
    </div>
    
    <!-- customers list - date of birth, email, phone -->
    <div class="customers">
        <ul>
            <li>DoB: <?php echo $customers[0]['dob']; ?></li>
            <li>Email: <?php echo $customers[0]['email']; ?></li>
            <li>Phone: <?php echo $customers[0]['phone']; ?></li>
            <li>Driver license number: <?php echo $customers[0]['driver_license_number']; ?></li>
        </ul>
        <a href="index.php"><button class="btn">Back</button></a>
    </div>
    
</body>
</html>