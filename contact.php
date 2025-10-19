<?php
include('dbcon.php');
include('header.php');
?>
<div class="contact-container">
   
    <div class="contact1">
        <div class="contact-symbol">
           <i class="fas fa-hamburger">Hotel VENICE</i>
        </div>
        <div class="book-h1">
            <h1>BOOK YOUR <br> HOTEL TODAY</h1>
        </div>
        <div class="book-p">
            <p>Hotels.com Customer Care Number, Contact Address, Email Id. Hotels.com is an <br> Indian Most Popular Online Hotel Booking Platforms. Many Indian’s looking for the contact.</p>
        </div>
        
        <div class="location">
        <i class="fas fa-map-marker-alt"></i> <br>
           
        </div>
        <div class="facebook">
           <i class="fab fa-facebook"></i>
           <i class="fab fa-instagram"></i>
           <i class="fab fa-twitter-square"></i>
           <i class="fab fa-youtube"></i>
        </div>
        <div class="website">
            <p>www.ChandrakantLokhande.com</p>
        </div>
    </div>
    <div class="contact2">
        <div class="contact2-h1">
        <h1>Don't Hesitate <br> To Contact Us</h1>
        </div>
       
       <div class="contact-box">
       <form action="contact.php" method="post">
                <div class="form-group-con">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name" placeholder="Enyer Your name">
                </div>
                <div class="form-group-con">
                    <label for="name">Email:</label>
                    <input type="email" name="email" id="email" placeholder="Enyer Your Email">
                </div>
                <div class="form-group-con">
                    <label for="name">Mobile:</label>
                    <input type="phone" name="phone" id="phone" placeholder="Enyer Your phone">
                </div>
                <div class="form-group-con">
                    <label for="name">Address:</label>
                    <input type="phone" name="address" id="phone" placeholder="Enyer Your Address">
                </div>
                <div class="form-group-con">
                    <label for="name">message:</label>
                  <textarea name="message" id="message" cols="20" rows="6"></textarea>
                </div>
                <div class="form-group-con">
                    <button class="con-btn" name="con-btn">Submit</button>
                </div>
            </form>
            <?php
               if(isset($_POST['con-btn']))
               {
                   $con_name=$_POST['name'];
                   $con_email=$_POST['email'];
                   $con_mobile=$_POST['phone'];
                   $con_address=$_POST['address'];
                   $con_message=$_POST['message'];

                   $qry="INSERT INTO `contact`(`id`, `name`, `email`, `mobile`, `address`, `message`) VALUES ('','$con_name','$con_email','$con_mobile','$con_address','$con_message')";

                   $run=mysqli_query($sql,$qry);
                   if($run)
                   {
                       ?>
                       <script>
                           alert("Thanks For Contacting Us");
                       </script>
                       <?php
                   }
                   else{

                   }
                  
               }
            ?>
       </div>
    </div>
    
</div>
<section id="footer" class="section footer">
        <div class="container">
            <div class="footer-container">
                <div class="footer-center">
                <h3>ABOUT US</h3>
                <p>The majority of independent <br> properties are losing out <br> on a lot of business for <br> one very simple reason: <br> their hotel websites are poorly <br> designed.</p>
                </div>
                <div class="footer-center">
                    <h3>USEFULL LINKS</h3>
                    <a href="room.php">Rooms</a>
                    <a href="contact.php">Contact Us</a>
                    <a href="food.php">Food</a>
                    <a href="bookinghall.php">Booking</a>
                    <a href="index.php">Home</a>
                </div>
                <div class="footer-center">
                    <h3>CONTACT INFO</h3>
                    <p>South-Kondwa,Pune, <br>Maharashtra,Pin-414001 <br>+91 7821893289 <br>www.restaurentms.com</p>
                </div>
                <div class="footer-center">
                    <h3>OPENING HOURS</h3>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Monday: 7:AM - 12Pm
                    </div>
                  
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Tue-Wed: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Thur-Fri: 7:Am - 12Pm
                    </div>
                    <div>
                        <span>
                            <i></i>
                        </span>
                        Sat-Sun: 7:Am - 12Pm
                    </div>


                </div>
            </div>
        </div>
    </section>
</body>
</html>