<?php

 if(isset($_POST['Save']))
 {
    $con = mysqli_connect('localhost','root','','project');
    if(mysqli_connect_errno())
    echo"Internal Server Error " .mysqli_connect_error();
    //$submit = $_GET['submit'];
    //if(!isset($submit)){$submit = '-';}
    //$db=mysqli_select_db($con,"login");
    $PaymentID = $_POST['PaymentID'];
    $BookID =$_GET['BookID'];
    $holdername = $_POST['holdername'];
    $Cardno= $_POST['Cardno'];
    $Cardtype = $_POST['Cardtype'];
    $Expiry = $_POST['Expiry'];
    $CVV = $_POST['CVV'];
    $mail = $_POST['mail'];


    $carid="Select CarID from booking where BookID = $BookID" ;
    $insert="INSERT INTO payment values('$PaymentID','$BookID','$holdername','$Cardno','$Cardtype','$Expiry','$CVV')";
    if(mysqli_query($con,$insert))
    {
     // header("Location:SendEmail.php?CarID=".$carid."&Email=".$mail); 
        header("Location:Index.php");
    }    
 }
 
?>
<html>
    <head>
        <style>
            body {
    font-family: 'Roboto', sans-serif!important;
	margin:0;
	padding:0;
	box-sizing: border-box;
}

.mainscreen
{
	min-height: 100vh;
	width: 100%;
	display: flex;
    flex-direction: column;
    background-color: #DFDBE5;
    background-image: url("images/thumb.jpg");
    background-repeat: no-repeat;
    color:#963E7B;
}

.card {
	width: 60rem;
    margin: auto;
    background: white;
    position:center;
    align-self: center;
    top: 50rem;
    border-radius: 1.5rem;
    box-shadow: 4px 3px 20px #3535358c;
    display:flex;
    flex-direction: row;
    
}

.leftside {
	background: #030303;
	width: 25rem;
	display: inline-flex;
    align-items: center;
    justify-content: center;
	border-top-left-radius: 1.5rem;
    border-bottom-left-radius: 1.5rem;
}

.product {
    object-fit: cover;
	width: 20em;
    height: 20em;
    border-radius: 100%;
}

.rightside {
    background-color: #ffffff;
	width: 35rem;
	border-bottom-right-radius: 1.5rem;
    border-top-right-radius: 1.5rem;
    padding: 1rem 2rem 3rem 3rem;
}

p{
    display:block;
    font-size: 1.1rem;
    font-weight: 400;
    margin: .8rem 0;
}

.inputbox
{
    color:#030303;
	width: 100%;
    padding: 0.5rem;
    border: none;
    border-bottom: 1.5px solid #ccc;
    margin-bottom: 1rem;
    border-radius: 0.3rem;
    font-family: 'Roboto', sans-serif;
    color: #615a5a;
    font-size: 1.1rem;
    font-weight: 500;
  outline:none;
}

.expcvv {
    display:flex;
    justify-content: space-between;
    padding-top: 0.6rem;
}

.expcvv_text{
    padding-right: 1rem;
}
.expcvv_text2{
    padding:0 1rem;
}
.label{
    color:#000
}
.button{
    background: linear-gradient(
135deg
, #753370 0%, #298096 100%);
    padding: 15px;
    border: none;
    border-radius: 50px;
    color: white;
    font-weight: 400;
    font-size: 1.2rem;
    margin-top: 10px;
    width:100%;
    letter-spacing: .11rem;
    outline:none;
}

.button:hover
{
	transform: scale(1.05) translateY(-3px);
    box-shadow: 3px 3px 6px #38373785;
}

@media only screen and (max-width: 1000px) {
    .card{
        flex-direction: column;
        width: auto;
      
    }

    .leftside{
        width: 100%;
        border-top-right-radius: 0;
        border-bottom-left-radius: 0;
      border-top-right-radius:0;
      border-radius:0;
    }

    .rightside{
        width:auto;
        border-bottom-left-radius: 1.5rem;
        padding:0.5rem 3rem 3rem 2rem;
      border-radius:0;
    }
}
.visit{
    position: relative;
    top: 100px;
    left: 360px;
    color: white;
    font-size: large;
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
    <div class="mainscreen">
    
    <div class="visit">
           <h1>Visit Again</h1>   
    </div> 
    <div class="card">
      
        <div class="leftside">
          <img
            src="images/335.jpg"
            class="product"
            alt="Shoes"
          />
        </div>
        <div class="rightside">
        <a href="booking.php">
<button class="glow-on-hover" type="button"><-back
</button>
</a>
          <form action="#" method="post">
            <h1>CheckOut</h1>
            <h2>Payment Information</h2>
            <input type="number" name="PaymentID" hidden>
            
            <p>Cardholder Name</p>
            <input type="text" class="inputbox" name="holdername" required />
            <p>Email Address</p>
            <label>Coming Soon</label>
            <p>Card Number</p>
            <input type="number" class="inputbox" name="Cardno"  required />

            <p>Card Type</p>
            <select class="inputbox" name="Cardtype"  required>
              <option value="">--Select a Card Type--</option>
              <option value="Visa">Visa</option>
              <option value="RuPay">RuPay</option>
              <option value="MasterCard">MasterCard</option>
            </select>
<div class="expcvv">

            <p class="expcvv_text">Expiry</p>
            <input type="date" class="inputbox" name="Expiry"required />

            <p class="expcvv_text2">CVV</p>
            <input type="number" class="inputbox" name="CVV" required />
        </div>
            <p></p>
            <button type="submit" name ="Save" class="button">CheckOut</button>
          </form>
        </div>
      </div>
    </div>
    </body>
</html>