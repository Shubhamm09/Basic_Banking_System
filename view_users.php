<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css_and_images/view_users.css" />
    <title>View All Customers</title>
        <link rel="icon" href="css_and_images/title_logo.png" type = "image/x-icon">

  </head>
  <body>
    <!-- Nav Section -->
    <nav class="navbar">
      <div class="navbar__container">
        <img src="logo.png" alt="" id="navbar__logo" />
        <ul class="navbar__menu">
          <li class="navbar__items">
            <a href="index.php" class="navbar__links" id="home-page">Home</a>
          </li>
          <li class="navbar__items">
            <a href="transaction_history.php" class="navbar__links"
              >Transaction History</a
            >
          </li>
        </ul>
      </div>
    </nav>

    <div class="customer__heading">
      <h2>View All Customers</h2>
    </div>
    <table>
        <tr>
            <th>Id</th>
            <th>Customer Name</th>
            <th>Customer Email</th>
            <th>Balance</th>
            <th>Transfer</th>
        </tr>
        <?php
            // establishing connection
            $conn = mysqli_connect("localhost","root","","star_bank");
            if($conn-> connect_error){
                die("Connection failed : ".$conn->connect_error);
            }
            $sql = "SELECT id,name,email,balance from users";
            $result = $conn -> query($sql);
            
            if($result-> num_rows > 0){
                while($rows = $result->fetch_assoc()){
        ?>
            <tr>
                        <td><?php echo $rows['id'] ?></td>
                        <td><?php echo $rows['name']?></td>
                        <td><?php echo $rows['email']?></td>
                        <td><?php echo $rows['balance']?></td>
                        <td><a href="transfer_money.php?id= <?php echo $rows['id'] ;?>"> <button type="button" class="btn">Transact</button></a></td> 
            </tr>
            <?php
                }
                echo "</table>"; 
                }else{
                echo "0 results";
                }
                $conn->close();
            ?>
      </table>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script> 
  </body>
</html>
