<?php
 if(isset($_POST['submit']))
 {
    $con = mysqli_connect('localhost','root','','project');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
    
    $BookID = $_GET['BookID'];
    $CarID = 	$_GET['CarID'];
    $name = $_POST['Name'];
    $email = $_POST['Email'];
    $SAddress= $_POST['SAddress'];
    $DAddress = $_POST['DAddress'];
    $phone = $_POST['Phone'];
    $dateto = $_POST['Dateto'];
    $datefrom = $_POST['Datefrom'];

    $insert="INSERT INTO booking values('$BookID','$CarID','$name','$email','$phone','$SAddress','$DAddress','$datefrom','$dateto')";
    $ins="SELECT * from booking where Name='$name'";
    $res=mysqli_query($con,$ins);
    if(mysqli_query($con,$insert))
    {
      if(isset($res)){
      $row = mysqli_fetch_array($res);
      header("Location:Payment.php?BookID=".$row['BookID']);
      }
    }    
 }
 
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Booking</title>
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
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  padding: 40px;
  background-color: #045de9;
background-image: linear-gradient(315deg, #045de9 0%, #09c6f9 74%);
  animation: change 10s ease-in infinite;
  
}

@keyframes change{
    0%{
        background-position: 0 50%;
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 0 50%;
    }
}
.container{
  max-width: 800px;
  background: #fff;
  width: 800px;
  padding: 25px 40px 10px 40px;
  box-shadow: 0px 0px 10px rgba(0,0,0,0.1);
  border-radius: 50px;
}
.container .text{
  text-align: center;
  font-size: 35px;
  font-weight: 600;
  background: -webkit-linear-gradient(right, #ff0000, #001aff, #c401ff);
  -webkit-background-clip: text; 
  -webkit-text-fill-color: transparent;
  
}
.container .text .background :hover { 
    animation: spin 3s linear infinite;
}


.container form{
  padding: 30px 0 0 0;
}
.container form .form-row{
  display: flex;
  margin: 32px 0;
}
form .form-row .input-data{
  width: 100%;
  height: 40px;
  margin: 0 20px;
  position: relative;
}
form .form-row .textarea{
  height: 70px;
}
.input-data input,
.textarea textarea{
  display: block;
  width: 100%;
  height: 100%;
  border: none;
  font-size: 17px;
  border-bottom: 2px solid rgb(56, 47, 47);
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
.textarea label{
  width: 100%;
  bottom: 40px;
  background: #fff;
}
.input-data .underline{
  position: absolute;
  bottom: 0;
  height: 2px;
  width: 100%;
}
.input-data .underline:before{
  position: absolute;
  content: "";
  height: 2px;
  width: 100%;
  background:  #0400ff;
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
  height: 45px!important;
  width: 25%!important;
}
.submit-btn .input-data .inner{
  height: 100%;
  width: 300%;
  position: absolute;
  right: -100%;
  background: -webkit-linear-gradient(left, #ff0000 , #0400ff ,#00ff0d);
  transition: all 0.7s;
}
button:hover:after .inner{
  animation:spin 3s linear infinite;
}
@keyframes spin{
    100%{
        transform: rotate(360deg);
    }
    50%{
        background-position: 100% 50%;
    }
    100%{
        background-position: 50% 0;
 
    }
}
 .submit-btn .input-data:hover .inner{
  left: 0; 
  right: 0;
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
@media (max-width: 700px) {
  .container .text{
    font-size: 30px;
  }
  .container form{
    padding: 10px 0 0 0;
  }
  .container form .form-row{
    display: block;
  }
  form .form-row .input-data{
    margin: 35px 0!important;
  }
  .submit-btn .input-data{
    width: 40%!important;
  }
}
.one{
  position: relative;
  bottom: 25px;
  left: 10px;
}
.two{
  position: relative;
  bottom: 25px;
  left: 10px;
}
.three{
  position: relative;
  bottom: 10px;
  left: 20px;
}
.four{
  position: relative;
  left: 10px;
  top: 10px;
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
      <div class="container">
      <div class="text">
         Booking
      </div>
      <a href="index.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
      <form action="#" method="post">
      <div class="form-row">
        <input type="number" name="BookID" hidden>
      
            <div class="input-data">
               <input type="text" name="Name" required>
               <div class="underline"></div>
               <label for="">Name</label>
            </div>
            <div class="input-data">
               <input type="text" name="Email" required>
               <div class="underline"></div>
               <label for="">Email</label>
            </div>
         </div>
         <div class="form-row">
         
            <div class="input-data">
          
               <input type="text" name="Phone" required>
               <div class="underline"></div>
               <label for="">Phone No.</label>
           
            </div>
         </div>
         
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="SAddress" required>
               <div class="underline"></div>
               <label for="">Source address</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="text" name="DAddress" required>
               <div class="underline"></div>
               <label for="">Destination Address</label>
            </div>
         </div>
         <div class="form-row">
            <div class="input-data">
               <input type="date" name="Datefrom" required>
               <div class="underline"></div>
               <div class="one">
               <label for="">Date From</label>
            </div>
            </div>
         
            <div class="input-data">
               <input type="date" name="Dateto" required>
               <div class="underline"></div>
               <div class="two">
               <label for="">Date to</label>
               </div>
            </div>
         </div>
            <div class="form-row submit-btn">
               <div class="input-data">
                  <div class="inner"></div>
                <input type="submit" name="submit" value="submit"/>
                               </div>
            </div> 
         </div>
         </div></form>
    </div>
   </body>
</html>