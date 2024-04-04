<?php
$con = mysqli_connect('localhost','root','','project');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
    $sql= mysqli_query($con,"select * from Cardetails where Catagory='SUV'");
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
      <title>Booking SUV</title>
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
  background-color: #2a2a72;

}
img{
  width: 50%;
  height: 160px;
  
}
.container{
  max-width: 800px;
  background: #fff;
  width: 600px;
  padding: 65px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  height: 540px;
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
  background: -webkit-linear-gradient(right, #2b292a, #b6ddc8, #302f33, #302626);
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
  height: 540px;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: relative;
  bottom : 500px;
  left: 660px;
  top: -535px;
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
  padding: 10px 0 0 0;
}
.container1 form .form-row{
  display: flex;
  margin: 35px 0;
}


.container2{
  max-width: 800px;
  background: #fff;
  width: 600px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  right: 711px;
  top:660px;
  height: 540px;
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
  padding: 20px 0 0 0;
}
.container2 form .form-row{
  display: flex;
  margin: 32px 0;
}


.container3{
  max-width: 800px;
  background: #fff;
  width: 600px;
  height: 540px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  top: 660px;
  left: 703px;
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
  height: 540px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  top: 1230px;
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
  height: 540px;
  padding: 45px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  position: absolute;
  left: 870px;
  top:1230px;
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
  top:1800px;
  height: 540px;
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
  float: right;
  position: relative;
  bottom: 0px;
  right: 620px;
}

      </style>
   </head>
   
   <body>
   <a href="index.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
<div class="head">
  <h1>SUV CARS</h1>
</div>
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
                 <input type="submit" value="book now">
             
                 </div>
                 
                 </div>
              </div>
              </div>
           </div>
        </form>
        </div>';
         


      }
      ?>
      
 
    
   </body>
</html>
