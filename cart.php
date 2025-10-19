<?php
include('dbcon.php');
include('header.php');
session_start();

?>

<div class="containerr">
    
    <div class="rowe">
        <div class="col-lg-12">
            <h1>My Cart</h1>
        </div>
        <div class="col-lg-8">
            <table class="table">
                <tr>
                    <th>Sr No</th>
                    <th>Item Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
              </tr>    
                    <?php
                        
                          if(isset($_SESSION['cart']))
                          {
                            foreach($_SESSION['cart'] as $key => $value)
                            {
                                $sr=$key+1;
                                
                                echo"
                                <tr>
                                   <td>$sr</td>
                                   <td>$value[item_name]</td>
                                   <td>$value[price] <input type='hidden' class='iprice' value='$value[price] '></td>
                                   <td>
                                      <form action='manage_cart.php' method='POST'>
                                         <input type='number' class='iquantity' name='mod_quantity' onchange='this.form.submit();'  value='$value[quantity]' min='1' max='10'>
                                         <input type='hidden' name='item_name' value='$value[item_name]'>
                                      </form>
                                   </td>
                                   <td class='itotal'></td>
                                   <td>
                                      <form action='manage_cart.php' method='POST'>
                                         <button name='remove_item' class='btn'>Remove</button>
                                         <input type='hidden' name='item_name' value='$value[item_name]'>
                                      </form>
                                    </td>
                                   
                                </tr>   
                                ";

                            }
                          }
                          
                    ?>
               
                
                
            </table>
        </div>
        <div class="col-lg-4">
           
            <div>
               <h3>Grand Total : </h3>
               <h5 id="gtotal"></h5>
               <br>
               <?php 

                 if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                 {

                 
                ?>
               <form action="cartpayment.php" method="POST">
                   
                   <button class="btn"><a href="cartpayment.php"> Make Purchase</a></button>
               </form>
               <?php
                 }
               ?>
            </div>
           
        </div>
        
    </div>
</div>


<script>
    var gt=0;
    var iprice=document.getElementsByClassName('iprice');
    var iquantity=document.getElementsByClassName('iquantity');
    var itotal=document.getElementsByClassName('itotal');
    var gtotal=document.getElementById('gtotal');


    function subTotal()
    {
        gt=0;
        for(i=0;i<iprice.length;i++)
        {
            
            itotal[i].innerText=(iprice[i].value)*(iquantity[i].value);
            gt=gt+(iprice[i].value)*(iquantity[i].value);

            /* price 650 qty 1 gt=0+(650*1) 

               price 750 qty 2 gt=650+(750*2) ==2150

               price 850 qty 1 gt=2150+(850*1) ==3000
            
             */
        }
        gtotal.innerText=gt;
    }

    subTotal();
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