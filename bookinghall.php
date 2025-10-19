<?php
  include('dbcon.php');
  include('header.php');

?>

<div class="hall-container">
  <div class="hall-img">
    <img src="img/partyhall.jpg" alt="">
  </div>
  <div id="book-form">
    <form action="bh.php" method="post">
      <center>
        <table>
          <tr>
            <th colspan="2" style="font-size: 20px; padding: 15px;">Check Hall Availability</th>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center; padding: 10px;">
              <input type="date" name="hall" id="hall-date" style="width: 80%; padding: 12px; font-size: 18px; border: 2px solid #007bff; border-radius: 5px; background: #f8f9fa; cursor: pointer;">
            </td>
          </tr>
          <tr>
            <td colspan="2" style="text-align: center; padding: 15px;">
              <input type="submit" name="sub" value="Check" required style="padding: 12px 25px; font-size: 18px; background: #007bff; color: white; border: none; border-radius: 5px; cursor: pointer;">
            </td>
          </tr>
        </table>
      </center>
    </form>
  </div>
</div>

<script>
  // Set minimum date to today to prevent past selections
  document.getElementById("hall-date").min = new Date().toISOString().split("T")[0];
</script>



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