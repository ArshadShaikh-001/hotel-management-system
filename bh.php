<?php
include('dbcon.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book-hall form</title>
</head>
<style>
    #foem-1{
        width: 99%;
        display: flex;
        flex-direction:column;
        justify-content:center;
        align-items:center;
        content:"";
        position: absolute;
        height:100%;
        background: url('img/adminhotel2.jpg') center center/cover no-repeat;
        border-radius:20px;
    }
    #foem-1 h1{
        text-align:center;
    }
    form{
        display: flex;
        flex-direction:column;
        border:2px solid black;
        padding: 30px;
    }
    form tr{
       padding:20px;
    }
    form tr td{
        
    }
    form tr td input{
        width: 80%;
    }
    .g{
        color:green;
        font-size:30px;
        font-weight:500;
    }
    
</style>
<body>
    <div id="foem-1">
        <h1>Hall Booking Form</h1>
        <form action="" method="post">
            <?php
              $qry="SELECT * FROM `hall` WHERE `status`='un book'";
              $run=mysqli_query($sql,$qry);
              $row=mysqli_num_rows($run);
              if($row>0)
              {
                ?>
                
                <br>
               <tr>
    <th>Name</th>
    <td><input type="text" name="name" placeholder="Enter Name" title="Name" required style="width: 100%; padding: 8px; border: 2px solid black; border-radius: 5px;"></td>
</tr>
<br>
<tr>
    <td>Address</td>
    <td><input type="text" name="address" placeholder="Enter Address" title="Address" required style="width: 100%; padding: 8px; border: 2px solid black; border-radius: 5px;"></td>
</tr>
<br>
<tr>
    <td>State</td>
    <td><input type="text" name="state" placeholder="Enter State" title="State" required style="width: 100%; padding: 8px; border: 2px solid black; border-radius: 5px;"></td>
</tr>
<br>
<tr>
    <td>City</td>
    <td><input type="text" name="city" placeholder="Enter City" title="City" required style="width: 100%; padding: 8px; border: 2px solid black; border-radius: 5px;"></td>
</tr>
<br>
<tr>
    <td>Enter E-mail:</td>
    <td><input type="email" name="email" placeholder="Enter E-Mail" title="E-mail" required style="width: 100%; padding: 8px; border: 2px solid black; border-radius: 5px;"></td>
</tr>
<br>
<tr>
    <td>Booking Date:</td>

<td><input type="date" name="date" value="<?php echo isset($_POST['date']) ? $_POST['date'] : ''; ?>" required title="Check in"></td>
</tr>
<br>
<tr>
<td>Enter Members:</td>
<td><input type="text" name="members" placeholder="Enter Members" title="Members" required></td>
</tr>
<br>
<tr>
<td>Function Name:</td>
<td><input type="text" name="functions" placeholder="Enter Function Name" title="Function Name" required></td>
</tr>
<br>
<td>
<td><input style="width:120px; height:30px; border-radius:20px; opacity:0.7;" type="submit" name="submit" value="Submit"></td>
</td>

<?php
}
else{
?>
<tr>
<td>Status</td>
<td><input type="text" name="Status" value="Not Available" class="r" disabled="disabled" title="Status"></td>
</tr>
<?php
}
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $hname = $_POST['name'] ?? '';
    $haddress = $_POST['address'] ?? '';
    $hstate = $_POST['state'] ?? '';
    $hcity = $_POST['city'] ?? '';
    $hemail = $_POST['email'] ?? '';
    $hdate = $_POST['date'] ?? '';
    $hmembers = $_POST['members'] ?? '';
    $function = $_POST['functions'] ?? '';

    // Database connection
    // Database connection
$conn = mysqli_connect("localhost", "root", "", "restaurentms");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if hall is available (status = 'un book')
$checkHallStatus = "SELECT status FROM hall WHERE id = 1";
$hallResult = mysqli_query($conn, $checkHallStatus);

if ($hallResult) {
    $hallRow = mysqli_fetch_assoc($hallResult);
    
    if ($hallRow['status'] == 'un book') {
        // Insert booking details
        $qry = "INSERT INTO `hall_details`(`id`, `name`, `address`, `state`, `city`, `email`, `date`, `members`, `function`) 
                VALUES ('', '$hname', '$haddress', '$hstate', '$hcity', '$hemail', '$hdate', '$hmembers', '$function')";

        $run = mysqli_query($conn, $qry);

        if ($run) {
            // Update hall status to 'book'
            $updateStatus = "UPDATE hall SET status = 'book' WHERE id = 1";
            mysqli_query($conn, $updateStatus);

            echo "<script>
                    alert('Hall booked successfully.');
                    window.location.href='cartpayment2.php';
                  </script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    } else {
        echo "<script>alert('Hall is already booked. Please choose another hall or date.');</script>";
    }
} else {
    echo "Error checking hall status: " . mysqli_error($conn);
}

mysqli_close($conn);

}
?>

</form>
</div>
</body>
</html>  
