<?php
include('header.php');
include('dbcon.php');
?>

<section id="feedback">

</section>

<section id="feedback-form">
    <form action="feedback.php" method="post" style="width: 400px; margin: auto; padding: 20px; border-radius: 10px; background: #f8f9fa; box-shadow: 0 4px 8px rgba(0,0,0,0.2); text-align: center;">
    <input type="text" name="name" placeholder="Enter Name" style="width: 90%; padding: 12px; margin: 10px 0; font-size: 18px; border-radius: 5px; border: 1px solid #ccc;">
    <input type="text" name="feedback" placeholder="Enter Feedback" style="width: 90%; padding: 12px; margin: 10px 0; font-size: 18px; border-radius: 5px; border: 1px solid #ccc;">
    <input type="submit" name="submit" style="width: 95%; padding: 12px; background: #007bff; color: white; font-size: 18px; border-radius: 5px; border: none; cursor: pointer;">
</form>
    <?php
       if(isset($_POST['submit']))
       {
           $name = $_POST['name'];
           $feedback=$_POST['feedback'];

           $qry="INSERT INTO `feedback`(`id`, `name`, `feedback`) VALUES ('','$name','$feedback')";
           $run=mysqli_query($sql,$qry);
           if($run==true)
           {
               ?>
               <script>
                   alert("Feedback Save Perfectly");
               </script>
               <?php
           }
       }
    ?>
</section>

<?php
include('headfooter.php');
?>

</body>
</html>