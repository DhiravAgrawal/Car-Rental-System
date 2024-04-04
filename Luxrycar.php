<?php
$con = mysqli_connect('localhost','root','','project');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
    $sql= mysqli_query($con,"select * from Cardetails where catagory='Luxury'");
    $carno=mysqli_num_rows($sql);
    $name=array();
    $seat=array();
    $engine=array();
    $mileage=array();
    $fueltype=array();
    $image=array();
    $price=array();
    $CarID=array();
    for(;$result=mysqli_fetch_array($sql);)
         {
               array_push($name,$result['Carname']);
               array_push($seat,$result['Seats']);
               array_push($CarID,$result['CarID']);
               array_push($engine,$result['Engine']);
               array_push($mileage,$result['Mileage']);
               array_push($fueltype,$result['Fueltype']);
               array_push($image,$result['Image']);
               array_push($price,$result['Priceperday']); 
         }

          
           
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
      <meta charset="utf-8">
      <title>Booking Luxury</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
      <style>
          @import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
*{
  margin: 0;
  padding: 0;
  outline: none;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 40px;
  background-color: #0eb0e6;
/* background-image: linear-gradient(315deg, #2a2a72 0%, #009ffd 74%); */
  
}
img{
  width: 50%;
  height: 200px;
  
}
.container{
  max-width: 800px;
  background: #fff;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  height: 550px;
  border-radius: 50px;
}

.container .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container form{
  padding: 0px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
.containerbtn{
position: relative;
top: -25px;
}
.containerbtn1{
   position: relative;
top: -45px;

}

form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}

.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgba(0,0,0, 0.12);
}
.input-data input:focus ~ label, .textarea textarea:focus ~ label,
.input-data input:valid ~ label, .textarea textarea:valid ~ label{
  transform: translateY(-20px);
  font-size: 14px;
  color: #3498db;
}
.textarea textarea{
  resize: none;
  padding-top: 10px;
}
.input-data label{
  position: absolute;
  pointer-events: none;
  bottom: 10px;
  font-size: 16px;
  transition: all 0.3s ease;
}

.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
  background-color: blue;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background: #3498db;
  transform: scaleX(0);
  transform-origin: center;
  transition: transform 0.3s ease;
}
.input-data input:focus ~ .underline:before,
.input-data input:valid ~ .underline:before,
.textarea textarea:focus ~ .underline:before,
.textarea textarea:valid ~ .underline:before{
  transform: scale(1);
}
.submit-btn .input-data{
  overflow: hidden;
  height: 35px!important;
  width: 55%!important;
  position: absolute;
  right: 96px;
  bottom: -30px;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  left: -100%;
  background: linear-gradient(115deg, #ececec 10%, #0179ea 90%);
  transition: all 0.4s;
}
.submit-btn .input-data:hover .inner{
  left: 0;
}
.submit-btn .input-data input{
  background: none;
  border: none;
  color: #fff;
  font-size: 17px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
  cursor: pointer;
  position: relative;
  z-index: 2;
}





.container1{
  max-width: 800px;
  background: #fff;
  height: 550px;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: relative;
  bottom : 550px;
  left :650px;
  border-radius: 50px;
}
.container1 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container1 form{
  padding: 0px 0 0 0;
}
.container1 form .form-row{
  display: flex;
  margin: 32px 0;
}


.container2{
  max-width: 800px;
  background: #fff;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  right: 710px;
  top:770px;
  height: 580px;
  border-radius: 50px;
}
.container2 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container2 form{
  padding: 30px 0 0 0;
}
.container2 form .form-row{
  display: flex;
  margin: 32px 0;
}


.container3{
  max-width: 800px;
  background: #fff;
  width: 600px;
  height: 580px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  top: 770px;
  right: 50px;
  border-radius: 50px;
}
.container3 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container3 form{
  padding: 30px 0 0 0;
}
.container3 form .form-row{
  display: flex;
  margin: 32px 0;
}



.container4{
  max-width: 800px;
  background: #fff;
  width: 600px;
  height: 580px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  top: 1390px;
  right: 710px;
  border-radius: 50px;
}
.container4 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container4 form{
  padding: 30px 0 0 0;
}
.container4 form .form-row{
  display: flex;
  margin: 32px 0;
}


.container5{
  max-width: 800px;
  background: #fff;
  width: 600px;
  height: 580px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  right:50px;
  top:1390px;
  border-radius: 50px;
}
.container5 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container5 form{
  padding: 30px 0 0 0;
}
.container5 form .form-row{
  display: flex;
  margin: 32px 0;
}


.container6{
  max-width: 800px;
  background: #fff;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  right: 875px;
  top:1970px;
  height: 570px;
  border-radius: 50px;
}
.container6 .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #56d8e4, #9f01ea, #56d8e4, #9f01ea);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}
.container6 form{
  padding: 20px 0 0 0;
}
.container6 form .form-row{
  display: flex;
  margin: 32px 0;
}

.glow-on-hover {
    width: 120px;
    height: 50px;
    border: none;
    outline: none;
    color: #fff;
    background: #111;
    cursor: pointer;
    position: relative;
    bottom: 10px;
    z-index: 0;
    border-radius: 10px;
}

.glow-on-hover:before {
    content: '';
    background: linear-gradient(45deg, #ff0000, #ff7300, #fffb00, #48ff00, #00ffd5, #002bff, #7a00ff, #ff00c8, #ff0000);
    position: absolute;
    top: -2px;
    left:-2px;
    background-size: 400%;
    z-index: -1;
    filter: blur(5px);
    width: calc(100% + 4px);
    height: calc(100% + 4px);
    animation: glowing 20s linear infinite;
    opacity: 0;
    transition: opacity .3s ease-in-out;
    border-radius: 10px;
}

.glow-on-hover:active {
    color: #000
}

.glow-on-hover:active:after {
    background: transparent;
}

.glow-on-hover:hover:before {
    opacity: 1;
}

.glow-on-hover:after {
    z-index: -1;
    content: '';
    position: absolute;
    width: 100%;
    height: 100%;
    background: #111;
    left: 0;
    top: 0;
    border-radius: 10px;
}

@keyframes glowing {
    0% { background-position: 0 0; }
    50% { background-position: 400% 0; }
    100% { background-position: 0 0; }
}
.head{
  margin: 10px 10px 50px 490px; 
}

  .carb{
    
  }

.fclass{
  position: absolute;
  top:2000px;
  background-color:grey;
  
}
.fclass div{
  display: inline;

}
.footer-distributed .footer-center {
  width: 35%;
}

.footer-distributed .footer-center i {
  background-color: #33383b;
  color: #ffffff;
  font-size: 25px;
  width: 38px;
  height: 38px;
  border-radius: 50%;
  text-align: center;
  line-height: 42px;
  margin: 10px 15px;
  vertical-align: middle;
}

.footer-distributed .footer-center i.fa-envelope {
  font-size: 17px;
  line-height: 38px;
}

.footer-distributed .footer-center p {
  display: inline-block;
  color: #ffffff;
  font-weight: 400;
  vertical-align: middle;
  margin: 0;
}

.footer-distributed .footer-center p span {
  display: block;
  font-weight: normal;
  font-size: 14px;
  line-height: 2;
}

.footer-distributed .footer-center p a {
  color: lightseagreen;
  text-decoration: none;
}

.footer-distributed .footer-links a:before {
  content: "|";
  font-weight: 300;
  font-size: 20px;
  left: 0;
  color: #fff;
  display: inline-block;
  padding-right: 5px;
}

.footer-distributed .footer-links .link-1:before {
  content: none;
}

/* Footer Right */

.footer-distributed .footer-right {
  width: 20%;
}

.footer-distributed .footer-company-about {
  line-height: 20px;
  color: #92999f;
  font-size: 13px;
  font-weight: normal;
  margin: 0;
}

.footer-distributed .footer-company-about span {
  display: block;
  color: #ffffff;
  font-size: 14px;
  font-weight: bold;
  margin-bottom: 20px;
}

.footer-distributed .footer-icons {
  margin-top: 25px;
}

.footer-distributed .footer-icons a {
  display: inline-block;
  width: 35px;
  height: 35px;
  cursor: pointer;
  background-color: #33383b;
  border-radius: 2px;

  font-size: 20px;
  color: #ffffff;
  text-align: center;
  line-height: 35px;

  margin-right: 3px;
  margin-bottom: 5px;
}

/* If you don't want the footer to be responsive, remove these media queries */

@media (max-width: 880px) {
  .footer-distributed {
    font: bold 14px sans-serif;
  }

  .footer-distributed .footer-left,
  .footer-distributed .footer-center,
  .footer-distributed .footer-right {
    display: block;
    width: 100%;
    margin-bottom: 35px;
    text-align: center;
  }

  .footer-distributed .footer-center i {
    margin-left: 0;
  }
}
* {
  box-sizing: border-box;
}
      </style>
    
   </head>
   
   <body>

<a href="index.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
<div class="head">
  <h1>LUXURY CARS</h1>
</div>
  <div class="carb">
      <?php
      $j=0;
      for ($i=0; $i < $carno; $i++) { 
      if($i==0) {
         echo '<div class="container">';}
      else if($i==1){
         echo '<div class="container1">'; }
      else if($i==2) {
         echo '<div class="container2">';}
      else if($i==3){ 
         echo '<div class="container3">';}
      else  if($i==4){ 
         echo '<div class="container4">';}
      else if($i==5){
         echo '<div class="container5">';}
         else if($i==6){
          echo '<div class="container6">';}  
        echo  '<div class="text">
        <img src=images/'.($image[$i]).'>
         </div>
         <form action="booking.php?CarID='.$CarID[$i].'" method="post">
            <div class="form-row">
            
               <div class="input-data">
               
                  <div class="underline"></div>
                 <label for="">Car Name :'.$name[$i].'</label>
                 </div>
           
              <div class="input-data">
              
                 <div class="underline"></div>
                 <label for="">Priceperday :'.$price[$i].'</label>
                 
              
              </div>
           </div>
           <div class="form-row">
              <div class="input-data">
                 
                 <div class="underline"></div>
                <label for="">Seats :'.$seat[$i].'</label>
                 
              </div>
              <div class="input-data">
                 
                 <div class="underline"></div>
               <label for="">Engine:'.$engine[$i].'</label>
                 
              </div>
           </div>
           <div class="form-row">
           <div class="input-data textarea">
              
              <div class="underline"></div>
             <label for="">Mileage :'.$mileage[$i].'</label>   
              <br />
              </div>
              <div class="input-data textarea">
              
              <div class="underline"></div>
             <label for="">Fuel Type :'.$fueltype[$i].'</label>
              <br />
              
              

              <div class="containerbtn">
              <div class="form-row submit-btn">
                 <div class="input-data">
                 <div class="inner"></div>

              
                  <input type="submit" value="book now"/>
                              

                 </div>
                 
                 </div>
              </div>
              </div>
      
              </div>
           </div> 
           </form>
           
           </div>';
           

     
      }

      ?>
      
      </div>
    
<!-- <div class = "fclass">
<footer class="footer-distributed" >

<div class="footer-left">

  <h3>Car Rental System</span></h3>

  <p class="footer-company-name">Car Rental</p>
</div>

<div class="footer-center">

  <div>
    <i class="fa fa-map-marker"></i>
    <p><span>Pandit Deendayal Energy Univeristy ,</span>Ahemedabad, Gujarat.</p>
  </div>

  <div>
    <i class="fa fa-phone"></i>
    <p>+91 1234567890</p>
  </div>

  <div>
    <i class="fa fa-envelope"></i>
    <p><a href="mailto:support@gadidekho.com">support@gadidekho.com</a></p>
  </div>

</div>

<div class="footer-right">

  <p class="footer-company-about">
    <span>About the company</span>
    To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.
  </p>

  <div class="footer-icons">

    <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
    <a href="https://mobile.twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>
    <a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
    <a href="https://github.com/login"><i class="fa fa-github"></i></a>

  </div>

</div>

</footer> -->
</div>  
   </body>



   
</html>
