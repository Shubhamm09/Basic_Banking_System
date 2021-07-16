<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
        <link rel="icon" href="css_and_images/title_logo.png" type = "image/x-icon">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css_and_images/transaction_history.css?v=<?php echo time(); ?>">

</head>

<body>
	<div class="container">
        <h2>Transaction History</h2>
        <br>
        <table class="history_table">
            <thead>
                <tr>
                    <th>Transaction Id</th>
                    <th>Sender</th>
                    <th>Receiver</th>
                    <th>Amount</th>
                    <th>Date & Time</th>
                </tr>
            </thead>
            <tbody>    
                <?php
                    include 'config.php';
                    $sql ="select * from transaction";
                    $query =mysqli_query($conn, $sql);
                    while($rows = mysqli_fetch_assoc($query))
                    {
                ?>

               <tr>
                <td><?php echo $rows['tno']; ?></td>
                <td><?php echo $rows['sender']; ?></td>
                <td><?php echo $rows['receiver']; ?></td>
                <td><?php echo $rows['balance']; ?> </td>
                <td><?php echo $rows['datetime']; ?> </td>
                <?php
                    }
                ?> 
            </tbody>
        </table>
    </div>
        <a href="index.php"><button class="btn"><- Back To Home</button></a>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>