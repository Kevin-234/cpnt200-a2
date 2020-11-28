<?php
  include('includes/config.php');

  // write query for all vehicles
  $sql = 'SELECT * FROM customer';

  // get the result set (set of rows)
  $result = mysqli_query($conn, $sql);

  // fetch the resulting rows as an array
  $customers = mysqli_fetch_all($result, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/reset.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&display=swap" rel="stylesheet">
</head>

<body>
    <div class="header">
        <h2>Customer List</h2>
    </div>
    
    <main class="wrapper">
        <!-- REQUIREMENT for each loop for customers -->
        <?php foreach($customers as $customer): ?>

            <div class="customer-wrapper">
                <a id="name" href="customers.php?id=<?php echo $customer['id']; ?>">
                    <p>
                        <?php echo $customer['last_name']; ?>,
                        <?php echo $customer['first_name']; ?>
                    </p>
                </a>
                <ul>
                    <li>Phone #: <?php echo $customer['phone']; ?></li>
                    <li>Email: <?php echo $customer['email']; ?></li> 
                </ul>
            </div>  
   
        <?php endforeach; ?>   
    </main>    
</body>

</html>